#!/usr/bin/env python3
"""
Génération d'image à partir de texte via Hugging Face Inference Providers.

Modèle : ByteDance/SDXL-Lightning (comme sur huggingface.co)
Provider par défaut : replicate (recommandé par l'UI HF pour ce modèle)

Installation : pip install huggingface_hub
Usage :
    echo "Prompt" | python3 hf_image.py
    python3 hf_image.py "Astronaut riding a horse"

Variables d'environnement :
  HF_TOKEN          (obligatoire) Token HF avec permission "Inference Providers"
  HF_IMAGE_PROVIDER (optionnel)  "replicate" (défaut, recommandé), "hf-inference", "fal-ai", etc.
  HF_IMAGE_MODEL    (optionnel)  Modèle, défaut: ByteDance/SDXL-Lightning

Sortie : une ligne base64 de l'image PNG sur stdout.
"""

import base64
import os
import sys


def main() -> None:
    token = os.environ.get("HF_TOKEN", "").strip()
    if not token:
        print("HF_TOKEN manquant", file=sys.stderr)
        sys.exit(2)

    if len(sys.argv) > 1:
        prompt = " ".join(sys.argv[1:]).strip()
    else:
        prompt = sys.stdin.read().strip()

    if not prompt:
        print("Prompt vide", file=sys.stderr)
        sys.exit(2)

    try:
        from huggingface_hub import InferenceClient
    except ImportError:
        print("huggingface_hub manquant. Exécuter: pip install huggingface_hub", file=sys.stderr)
        sys.exit(2)

    provider = os.environ.get("HF_IMAGE_PROVIDER", "replicate").strip() or "replicate"
    model = os.environ.get("HF_IMAGE_MODEL", "ByteDance/SDXL-Lightning").strip() or "ByteDance/SDXL-Lightning"

    try:
        client = InferenceClient(provider=provider, api_key=token)
        image = client.text_to_image(prompt, model=model)
    except Exception as e:
        print(str(e), file=sys.stderr)
        sys.exit(1)

    # image est un PIL.Image
    import io
    buf = io.BytesIO()
    image.save(buf, format="PNG")
    b64 = base64.b64encode(buf.getvalue()).decode("ascii")
    print(b64)


if __name__ == "__main__":
    main()
