# Authentification à Deux Facteurs (2FA) - NoVas

## Guide d'Implémentation

### 📋 Vue d'ensemble
La 2FA (Two-Factor Authentication) a été implémentée dans NoVas pour fournir une sécurité supplémentaire lors de la connexion de l'utilisateur. Elle utilise le protocole TOTP (Time-based One-Time Password) compatible avec Google Authenticator, Microsoft Authenticator, Authy et autres applications similaires.

---

## 🔧 Installation et Configuration

### Packages Installes
- **endroid/qr-code** ~v6.0 : Pour générer les codes QR
- **pragmarx/google2fa** v8.0 : Pour la génération et validation TOTP
- **pragmarx/google2fa-qrcode** v3.0 : Pour la génération de codes QR TOTP

### Migration de Base de Données
Une migration a été créée pour ajouter 3 colonnes à la table `user`:
- `two_factor_secret` (VARCHAR 255, nullable): Stocke la clé secrète TOTP
- `two_factor_enabled_at` (DATETIME, nullable): Date d'activation de 2FA
- `backup_codes` (JSON, nullable): Codes de secours pour l'utilisateur

**Commande pour appliquer:**
```bash
php bin/console doctrine:migrations:migrate
```

---

## 📁 Structure des Fichiers

### Service
```
src/Service/TwoFactorAuthService.php
├── generateSecret():  string
├── validateCode(secret, code): bool
├── generateQrCode(email, secret): string (base64)
├── generateBackupCodes(count): array
└── validateBackupCode(&codes, code): bool
```

### Contrôleur
```
src/Controller/Front/TwoFactorController.php
├── setup():              Affiche la page de configuration
├── setupConfirm():       Confirme et active la 2FA
├── disable():            Désactive la 2FA
└── verify():             Vérifie le code 2FA après login
```

### Event Listeners
```
src/EventListener/TwoFactorAuthenticationListener.php
└── Intercepte InteractiveLoginEvent pour rediriger vers 2FA si activée
```

### Templates
```
templates/front/2fa/
├── setup.html.twig:           Page initiale de configuration
├── setup_confirm.html.twig:   Affiche le QR code et codes de secours
└── verify.html.twig:          Vérification du code après login

templates/front/user/
└── _2fa_management.html.twig: Widget de gestion dans le profil
```

### Entité Modifiée
```
src/Entity/User.php
├── twoFactorSecret: string|null
├── twoFactorEnabledAt: DateTime|null
├── backupCodes: array|null
├── getTwoFactorSecret()
├── setTwoFactorSecret()
├── getTwoFactorEnabledAt()
├── setTwoFactorEnabledAt()
├── isTwoFactorEnabled()
├── enableTwoFactor()
├── disableTwoFactor()
├── getBackupCodes()
└── setBackupCodes()
```

---

## 🔐 Flux d'Authentification

### 1️⃣ Activation de la 2FA
```
Utilisateur connecté
    ↓
Clique sur "Activer 2FA"
    ↓
Service génère une clé secrète et un code QR
    ↓
Utilisateur scanne le code QR avec Google Authenticator
    ↓
Utilisateur entre le code à 6 chiffres pour confirmer
    ↓
Codes de secours générés et affichés
    ↓
2FA activée - twoFactorEnabledAt défini
```

### 2️⃣ Connexion avec 2FA
```
Utilisateur entre email/mot de passe
    ↓
Validation réussie du formulaire
    ↓
InteractiveLoginEvent déclenché
    ↓
TwoFactorAuthenticationListener vérifie si 2FA est activée
    ↓
Si 2FA = Activée:
   - Utilisateur stocké en session (2fa_user_pending)
   - Session invalidée
   - Redirection vers /2fa/verify
  Si 2FA = Désactivée:
   - Loginl normal continues
    ↓
Utilisateur entre le code 2FA (6 chiffres)
    ↓
validateCode() vérifie le code TOTP
    ↓
Code valide → Utilisateur authentifié + Redirection selon rôle
Code invalide → Message d'erreur
Ou utiliser un code de secours → Partagé une alerte
```

### 3️⃣ Désactivation de la 2FA
```
Utilisateur connecté avec 2FA activée
    ↓
Clique sur "Désactiver 2FA"
    ↓
POST à /2fa/disable
    ↓
twoFactorEnabledAt = null
    ↓
2FA désactivée pour la prochaine connexion
```

---

## 🚀 Routes

| Route | Méthode | Description |
|-------|---------|-------------|
| `/2fa/setup` | GET/POST | Initier la configuration 2FA |
| `/2fa/setup-confirm` | POST | Confirmer avec le code |
| `/2fa/verify` | GET/POST | Vérifier le code après login |
| `/2fa/disable` | POST | Désactiver la 2FA |

---

## 💾 Configuration

### security.yaml
- Le pare-feu `main` utilise `form_login` normal
- TwoFactorAuthenticationListener est enregistré comme EventSubscriber
- Aucune modification du pare-feu n'est nécessaire

### services.yaml
```yaml
App\EventListener\TwoFactorAuthenticationListener:
    tags:
        - { name: kernel.event_subscriber, priority: 200 }
```

---

## 🔄 Intégration avec le Profil Utilisateur

Un widget est inclus dans le profil utilisateur (`templates/front/user/profile.html.twig`) qui:
- Affiche le statut de la 2FA (Activée/Désactivée)
- Permet d'activer la 2FA
- Permet de réinitialiser la clé
- Permet de désactiver la 2FA

---

## 🎯 Cas d'Usage

### Utilisateur sans 2FA
```
login → validation mot de passe → redirect selon rôle
```

### Utilisateur avec 2FA
```
login → validation mot de passe → 2FA check → enter code → redirect selon rôle
```

### Code de secours
Utilisable à la place du code TOTP:
- Généré lors de l'activation
- Affiché une seule fois (à télécharger/imprimer)
- Consommé après utilisation
- Alerte pour régénérer si utilisés

---

## 🛡️ Sécurité

✅ Les codes TOTP sont validés avec time-based window (±1 minute)
✅ Les codes de secours sont hashés en comparaison de temps constant
✅ La clé secrète est stockée en base de données
✅ Les sessions invalides après redirection 2FA
✅ Vérification d'authentification à chaque étape

⚠️ À implémenter :
- Limiter les tentatives de code invalide
- Notifier des changements 2FA
- Logs d'authentification
- Authentification des actions sensibles (désactiver 2FA)

---

## 🧪 Test Manuel

1. **Créer un utilisateur et le connecter**
2. **Aller sur le profil (/user/profile)**
3. **Cliquer "Activer la 2FA"**
4. **Scanner le QR code avec Google Authenticator**
5. **Entrer le code à 6 chiffres**
6. **Se déconnecter (/logout)**
7. **Se reconnecter - doit demander le code 2FA**
8. **Entrer le code - doit se connecter**

---

## 📚 Dépendances

```json
{
    "endroid/qr-code": "^6.0",
    "pragmarx/google2fa": "^8.0",
    "pragmarx/google2fa-laravel": "^2.3",
    "pragmarx/google2fa-qrcode": "^3.0"
}
```

---

## 🐛 Dépannage

### Erreur: "Could not find..."
→ Vérifier que les packages sont installés: `composer show`

### QR code ne s'affiche pas
→ Vérifier que l'email de l'utilisateur est valide
→ Vérifier que endroid/qr-code est bien installé

### Code TOTP invalide
→ Synchroniser l'horloge du serveur et du client
→ Vérifier que la clé secrête est bien enregistrée
→ Le code change toutes les 30 secondes - enter rapidement

### Session invalide après redirection 2FA
→ Comportement normal - la session doit être invalidée
→ L'utilisateur doit re-saisir le code

---

## 📝 Prochaines Étapes

- [ ] Ajouter des logs d'authentification
- [ ] Limiter les tentatives échouées
- [ ] Notifier l'utilisateur des changements 2FA
- [ ] Implémenter WebAuthn (clés de sécurité)
- [ ] Ajouter un page de gestion des appareils approuvés
- [ ] Intégrer SMS/Email comme options alternatives

---

**Auteur**: GitHub Copilot
**Date**: 17 Février 2026
**Version**: 1.0
