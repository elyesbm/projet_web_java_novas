# Guide de test – Génération d’images (Replicate FLUX)

La génération d’images utilise **Replicate** avec le modèle **FLUX Schnell**. Gratuit pour des essais limités, puis payant à l’usage (~0,003 $/image). Compatible avec les prompts en français et en anglais.

## Prérequis

1. **Migration exécutée**
   ```bash
   php bin/console doctrine:migrations:migrate --no-interaction
   ```

2. **Token Replicate** dans `.env.local` :
   ```
   REPLICATE_API_TOKEN=r8_xxxxxxxxxxxx
   ```
   Créer un token sur [replicate.com/account/api-tokens](https://replicate.com/account/api-tokens)

3. **Dossier d’upload** créé automatiquement à la première génération :
   - `public/uploads/publication_images/`

---

## Test dans le navigateur

1. **Se connecter** au forum (publications nécessitent une authentification).

2. **Aller sur** :
   ```
   http://127.0.0.1:8000/publications/nouvelle
   ```

3. **Remplir** :
   - Contexte (Academic ou Personal)
   - Titre
   - **Dans la section « Image (optionnel) – Générer avec l'IA »** :
     - Saisir un prompt (FR ou EN, ex. : `Robot tenant une planche rouge, style réaliste`)
     - Cliquer sur **Générer**
     - Attendre 10-30 secondes
     - Un aperçu doit s’afficher

4. **Publier** : remplir le contenu, puis cliquer sur **Publier**.

5. **Vérifier** : retour sur la liste des publications, l’image doit apparaître en haut de la publication.

---

## Test en ligne de commande (curl)

### Génération d’image via l’API interne

```bash
# Remplacer COOKIE par ton cookie de session après connexion
curl -X POST "http://127.0.0.1:8000/publications/generer-image" \
  -H "Content-Type: application/json" \
  -H "Cookie: PHPSESSID=..." \
  -d '{"prompt": "Robot tenant une planche rouge, style réaliste"}'
```

Réponse attendue :
```json
{"ok":true,"filename":"flux_xxx_1234567890.png"}
```

---

## Dépannage

| Problème | Solution |
|----------|----------|
| Erreur 401 | Se connecter avant d'accéder à la page /publications/nouvelle |
| Erreur 500 "REPLICATE_API_TOKEN" | Vérifier `.env.local` et la présence de `REPLICATE_API_TOKEN` |
| Erreur API Replicate | Vérifier le token sur replicate.com/account/api-tokens. S'assurer d'avoir des crédits (essai gratuit ou compte crédité). |
| Image non visible | Vérifier que `public/uploads/publication_images/` existe et que le fichier y est bien créé |
