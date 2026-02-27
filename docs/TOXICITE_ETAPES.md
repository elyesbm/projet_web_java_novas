# Analyse de toxicité – Configuration pas à pas (API Hugging Face)

On utilise uniquement l’API Hugging Face avec le modèle **unitary/toxic-bert**.  
Suivre les étapes dans l’ordre.

---

## Étape 1 : Créer un token Hugging Face

Le token n’est pas « lié » à un modèle précis : il donne à ton compte le droit d’appeler l’API d’inférence. Avec la bonne permission, tu peux appeler **unitary/toxic-bert** (et d’autres modèles). On vérifie que ça marche avec Toxic-BERT en faisant un appel de test (étape 3) : si on reçoit des scores, le token a bien accès à ce modèle.

1. Va sur **https://huggingface.co/settings/tokens**
2. Clique sur **« Create new token »**
3. Choisis **« Fine-grained »**
4. Donne un nom (ex. `novas-toxicity`)
5. Coche la permission **« Make calls to Inference Providers »** (ou équivalent)
6. Crée le token et **copie-le** (il commence par `hf_...`). Tu ne pourras plus le revoir après.

---

## Étape 2 : Mettre le token dans le projet

Dans le fichier **`.env.local`** (à la racine du projet), ajoute ou modifie :

```env
HF_TOKEN=hf_xxxxxxxxxxxxxxxx  (colle ton token ici)
```

Enregistre le fichier.

---

## Étape 3 : Vérifier que le token est lu

Dans un terminal, à la racine du projet :

```bash
php bin/console app:test-toxicity "Bonjour"
```

- Si tu vois **« HF_TOKEN est vide »** ou aucun score : le token n’est pas pris en compte (vérifie `.env.local`, pas de guillemets autour de la valeur).
- Si tu vois une **erreur HTTP 401** : le token est lu mais refusé (refais un token avec la bonne permission).
- Si tu vois **410** ou **404** : le token est accepté mais l’**URL** de l’API n’est pas la bonne → on la corrige à l’étape suivante.

---

## Étape 4 : Si tu as 404/410 – utiliser le client officiel HF (recommandé)

L’appel HTTP direct renvoie souvent **404** (router) ou **410** (ancienne URL). Hugging Face recommande d’utiliser leur **client officiel** (Python ou JS). On peut faire pareil depuis PHP en appelant un petit script Python qui utilise l’API avec le bon client.

1. **Installer le client Hugging Face** (une fois) :
   ```bash
   pip install huggingface_hub
   ```

2. **Dans `.env.local`**, ajouter :
   ```env
   HF_TOXICITY_SCRIPT=scripts/hf_toxicity.py
   ```
   (Le script `scripts/hf_toxicity.py` appelle l’API **unitary/toxic-bert** via le client officiel ; ton **HF_TOKEN** est transmis au script.)

3. **Tester** :
   ```bash
   php bin/console app:test-toxicity "Tu es nul, crève."
   ```
   Tu dois voir des scores et `isToxic() : OUI`. La commande affichera `URL configurée : script: scripts/hf_toxicity.py`.

---

## Étape 5 (optionnel) : Utiliser une URL HTTP directe

Si une URL HTTP pour la text classification est documentée par Hugging Face, tu peux la mettre dans `.env.local` avec `HF_INFERENCE_URL=...` et retirer `HF_TOXICITY_SCRIPT` pour n’utiliser que l’HTTP.

---

## Étape 6 : Tester dans l’application

1. Va sur **Nouvelle publication**
2. Remplis le formulaire et mets dans le contenu : **« Tu es nul et inutile, crève. »**
3. Envoie le formulaire.
4. Tu dois voir le message : **« Votre publication contient du contenu inapproprié... »** et la publication ne doit **pas** être créée.

Si tout ça fonctionne, l’analyse de toxicité est bien branchée sur l’API Hugging Face.
