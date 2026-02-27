#!/usr/bin/env python3
"""
Analyse de sentiments via Hugging Face Inference Providers
Modèle : nlptown/bert-base-multilingual-uncased-sentiment

Installation : pip install huggingface_hub
Usage :
    echo "Texte" | python3 hf_sentiment.py
    python3 hf_sentiment.py "bonjour je suis fatiguée"

Variables d'environnement :
  HF_TOKEN  (obligatoire)  Token HF avec permission "Inference Providers"

Sortie :
  JSON sur stdout : [{"label": "...", "score": 0.x}, ...]
"""

import json
import os
import sys


def main() -> None:
    token = os.environ.get("HF_TOKEN", "").strip()
    if not token:
        print(json.dumps({"error": "HF_TOKEN manquant"}), file=sys.stderr)
        sys.exit(2)

    if len(sys.argv) > 1:
        text = " ".join(sys.argv[1:]).strip()
    else:
        text = sys.stdin.read().strip()

    if not text:
        print("[]")
        return

    try:
        from huggingface_hub import InferenceClient
    except ImportError:
        print(
            json.dumps(
                {"error": "huggingface_hub manquant. Exécuter: pip install huggingface_hub"}
            ),
            file=sys.stderr,
        )
        sys.exit(2)

    try:
        # Utilisation de HF Inference Providers (HF Inference API)
        client = InferenceClient(
            provider="hf-inference", api_key=os.environ.get("HF_TOKEN", "").strip()
        )
        result = client.text_classification(
            text,
            model="nlptown/bert-base-multilingual-uncased-sentiment",
        )
    except Exception as e:
        print(json.dumps({"error": str(e)}), file=sys.stderr)
        sys.exit(1)

    out = []
    for item in result:
        # LabelScore(label='5 stars', score=0.9) ou dict équivalent
        if hasattr(item, "label") and hasattr(item, "score"):
            out.append({"label": item.label, "score": float(item.score)})
        elif isinstance(item, dict) and "label" in item and "score" in item:
            out.append({"label": item["label"], "score": float(item["score"])})

    print(json.dumps(out, ensure_ascii=False))


if __name__ == "__main__":
    main()

