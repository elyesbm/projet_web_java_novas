# Génération d'images – Hugging Face uniquement

Le projet utilise **uniquement Hugging Face** pour la génération d'images (text-to-image).

## Fichiers utilisés

- **`src/Service/HuggingFaceImageService.php`** – Service de génération (API HTTP ou script Python).
- **`scripts/hf_image.py`** – Script Python optionnel (si `HF_IMAGE_SCRIPT` est défini dans `.env`).

## Configuration

Variables utiles dans `.env` / `.env.local` :

- **`HF_TOKEN`** – Token Hugging Face (obligatoire pour la génération).
- **`HF_IMAGE_SCRIPT`** – Optionnel, ex. `scripts/hf_image.py` pour utiliser le script au lieu de l’API HTTP.
- **`HF_IMAGE_PROVIDER`** – Optionnel, ex. `replicate` pour le modèle ByteDance/SDXL-Lightning.

## Vérifier la config

```bash
php bin/console app:image-service
```

Cette commande affiche les fichiers utilisés et indique si `HF_TOKEN` est défini.
