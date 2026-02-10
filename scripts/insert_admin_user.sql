-- ============================================================
-- Script pour créer un utilisateur ADMIN dans phpMyAdmin
-- NoVas - Exécuter dans l'onglet SQL de votre base de données
-- ============================================================
-- Mot de passe du compte : password
-- (À changer après la première connexion.)
-- ============================================================

-- Si votre table user a des colonnes en MINUSCULES (nom, prenom, email, etc.) :
INSERT INTO user (nom, prenom, email, image, numero, role, password) VALUES
('Admin', 'NoVas', 'admin@novas.fr', NULL, NULL, 'ROLE_ADMIN', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- ============================================================
-- Si votre table user a des colonnes en MAJUSCULES (NOM, PRENOM, etc.) :
-- Décommentez la ligne suivante et commentez celle du-dessus.
-- ============================================================
-- INSERT INTO user (NOM, PRENOM, EMAIL, IMAGE, NUMERO, ROLE, password) VALUES
-- ('Admin', 'NoVas', 'admin@novas.fr', NULL, NULL, 'ROLE_ADMIN', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Connexion après exécution : email = admin@novas.fr  |  mot de passe = password
