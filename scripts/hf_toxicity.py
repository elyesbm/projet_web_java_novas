#!/usr/bin/env python3
"""
Appelle l'API Hugging Face (modèle unitary/toxic-bert) via le client officiel.
Utilisé par PHP quand l'URL HTTP directe n'est pas disponible (410/404).

Installation : pip install huggingface_hub
Usage : echo "Texte" | python3 hf_toxicity.py
     ou : python3 hf_toxicity.py "Texte"

Variable d'environnement : HF_TOKEN (obligatoire)
Sortie : JSON [{"label":"toxic","score":0.99}, ...] sur stdout.
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
        print(json.dumps({"error": "huggingface_hub manquant. Exécuter: pip install huggingface_hub"}), file=sys.stderr)
        sys.exit(2)

    try:
        client = InferenceClient(model="unitary/toxic-bert", token=token)
        result = client.text_classification(text)
    except Exception as e:
        print(json.dumps({"error": str(e)}), file=sys.stderr)
        sys.exit(1)

    # result = [LabelScore(label='toxic', score=0.99), ...] ou liste de dicts
    out = []
    for item in result:
        if hasattr(item, "label") and hasattr(item, "score"):
            out.append({"label": item.label, "score": float(item.score)})
        elif isinstance(item, dict) and "label" in item and "score" in item:
            out.append({"label": item["label"], "score": float(item["score"])})
    print(json.dumps(out, ensure_ascii=False))


if __name__ == "__main__":
    main()
