# Atelier Docker + Laravel : Guide d'Installation et de Démarrage

## Informations

L'atelier à été fait le Vendredi 29 Novembre 2024 (19h30min -21h30 min ) avec la communauté TCR

## 🚀 Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- Docker Desktop (ou Docker Engine)
- Docker Compose
- Git

## 📦 Clonage du Projet

```bash
git clone https://github.com/TOGO-CODE-RUN/Atelier-Integration-de-Docker-dans-Laravel.git

cd  Atelier-Integration-de-Docker-dans-Laravel
```

## 🛠️ Configuration Initiale

### 1. Variables d'Environnement

Copiez le fichier `.env.example` en `.env` :

```bash
cp .env.example .env
```

### 2. Construction et Démarrage des Conteneurs

```bash
# Construction des images Docker
docker-compose build

# Démarrage des conteneurs
docker-compose up -d
```

## 🔧 Installation des Dépendances

### Composer (Dépendances PHP)

```bash
docker-compose exec app composer install
```

### NPM (Dépendances Frontend)

```bash
docker-compose exec app npm install
```

## 🔑 Génération des Clés

```bash
# Générer la clé de l'application Laravel
docker-compose exec app php artisan key:generate
```

## 📊 Configuration de la Base de Données

```bash
# Migration des bases de données
docker-compose exec app php artisan migrate
```

## 🌐 Accès à l'Application

- **URL du site** : `http://localhost:9000`
- **PHPMYADMIN (Base de données)** : `http://localhost:8081`

## 📋 Commandes Utiles

### Arrêter les conteneurs

```bash
docker-compose down
```

### Redémarrer les conteneurs

```bash
docker-compose restart
```

### Voir les logs

```bash
docker-compose logs -f app
```

## 🛠 Détails Techniques

### Structure du Projet

- `Dockerfile` : Configuration de l'image principale de l'application
- `docker-compose.yml` : Orchestration des services
- `nginx.conf` : Configuration du serveur web Nginx
- `.docker/` : Configurations additionnelles Docker

## 🚨 Résolution des Problèmes Courants

- **Erreur de permission** : Assurez-vous que Docker a les droits d'accès nécessaires
- **Ports bloqués** : Vérifiez que les ports 8000, 3306, 8080 ne sont pas utilisés par d'autres services
- **Dépendances manquantes** : Relancez `composer install` et `npm install`

## 👥 Contributeurs

- ALI Nazim (Le Speaker de l'atelier)
- Bonkey FIAGNIGBE
- TOGO CODE RUN
