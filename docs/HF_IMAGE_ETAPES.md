# Génération d’images à partir du texte avec Hugging Face (étape par étape)

Ce guide permet d’utiliser l’API **Hugging Face Inference Providers** (text-to-image) pour générer les images lors de la création ou modification d’une publication.

---

## Étape 1 : Créer un token Hugging Face avec la bonne permission

1. Va sur [Hugging Face → Settings → Access Tokens](https://huggingface.co/settings/tokens).
2. Clique sur **« Create new token »**.
3. Donne un nom (ex. `novas-image`) et **coche la permission « Inference Providers »** (ou équivalent pour les appels à l’API d’inférence).
   - Pour les *Fine-grained tokens*, assure-toi d’avoir une permission du type **« Make calls to Inference Providers »** ou **« inference.serverless.write »** selon l’interface.
4. Crée le token et **copie-le** (il commence par `hf_`). Tu ne pourras plus le revoir ensuite.

> **Astuce** : Le même token peut servir pour l’analyse de toxicité et pour la génération d’images, tant qu’il a les permissions nécessaires.

---

## Étape 2 : Configurer le projet

1. Ouvre (ou crée) le fichier **`.env.local`** à la racine du projet.
2. Ajoute ou modifie :

```env
# Token Hugging Face (permission "Inference Providers")
HF_TOKEN=hf_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

Remplace `hf_xxx...` par ton token.

3. **(Optionnel)** Pour utiliser un autre modèle que le défaut (`ByteDance/SDXL-Lightning`) :

```env
HF_IMAGE_MODEL=ByteDance/Hyper-SD
```

Ou par exemple :

- `black-forest-labs/FLUX.1-Krea-dev`
- `Qwen/Qwen-Image`

4. **(Optionnel)** L’URL par défaut est `https://router.huggingface.co`. Pour en utiliser une autre :

```env
HF_IMAGE_BASE_URL=https://router.huggingface.co
```

5. **Si tu as l’erreur « HTTP 410 » ou « 404 »** (ancien endpoint non supporté), utilise le script Python qui s’appuie sur le client officiel Hugging Face :

   - Installe Python et le client : `pip install huggingface_hub`
   - Dans `.env.local`, ajoute :

```env
HF_IMAGE_SCRIPT=scripts/hf_image.py
HF_IMAGE_PROVIDER=replicate
```

   Le modèle utilisé par le script est **ByteDance/SDXL-Lightning** (comme sur la [page du modèle](https://huggingface.co/ByteDance/SDXL-Lightning)) avec le provider Replicate.

Sauvegarde le fichier.

---

## Étape 3 : Priorité des services d’images

L’application choisit automatiquement le service de génération d’images dans cet ordre :

1. **Hugging Face** – si `HF_TOKEN` est renseigné dans `.env.local`.
2. **Vertex AI (Imagen)** – si `VERTEX_AI_PROJECT_ID` et `VERTEX_AI_API_KEY` sont renseignés.
3. **Replicate (FLUX)** – en dernier recours si `REPLICATE_API_TOKEN` est configuré.

Donc dès que `HF_TOKEN` est défini, c’est **Hugging Face** qui est utilisé pour la génération d’images.

---

## Étape 4 : Tester

1. Démarre l’application (ou vide le cache si besoin) :

```bash
php bin/console cache:clear
```

2. Va sur la page de **création** ou **modification** d’une publication.
3. Remplis le formulaire et clique sur le bouton qui **génère l’image à partir du texte** (ex. « Générer via Vertex AI » ou « Générer l’image » selon le libellé de ton template).
4. Si tout est bien configuré :
   - L’image est générée via l’API Hugging Face.
   - Elle est enregistrée avec un préfixe `hf_` dans `public/uploads/publication_images/`.

En cas d’erreur, le message renvoyé par l’API (ex. « Modèle en cours de chargement », « 401 Unauthorized ») s’affiche. Vérifie que le token a bien la permission **Inference Providers** et qu’il n’a pas été révoqué.

---

## Étape 5 : En cas de problème

| Problème | À vérifier |
|----------|------------|
| **401 Unauthorized** | Token invalide ou sans permission « Inference Providers ». Recrée un token avec la bonne permission. |
| **503 / Modèle en cours de chargement** | Le modèle est en train de se charger côté Hugging Face. Attends quelques secondes et réessaie. |
| **410 Gone ou 404** | L’ancien endpoint (`api-inference.huggingface.co`) n’est plus supporté. L’app utilise déjà `router.huggingface.co`. Si l’erreur persiste, configure le script Python : `pip install huggingface_hub`, puis dans `.env.local` : `HF_IMAGE_SCRIPT=scripts/hf_image.py` et `HF_IMAGE_PROVIDER=replicate`. |
| **Aucune image générée** | Vérifie que `HF_TOKEN` est bien défini dans `.env.local` (et que tu as bien vidé le cache après modification). |

---

## Résumé

- **Token** : Hugging Face avec permission **« Inference Providers »** dans `.env.local` → `HF_TOKEN=...`
- **Optionnel** : `HF_IMAGE_MODEL` (modèle), `HF_IMAGE_BASE_URL` (URL de l’API), `HF_IMAGE_SCRIPT` (script Python en cas de 410/404), `HF_IMAGE_PROVIDER` (ex. `replicate`).
- **Comportement** : Dès que `HF_TOKEN` est présent, la génération d’images utilise Hugging Face en priorité (modèle ByteDance/SDXL-Lightning) ; les images sont préfixées par `hf_` dans les uploads. Si `HF_IMAGE_SCRIPT` est défini, le script Python est utilisé en priorité pour plus de fiabilité.
