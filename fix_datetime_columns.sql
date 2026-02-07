-- Exécuter ce script dans phpMyAdmin si l'heure reste 00:00
-- (les colonnes doivent être en DATETIME pour stocker l'heure réelle)

ALTER TABLE publication CHANGE date_creation date_creation DATETIME NOT NULL;
ALTER TABLE commentaire CHANGE date_creation date_creation DATETIME NOT NULL;
