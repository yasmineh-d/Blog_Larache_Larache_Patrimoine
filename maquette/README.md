# Blog "Larache Patrimoine"

## 🎯 1. Contexte du projet
**Objectif :**  
Préserver et diffuser la mémoire historique et architecturale de Larache.

**Missions :**  
- Valoriser les sites historiques  
- Partager les récits locaux  
- Créer une archive numérique accessible  
- Sensibiliser les touristes culturels et les locaux à la richesse du patrimoine de la ville  

---

## 🎨 2. Style & Design
- **Style :** Classique, épuré, "archive moderne" 📜  
- **Couleurs :** Tons sépia, beige (parchemin), bleu marine (océan), blanc cassé  
- **Inspiration :** Journal de bord historique, carnet de voyage, archive numérique  
- **Mise en page :** Claire, centrée sur la lisibilité des textes et la mise en valeur des photographies (archives et actuelles)  
- **Framework :** Bootstrap 5 + animations discrètes  

---

## 🧱 3. Pages à prévoir

### Partie publique (Touriste culturel)  
- **Accueil**  
- **Articles / Blog (Liste)**  
- **Page Article (Détails)**  
- **Page Recherche**  
- **Page "Mes articles sauvegardés" (Optionnel)**  

### Partie admin (Éditeur)  
- **Gérer les articles (CRUD - basé sur UC6)**  
- **Page de connexion**  

---

## 📌 4. Sections principales
- **Header + menu de navigation** (Accueil, Articles, Lieux, Recherche)  
- **Hero section** avec image marquante de Larache (ex: Port, Place de la Libération) + slogan ("Larache, Mémoire & Patrimoine")  
- **Liste des articles récents** (grille de cartes)  
- **Section "Lieu du mois"** (mise en avant d'un site architectural)  
- **Footer** (liens, réseaux sociaux pour partage)  

---

## 🧑‍🤝‍🧑 5. Expérience utilisateur
- Full responsive (mobile / tablette / desktop)  
- Navigation claire et intuitive  
- **Fonctionnalités clés (basées sur le diagramme) :**  
  - Recherche par mot-clé (article ou lieu) (UC3)  
  - Partage d'article sur les réseaux sociaux (UC5)  
  - Sauvegarde d'article pour lecture ultérieure (UC4)  
  - Page article avec zone commentaires (pour engager la communauté)  

---

## ⚙️ 6. Technologies
- HTML + Bootstrap 5  
- CSS personnalisé  
- Icônes FontAwesome  
- Maquette one-page pour chaque vue (si en mode statique)  

---

## ✍️ 7. Format attendu
- Code HTML + CSS complet  
- Responsive  
- Structure : 1 page = 1 fichier HTML + 1 fichier CSS associé  

---

## ✅ Travail demandé
- **Fournir le plan du site** → Liste des pages avec uniquement : titre + brève description (sans contenu textuel détaillé)  

---

## 📊 Diagramme de cas d'utilisation — Blog "Larache Patrimoine"

```plantuml
@startuml
' === ACTEURS ===
actor Administrateur
actor Editeur
actor "Touriste culturel" as Touriste

' Relation étrange du diagramme original (Admin -> Editeur)
Administrateur --> Editeur

' === SYSTÈME ===
rectangle "Blog Larache Patrimoine" {
  
  ' --- Cas Public (Touriste) ---
  usecase "UC1 : Consulter la liste des articles" as UC1
  usecase "UC2 : Lire un article en détail" as UC2
  usecase "UC3 : Rechercher un article ou un lieu" as UC3
  usecase "UC4 : Sauvegarder un article" as UC4
  usecase "UC5 : Partager un article" as UC5
  
  ' --- Cas Admin (Editeur) ---
  usecase "UC6 : Gérer les articles\n(ajouter / modifier / supprimer)" as UC6

  ' --- RELATIONS ---
  Touriste --> UC1
  Touriste --> UC2
  Touriste --> UC3
  Touriste --> UC4
  Touriste --> UC5
  
  Editeur --> UC6
}
@enduml
