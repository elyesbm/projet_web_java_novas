# Analyse de sentiments avec Hugging Face (nlptown/bert-base-multilingual-uncased-sentiment)

Ce guide explique comment activer l’analyse de sentiments sur le contenu des publications en utilisant le modèle **`nlptown/bert-base-multilingual-uncased-sentiment`** via Hugging Face.

---

## 1. Pré-requis : token Hugging Face

Tu dois déjà avoir un **HF_TOKEN** configuré (même que pour la toxicité et les images) avec la permission **« Inference Providers »**.

Dans `.env.local` (ou déjà fait) :

```env
HF_TOKEN=hf_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

---

## 2. Option HTTP directe (par défaut)

Le service `SentimentAnalysisService` appelle par défaut l’URL suivante :

```text
https://router.huggingface.co/models/nlptown/bert-base-multilingual-uncased-sentiment
```

Tu peux la surcharger si besoin dans `.env.local` :

```env
HF_SENTIMENT_URL=https://router.huggingface.co/models/nlptown/bert-base-multilingual-uncased-sentiment
```

En cas d’erreur 401 (token) ou 404/410 (endpoint), le service renverra simplement `null` et la note ne sera pas affichée sur le site.

---

## 3. Option recommandée : script Python (client officiel)

Pour une compatibilité maximale avec les évolutions de l’API HF, tu peux utiliser le script Python `scripts/hf_sentiment.py` qui s’appuie sur `huggingface_hub.InferenceClient` (code fourni dans le repo).

1. Installer le client :  
   ```bash
   pip install huggingface_hub
   ```

2. Dans `.env.local`, ajouter :
   ```env
   HF_SENTIMENT_SCRIPT=scripts/hf_sentiment.py
   ```

3. Le service utilisera alors **en priorité** ce script pour calculer la note 1–5 à partir du texte de la publication.

Le script renvoie un JSON de la forme :

```json
[{"label": "5 stars", "score": 0.92}, {"label": "4 stars", "score": 0.05}, ...]
```

Le service convertit automatiquement cela en **note 1–5** (en prenant le label avec le meilleur score).

---

## 4. Utilisation dans l’application

- Le service PHP est `App\Service\SentimentAnalysisService`.
- Il expose une méthode :

```php
public function analyze(string $text): ?int
```

qui retourne un entier entre **1 et 5** (ou `null` si l’analyse est désactivée ou en erreur).

L’intégration dans le contrôleur des publications calcule cette note pour chaque contenu et l’affiche sous forme d’étoiles dans la liste des publications.

---

## 5. Résumé

- **Token** : `HF_TOKEN` avec permission « Inference Providers ».
- **Config optionnelle** :
  - `HF_SENTIMENT_URL` pour surcharger l’URL HTTP (router HF),
  - `HF_SENTIMENT_SCRIPT` pour utiliser le script Python basé sur `InferenceClient`.
- **Comportement** :  
  - Si `HF_SENTIMENT_SCRIPT` est défini et accessible → script utilisé en priorité.  
  - Sinon → appel HTTP vers l’URL (par défaut `router.huggingface.co`).  
  - En cas d’échec → aucune note de sentiment n’est affichée, mais la publication reste visible.

