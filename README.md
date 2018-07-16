# CestDuChinois

« Cest du Chinois » est une application gastronomique qui permet à des amateurs de s’inscrire sur le site et de publier les recettes.
Cette application utilise le framework Symony 3.4.

Elle contient 4 Bundles :
AppBundle :  Gérer le coté front pour les Clients non inscrit  
DashboardBundle :  L’interface de Gestion des contenus pour les utilisateurs inscrits.
RecetteBundle :  CRUD des Recettes
SecuriteBundle :  Authentification & Inscription des Utilisateurs

Techniques Symfony :
-	Relation Doctrine 
-	Création de Service (Téléchargement du File)
-	Création de Formulaires Dynamiques et personnalisés
-	Rôle hiérarchie
-	Droit d’accès contrôlé par rôles


Plugins & Bundles Utilisés :
-	JQuery
-	Bootstrap 3.3
-	Bootstrap File Input Plugin
-	Fosjsrouting


Mode d’emploi :
Télécharger le projet sur le dépôt git, puis checkout en branch dev
Dans une console, tapez : php bin/console server :run


Pour la Suite de développement, si vous êtes intéressés par ce projet, 
Vous pouvez contribuer à développer un mondule Tags afin de gérér la relation 
(Many to Many) entre Entity Recette & Entity Catégorie. 

Le deuxième pas est de dévélopper une API (sous Symfony) pour enregistrer toutes
les Bon restaurants chinois sur Paris.


Merci :)
