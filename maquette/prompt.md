# 📋 Plan du Site — Blog "Larache Patrimoine"

---

## 🎯 Contexte du Projet

**Problématique :** Comment préserver et diffuser la mémoire historique et architecturale de Larache à travers un blog local ?

**Mission :** Créer une plateforme numérique collaborative pour documenter, préserver et partager le patrimoine historique et architectural de Larache avec la communauté locale et les touristes.

**Public cible :**
- Ahmed El Mansouri (Passionné local, enseignant d'histoire)
- Sarah Dupont (Touriste curieuse, blogueuse voyage)

---

## 🎨 Style & Design

* **Style :** Moderne avec touches patrimoniales marocaines
* **Couleurs :** Bleu méditerranéen, blanc cassé, ocre, touches dorées
* **Inspiration :** Architecture andalouse-mauresque + design moderne
* **Framework :** Tailwind CSS + animations subtiles
* **Typographie :** Lisible, élégante, respectueuse du patrimoine

---

## 🗂️ PLAN DU SITE

### 🌍 **ESPACE PUBLIC**

| Page | Description |
|------|-------------|
| **Accueil** | Page d'entrée avec hero image de Larache, slogan patrimonial, monuments phares, derniers articles publiés |
| **Monuments & Lieux** | Liste/grille des monuments historiques avec filtres (époque, catégorie, quartier) |
| **Détail Monument** | Page individuelle : histoire, photos, vidéos, carte de localisation, anecdotes, section commentaires |
| **Articles Blog** | Liste des articles patrimoniaux (récits, découvertes, interviews) en format magazine |
| **Détail Article** | Contenu complet : texte, images, auteur, date, catégories, partage réseaux sociaux, commentaires |
| **Carte Interactive** | Carte géographique de Larache avec géolocalisation des monuments et itinéraires suggérés |
| **Recherche Avancée** | Moteur de recherche par mot-clé, époque historique, catégorie, quartier |
| **Itinéraires** | Parcours touristiques thématiques (architecture andalouse, période coloniale, médina, etc.) |
| **À Propos** | Mission du projet, équipe, histoire de Larache, appel à contribution |
| **Contact** | Formulaire de contact, proposer un article, signaler une erreur |

---

### 🔐 **ESPACE ADMINISTRATEUR**

| Page | Description |
|------|-------------|
| **Tableau de Bord** | Vue d'ensemble : statistiques, articles récents, commentaires en attente, monuments documentés |
| **Gestion Monuments** | Liste des monuments avec actions (créer, modifier, supprimer) |
| **Ajouter Monument** | Formulaire complet : nom, description, époque, catégorie, images, vidéos, coordonnées GPS |
| **Modifier Monument** | Édition des informations d'un monument existant |
| **Gestion Articles** | Tableau des articles (titre, auteur, date, statut, catégorie) |
| **Créer Article** | Éditeur riche : titre, contenu, images, vidéos, catégories, tags, monument associé |
| **Modifier Article** | Édition d'un article existant |
| **Gestion Commentaires** | Modération : approuver, modifier, supprimer les commentaires |
| **Gestion Catégories** | Créer et gérer les catégories (Architecture, Histoire, Personnalités, Quartiers, etc.) |
| **Gestion Médias** | Bibliothèque des photos et vidéos uploadées |

---

## 📊 Diagramme de Cas d'Utilisation

### 👥 **Acteurs**

**Visiteur (Sarah Dupont)** : Consulte le contenu, recherche, commente
**Contributeur (Ahmed El Mansouri)** : Consulte + propose du contenu
**Administrateur** : Gestion complète du site

### 🎯 **Cas d'Utilisation Principaux**

#### Espace Public
- **UC1** : Consulter la liste des monuments
- **UC2** : Lire un article patrimonial
- **UC3** : Rechercher un lieu ou article (par mot-clé, époque, catégorie)
- **UC4** : Consulter la carte interactive
- **UC5** : Commenter un article/monument
- **UC6** : Partager un article sur réseaux sociaux
- **UC7** : Suivre un itinéraire suggéré

#### Espace Admin
- **UC8** : Gérer les monuments (CRUD)
- **UC9** : Gérer les articles (CRUD)
- **UC10** : Modérer les commentaires
- **UC11** : Gérer les catégories et tags
- **UC12** : Consulter les statistiques

---

## ⚙️ Fonctionnalités Clés (MoSCoW)

### 🔴 **MUST HAVE**
- ✅ Consulter la liste des monuments
- ✅ Lire un article patrimonial complet
- ✅ Commenter un article
- ✅ Gérer les articles (CRUD Admin)
- ✅ Gérer les monuments (CRUD Admin)
- ✅ Affichage responsive (mobile/tablette/desktop)

### 🟠 **SHOULD HAVE**
- ✅ Recherche avancée (mot-clé, époque, catégorie)
- ✅ Carte interactive avec géolocalisation
- ✅ Filtres par catégorie/époque
- ✅ Système de commentaires modéré

### 🟡 **COULD HAVE**
- ✅ Partage sur réseaux sociaux
- ✅ Itinéraires touristiques suggérés
- ✅ Galerie photos/vidéos
- ✅ Statistiques de visite

### ⚪ **WON'T HAVE (pour MVP)**
- ❌ Système de compte utilisateur complet
- ❌ Forum communautaire
- ❌ Application mobile native
- ❌ Système de réservation de visites guidées

---

## 🛠️ Technologies Proposées

### Frontend
- **HTML5** : Structure sémantique
- **Tailwind CSS** : Framework CSS moderne
- **JavaScript vanilla** : Interactivité
- **Font Awesome** : Icônes

### Backend (suggestions)
- **PHP/Laravel** : Logique serveur
- **MySQL** : Base de données

---

## 📐 Structure des Pages Principales

### Page Accueil
1. **Header** : Logo, navigation, recherche rapide
2. **Hero Section** : Image panoramique de Larache + slogan patrimonial
3. **Monuments Phares** : Carrousel 4-6 monuments emblématiques
4. **Derniers Articles** : Grille 3 articles récents
5. **Carte Interactive** : Aperçu cliquable
6. **Appel à Contribution** : Incitation à participer
7. **Footer** : Liens, réseaux sociaux, mentions légales

### Page Monument (Détail)
1. Galerie photos principale
2. Informations clés (époque, style architectural, état)
3. Description historique détaillée
4. Carte de localisation (GPS)
5. Anecdotes et témoignages
6. Articles liés
7. Section commentaires
8. Boutons de partage

### Page Article
1. Image de couverture
2. Titre + métadonnées (auteur, date, catégorie)
3. Contenu enrichi (texte, images, vidéos)
4. Tags et catégories
5. Monument(s) associé(s)
6. Navigation article précédent/suivant
7. Section commentaires
8. Articles similaires

---

## 🎨 Sections Spécifiques au Patrimoine

### Types de Catégories
- **Par Époque** : Préhistoire, Phénicienne, Romaine, Andalouse, Coloniale espagnole/portugaise, Moderne
- **Par Type** : Monuments religieux, Architecture militaire, Bâtiments publics, Maisons traditionnelles, Sites archéologiques
- **Par Quartier** : Médina, Ville nouvelle, Port, Quartiers périphériques

### Types d'Articles
- 📜 Histoire et récits
- 🏛️ Architecture et urbanisme
- 👤 Personnalités historiques
- 🎭 Traditions et culture
- 📸 Reportages photo
- 🎥 Documentaires vidéo
- 💬 Témoignages et mémoires

---

## ✅ Livrables Attendus

1. **Code HTML complet** pour chaque page (Accueil, Liste monuments, Détail, etc.)
2. **Fichiers CSS** (Tailwind + personnalisations)
3. **Assets** : Images placeholder, icônes
4. **Structure responsive** : Mobile-first
5. **Navigation cohérente** : Menu, breadcrumb, footer
6. **Formulaires fonctionnels** : Recherche, commentaires, contact

---

## 🌟 Valeur Ajoutée du Projet

> **"Larache Patrimoine : Une mémoire vivante, accessible à tous"**

- ✨ Centralisation des informations patrimoniales
- 🤝 Collaboration entre passionnés locaux et touristes
- 🗺️ Géolocalisation interactive
- 📚 Documentation fiable et enrichie
- 🌍 Valorisation internationale de Larache
- 💾 Préservation numérique du patrimoine