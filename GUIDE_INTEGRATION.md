# 🔀 Guide d'Intégration — Projet Web Java Novas

> **Date** : 25 Février 2026  
> **Branche actuelle** : `rayenbenaissia_gestion_talent`  
> **Dépôt** : `git@github.com:elyesbm/projet_web_java_novas.git`

---

## 📋 Résumé de la Situation

### État actuel du dépôt

| Élément | Détail |
|---------|--------|
| **Ta branche** | `rayenbenaissia_gestion_talent` |
| **Branche cible** | `main` (ou `integration_fares_ilyes_mariem_dhouha_khalil_rayen`) |
| **Fichiers modifiés** | 74 fichiers (~9 064 lignes ajoutées, ~943 supprimées) |

### Branches du groupe (chaque membre)

| Membre | Branche |
|--------|---------|
| Fares Triki | `Fares_Triki_gestion_Jobs` |
| Elyes Ben Moussa | `elyesbenmoussa_gestion_user` |
| Mariem Ferchichi | `mariemFerchichi_gestion_Atelier` |
| Dhouha | `Dhouha_GestionForum` / `final_dhouha` |
| Med Khalil Ben Ezzine | `med_khalil_ben_ezzine_gestion_des_articles` |
| Rayen Ben Aissia (toi) | `rayenbenaissia_gestion_talent` |

### Branche d'intégration existante

Il existe déjà une branche d'intégration progressive :
```
integration_fares_ilyes
  → integration_fares_ilyes_mariem
    → integration_fares_ilyes_mariem_dhouha
      → integration_fares_ilyes_mariem_dhouha_khalil
        → integration_fares_ilyes_mariem_dhouha_khalil_rayen  ← dernière intégration
```

> [!IMPORTANT]
> Ta branche actuelle contient des commits **plus récents** que la branche d'intégration finale (notifications, AI generation, quiz, 2FA, etc.). Ces nouveaux commits n'ont **pas encore** été fusionnés.

---

## 🚀 Étapes d'Intégration

### Étape 1 — Préparer ta branche (commit + push)

S'assurer que tout ton travail local est sauvegardé et poussé sur GitHub.

```bash
# 1. Vérifier qu'il n'y a rien de non-commité
git status

# 2. Si des fichiers ne sont pas commités :
git add .
git commit -m "Finalisation de la gestion talent (notifications, AI, quiz, 2FA)"

# 3. Pousser ta branche sur GitHub
git push origin rayenbenaissia_gestion_talent
```

---

### Étape 2 — Récupérer les dernières mises à jour

Télécharger toutes les branches distantes pour avoir la version la plus récente de chaque branche.

```bash
git fetch --all
```

---

### Étape 3 — Créer une Pull Request (PR) sur GitHub

> [!TIP]
> La **Pull Request** est la méthode recommandée car elle permet à ton équipe de **review le code** avant la fusion, et GitHub montre clairement les **conflits**.

1. Aller sur **GitHub** → [https://github.com/elyesbm/projet_web_java_novas](https://github.com/elyesbm/projet_web_java_novas)
2. Cliquer sur **"Pull requests"** → **"New pull request"**
3. Configurer :
   - **base** : `main` (ou la branche d'intégration finale du groupe)
   - **compare** : `rayenbenaissia_gestion_talent`
4. Donner un titre clair, par exemple :  
   `"Intégration Rayen : Gestion Talent (Skills, LearningPaths, Notifications, AI, Quiz, 2FA)"`
5. Dans la description, lister les fonctionnalités ajoutées :
   - ✅ Gestion des Skills (CRUD + stats marché)
   - ✅ Learning Paths (CRUD + playlists YouTube)
   - ✅ Génération AI de parcours d'apprentissage
   - ✅ Tuteur AI pour les skills
   - ✅ Système de notifications in-app
   - ✅ Quiz intégrés
   - ✅ Authentification 2FA
   - ✅ Pagination
   - ✅ Vérification mailing (API Brevo)
6. Cliquer sur **"Create pull request"**

---

### Étape 4 — Vérifier et Résoudre les Conflits

Quand la PR est créée, GitHub affiche :
- ✅ **"Able to merge"** → Pas de conflit, on peut merger directement
- ❌ **"Conflicts must be resolved"** → Il y a des conflits à résoudre

#### Si il y a des conflits (probable) :

Les fichiers les plus susceptibles d'avoir des conflits sont :

| Fichier | Raison |
|---------|--------|
| `config/services.yaml` | Chaque module ajoute ses services |
| `config/packages/security.yaml` | La 2FA modifie la sécurité |
| `config/bundles.php` | Ajout de nouveaux bundles |
| `composer.json` / `composer.lock` | Dépendances ajoutées |
| `templates/front/partials/_auth_nav.html.twig` | La navbar est modifiée par plusieurs modules |
| `config/routes.yaml` | Nouvelles routes ajoutées |

#### Comment résoudre les conflits localement :

```bash
# 1. Se mettre sur la branche cible (main ou intégration)
git checkout main
git pull origin main

# 2. Créer une branche de merge temporaire (pour ne pas casser main)
git checkout -b integration_finale

# 3. Merger ta branche dedans
git merge rayenbenaissia_gestion_talent

# 4. Si conflits, Git les marque dans les fichiers avec :
#    <<<<<<< HEAD
#    (code de main)
#    =======
#    (ton code)
#    >>>>>>> rayenbenaissia_gestion_talent

# 5. Ouvrir chaque fichier en conflit et garder LES DEUX parties
#    (ne pas supprimer le code des autres, ajouter le tien)

# 6. Après résolution de chaque fichier :
git add <fichier_résolu>

# 7. Finaliser le merge
git commit -m "Résolution des conflits - intégration Rayen"

# 8. Pousser la branche d'intégration
git push origin integration_finale
```

---

### Étape 5 — Tester le Site Complet

> [!CAUTION]
> **Ne jamais merger dans `main` sans tester !** Le site doit fonctionner complètement.

```bash
# 1. Installer les dépendances
composer install

# 2. Mettre à jour la base de données
php bin/console doctrine:migrations:migrate

# 3. Vider le cache
php bin/console cache:clear

# 4. Lancer le serveur
symfony server:start
```

**Checklist de test :**

- [ ] La page d'accueil se charge correctement
- [ ] Login / Register fonctionnent
- [ ] **Gestion des Skills** — Ajout, modification, suppression
- [ ] **Learning Paths** — Liste, détail, playlists
- [ ] **Génération AI** — Le bouton de génération fonctionne dans l'admin
- [ ] **Notifications** — La cloche dans la navbar fonctionne
- [ ] **Forum (Dhouha)** — Les pages forum sont accessibles
- [ ] **Ateliers (Mariem)** — Les ateliers/réservations fonctionnent
- [ ] **Articles (Khalil)** — Les articles sont accessibles
- [ ] **Jobs (Fares)** — La gestion des jobs fonctionne
- [ ] **Users (Elyes)** — La gestion utilisateurs fonctionne
- [ ] **2FA** — Le setup et la vérification marchent
- [ ] **Admin Panel** — Toutes les sections admin sont accessibles
- [ ] **Navbar** — Tous les liens fonctionnent, pas de doublons

---

### Étape 6 — Merger dans Main

Une fois que tout fonctionne :

**Option A — Via GitHub (recommandé) :**
1. Aller sur la Pull Request
2. Cliquer sur **"Merge pull request"**
3. Choisir **"Create a merge commit"**
4. Confirmer

**Option B — En ligne de commande :**
```bash
git checkout main
git merge integration_finale
git push origin main
```

---

## ⚠️ Zones de Risque et Précautions

### Fichiers partagés critiques

Ces fichiers sont modifiés par **plusieurs membres** du groupe. Il faut faire très attention lors du merge :

| Fichier | Ce qu'il faut vérifier |
|---------|----------------------|
| `_auth_nav.html.twig` | Que TOUS les liens de la navbar sont présents (skills, ateliers, forum, articles, jobs) |
| `services.yaml` | Que TOUS les services de chaque module sont déclarés |
| `security.yaml` | Que les access_control couvrent toutes les routes |
| `composer.json` | Que toutes les dépendances sont listées |
| `.env` | Que toutes les variables d'environnement sont présentes |

### Règles d'or pour un merge sans problème

1. **Ne jamais supprimer le code des autres** — Toujours ajouter, jamais remplacer
2. **Communiquer avec le groupe** — Prévenir avant de merger
3. **Tester après chaque merge** — Lancer le serveur et vérifier
4. **Faire une branche de backup** — `git branch backup_avant_merge` avant de commencer
5. **Utiliser les Pull Requests** — Pour que l'équipe puisse review

---

## 🤖 Est-ce que je peux faire l'intégration pour toi ?

**Oui, je peux t'aider sur :**
- ✅ Commit et push de ta branche
- ✅ Résolution de conflits de merge (en analysant chaque conflit)
- ✅ Vérification que les fichiers de config sont corrects après le merge

**Ce qui nécessite ton action :**
- 🔐 La Pull Request sur GitHub (tu dois la créer manuellement sur le site)
- 👥 La communication avec ton équipe (ils doivent approuver la PR)
- 🧪 Les tests finaux (tu dois vérifier visuellement que tout marche)

---

> [!NOTE]
> Si tu veux que je procède au merge localement maintenant, dis-le moi et je le ferai étape par étape en résolvant chaque conflit. Sinon, suis les étapes ci-dessus manuellement avec ton équipe.
