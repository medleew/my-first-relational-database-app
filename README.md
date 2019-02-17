# Application comptable de la COGIP

- Repository : `my-first-relational-database-app`
- Temps nécessaire : 5 jours ouvrables
- Travail : équipe de 3
- Formulaire de remise du projet : https://goo.gl/forms/pvYuVv1UOUFyT3PA3

## An app for Jean-Christian Ranu

La COGIP est une société qu'on ne sait pas trop ce qu'elle fait à part des [jouets Jean-Michel](http://dai.ly/x3a51) et des [échanges de Pokemon](https://www.dailymotion.com/video/x68i87). Elle abrite en son sein des [employés exceptionnels](https://www.dailymotion.com/video/xabck6) dont Jean-Christian Ranu.

Jean-Christian Ranu est comptable à la COGIP. Il utilise depuis des années une application qui est moche, qui n'est pas complète et donc, il doit jongler entre son logiciel de compta et des fichiers excel. Jean-Christian aime la paëlla, les mots-croisés et sa collaboratrice Muriel Perrache.

![Jean-Christian Ranu de la COGIP](cogip_badge.jpg)

Nous vous proposons de coder une *web application* qui réponde aux besoins et envies de Jean-Christian à savoir : gérer ses contacts, ses fournisseurs, ses clients et ses factures via son navigateur. (Ainsi il pourra travailler même de chez lui et s'adonner au télé-travail.) 

![](shower.gif)

Si vous remettez votre projet via le [formulaire de remise de projets](https://goo.gl/forms/pvYuVv1UOUFyT3PA3) vous bénéficierez d'une *review* dans les règles de l'art.

## Objectifs

### Objectifs d'apprentissage

Vous allez apprendre par vous-même comment : 

- "jolis urls": utiliser des paramètres URL et des noms de fichiers différents (chercher "tutorial pretty url php htaccess")
- Bien utiliser la sanitization pour éviter les injections SQL dans votre DB (un esprit malveillant pourrait tenter de delete l'intégralité de votre DB)
- Valider les données afin que Ranu n'encode pas n'importe quoi
- Contruire une base de données relationnelles fonctionnelle
- utiliser des jointures correctes en SQL
- Utiliser des alias dans vos requêtes SQL
- Implémenter un CRUD :
   - réaliser une interface qui permette de lire des données
   - réaliser une interface qui permette d'ajouter des données
   - réaliser une interface qui permette de modifier des données
   - réaliser une interface qui permette de supprimer des données
- Crypter le mot de passe dans la base de données (il ne doit pas apparaître en clair)
- Utiliser la structure MVC pour organiser vos fichiers et les fonctionnalités
- Utiliser un *router*
- Mettre en place des variables de session en php
- Permettre ou non l'accès à certaines pages en fonction des permissions stockées dans la session de l'utilisateur

N'oubliez pas de mettre le fichier SQL permettant de recréer la structure et les données dans votre repo.

## Les données dont Jean-Christian a besoin

**Absolument et non négociable** : les données relatives aux personnes, sociétés et factures.

Pour les personnes, il nous faudra :  

- le nom
- le prénom
- le téléphone
- l'adresse e-mail

Pour les sociétés :  

- désignation sociale de la société (son nom)
- l'adresse de la société
- le pays
- le n° de TVA
- le n° de téléphone

Pour les factures  :  

- le numéro de la facture
- la date de la facture
- objet (= motif de la prestation)

Pour le type (d'entreprises)
- le type.

**Notes**

- Concernant les relations entre les tables, il faudra :
  - societes --- type
  - societes --- factures
  - personnes --- factures
  - personnes --- societes

**Bonus** pour ceux qui veulent faire une application super poussée : 

- La description des services offerts/des tâches à accomplir
- le prix unitaire (forfait) ou horaire des services fournis
- le n° du bon de commande ou devis associé
- montant (prix HT, taux de TVA appliqué, réduction éventuelle et prix TTC)

**Bonus** : faites aussi une table pour les notes de crédit : 

- le numéro de la note de crédit
- la date de la note de crédit
- le numéro de facture liée à cette note de crédit
- montant (prix HT, taux de TVA appliqué, réduction éventuelle et prix TTC)


## L'app pour Mr Ranu

Un [prototype](https://app.moqups.com/alexandre@becode.org/DHwMfyH80v/view/page/aa9df7b72?ui=0) est fourni pour vous inspirer. Il manque des écrans mais vous avez l'idée. 

Voici une liste complète du contenu de chaque écran.

### Accueil
Affichera :  

- un message d'accueil pour Jean-Christian Ranu (s'il est connecté, sinon un formulaire de connexion)
- la liste des 5 dernières factures, classées par date
- la liste des 5 dernières personnes, encodées dans la base de données
- la liste des 5 dernières entreprises, encodées dans la base de données
- un lien vers la page fournisseurs
- un lien vers la page clients


### route "factures"
Affichera la liste des factures par date la plus récente vers la date la plus lointaine.

Chaque numéro de facture sera un lien qui, au clic, renverra vers une route `invoice-details` dont le contenu sera généré en fonction de l'id de la facture sélectionnée.

BONUS : On appliquera un filtre par société pour mieux trier les factures et les autres documents

### route "annuaire"
Affichera la liste de toutes les personnes de contact de la base de données, par ordre alphabétique.

Le nom de chaque personne sera un lien qui renverra vers une route `contact-details` dont le contenu sera généré en fonction de l'id de la personne choisie.

BONUS : On appliquera un filtre par société pour mieux trier les personnes de contact

### route "fournisseurs"
Affichera la liste de toutes les sociétés de type fournisseur. Chaque nom de société renvoie, à l'aide d'un lien, vers sa route `company-details` dédiée.

### route "clients"
Affichera la liste de toutes les sociétés de type client. Chaque nom de société renvoie, à l'aide d'un lien, vers sa route `company-details` dédiée.

### route company-details
Affichera les informations suivantes selon la société choisie :
- nom de la société
- adresse de la société
- téléphone de la société
- numéro de TVA de la société
- liste des factures liées à la société
- liste des personnes de contact travaillant dans la société

### route invoice-details
Affichera les informations suivantes selon la facture choisie :
- numéro
- date
- société liée à la facture
- type de la société liée à la facture (fournisseur ou client)
- personne de contact liée à la facture

### route contact-details
Affichera les informations suivantes selon la personne de contact choisie :
- nom, prénom
- téléphone
- e-mail
- nom de la société où travaille la personne
- adresse de la société
- la liste des factures liées à la personne

## Privilèges d'administration de l'app

**De quoi Ranu a-t-il besoin ?**

Une fois que vous avez réalisé la partie consultation de la base de données comptable de Jean-Christian, vous allez lui créer une administration pour qu'il puisse encoder, modifier et supprimer lui-même ses données depuis une chouette interface.

Il aura besoin d'avoir un accès direct aux :

- 5 dernières factures (n° de facture, date, société). En cliquant sur le numéro de la facture, Jean-Christian arrivera sur une page qui lui permettra de modifier la facture. Au clic du nom de la société, il pourra modifier les infos de la société.
- 5 dernières sociétés (nom de la société, téléphone et type de société). En cliquant sur le nom de société, Jean-Christian arrivera sur une page qui lui permettra de modifier la société.
- 5 derniers contacts (prénom+nom, téléphone, email, nom de société). En cliquant sur le nom du contact, Jean-Christian arrivera sur une page qui lui permettra de modifier la facture. Au clic du nom de la société, il pourra modifier les infos de la société.

On prévoiera également que sur la même ligne de chaque élément, il y ait une petite icône représentant une poubelle afin qu'au clic de l'icône, on puisse supprimer l'élement de la ligne.

Il aura aussi des accès rapides (à l'aide de boutons) pour pouvoir ajouter : 

- une nouvelle facture
- un nouveau contact
- une nouvelle société

Prévoyez un message d'accueil pour la personne connectée. Selon qu'il s'agisse de Jean-Christian ou de Muriel.


**accès SUPERADMIN**    
S'il a un accès "superadmin", l'utilisateur connecté aura également un bouton pour pouvoir gérer les utilisateurs. Ce bouton l'amènera vers un dashboard qui lui permettra de voir les utilisateurs connectés, leurs accès et de pouvoir les modifier.

Par défaut Jean-Christian a un accès godmode et son mot de passe est son nom de famille. 

**accès MODERATOR**   
Le mode modérateur sera attribué à Muriel, la collaboratrice de Jean-Christian. Elle a accès au dashboard admin, elle peut ajouter des factures, sociétés et contacts mais elle ne peut ni modifier, ni supprimer des éléments de la base de données. Son mot de passe est également son nom de famille.


### BONUS
Réaliser un petit design sympa pour notre ami Jean-Christian. Rappelez-vous que notre ami et client est comptable à la COGIP depuis plus de 20 ans ! Il est temps de dépoussiérer ses habitudes et de l'aider à rentrer dans l'ère du 21ème siècle !
Il est cependant impératif qu'on retrouve le slogan de la COGIP dans le footer. Le slogan est "vive la COGIP !".


## Conseils

1. **Pensez à votre stratégie !** Par quoi allez-vous commencer ? La base de données ? Les requêtes SQL ? La connexion à votre base de données ? Le design ? Mettez-vous d'accord ensemble.
2. **Que chacun fasse du CRUD**. Vous êtes 3, il y a 3 types de documents à traiter (facture, société, personne), distribuez-vous à chacun un type et travaillez ensemble pour réaliser chacun vos fichiers.
3. **Lisez bien le briefing**. Il y a certainement des informations que vous n'avez pas pris en compte. Si malgré la lecture et relecture quelque chose n'est pas clair, n'hésitez pas à poser des questions au client (vos coachs). C'est aussi (et surtout) ça le développement : comprendre les besoins et la vision de votre client.
4. **La communication, c'est important**. Entre les membres de votre équipe, entre vous et le client, entre vous et les autres membres de votre startup.


## Pour vous aider

- [Qu'est-ce que la structure MVC ?](https://docs.google.com/presentation/d/1OVz9HqSob9JskPsyxbxqXfbyqBh-SGtt-MjQHzK1SGw/edit?usp=sharing)
- [Créer un routeur](https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php/4682351-creer-un-routeur)

## Liste des objectifs d'apprentissage (OA)

### Obligatoires

Chaque membre du groupe doit faire au moins ceci :  

1. **backend dev : modélisation conceptuelle des données**  
Évaluation : schéma visuel de la BD relationnelle présent dans le readme (utiliser mysqlWorkbench ou https://www.quickdatabasediagrams.com)

1. **backend dev : éviter les injections SQL**  
Évaluation : les scripts php traitant les formulaires empêchent l'injection SQL d'être potentiellement exécutée.

1. **backend dev : validation des formulaires**  
Évaluation : chaque controleur d'ajout/edition/effacement implémente la séquence sanitiser / valider / exécuter / afficher.

1. **backend dev : CRUD**  
Évaluation : chaque apprenant•e réalise le CRUD d'un des composants de l'application.

1. **backend dev : MVC**  
Évaluation : l'application est structurée de manière à utiliser un *router* et de manière à séparer autant que possible le calcul de l'affichage (le moins de php possible dans les templates, juste boucle et commandes d'affichage tels que `echo`).

1. **backend dev : gestion des privilèges & Sessions**  
Évaluation : on peut se connecter et naviguer puis se déconnecter. Avec 2 utilisateurs ayant des privilèges différents. Selon les privilèges, on a accès ou pas à certaines fonctionnalités.

1. **sysadmin : déploiement**  
Évaluation : l'équipe a trouvé et déployé l'application sur un hébergement adapté; l'application est fonctionnelle (les CRUD fonctionnent).

1. **backend dev : afficher les erreurs à proximité des champs concernés**  
Évaluation : lorsque j'introduis volontairement des erreurs dans le formulaire (maladress ou tentative d'injection SQL), le html du ou des messages d'erreurs s'affiche à proximité du champ concerné.


### Facultatifs
Choisis en fonction de tes intérêts (frontend dev /backend dev, sysadmin, UX, PM ...)

*Grâce à ce projet, je voudrais apprendre (choisis environ 6 ou 7 OA) :*

1. **backend dev : Friendly urls**  
Évaluation : les URLS de l'application sont "élégants" : càd qu'au lieu d'avoir `product.php?id=5`, on verra plutôt `/product/5` .

1. **backend dev : OOP**  
Évaluation : l'application est codée en utilisant le paradigme OOP (Object-Oriented Programming) tel qu'implémenté en PHP.

1. **PM : Agile (manipulation tableau kanban) + tenue quotidienne du planning du groupe**  
Évaluation : présence d'un _projects board_ bien tenu et montrant qu'il a été utilisé pour la gestion du projet.

1. **PM : être le capitaine du repos, qui gère les merge et les conflits**  
Évaluation : conflits résolus, présence de branches sur lesquelles chacun(e) a travaillé...

1. **PM : rédaction d'un readme complet et professionnel**  
Évaluation : fichier readme bien construit et contenant un lien vers le projet en ligne.

1. **UX : branding**  
Évaluation : le site fournit représente un outil marketing perçu comme professionnel. Un système graphique cohérent se retrouve de pages en pages.

1. **UX : mentions GDPR et Copyright pour informer l'utilisateur de l'utilité de fournir les données**  
	Évaluation :  

	- une option non cochée par défaut dans le formulaire permet à l'utilisateur de spécifier qu'il est d'accord que le site utilise ses données et documents envoyés uniquement afin de répondre à sa requête directe et non à des fins de marketing ou autre.
	- une notification invite l'utilisateur à accepter l'usage de cookies.
	- toute image sera accompagnée d'une légende à proximité, indiquant l'auteur (et la source si disponible).

1. **frontend dev : sélection et mise en place d'un framework CSS**  
Évaluation : un framework CSS a été utilisé pour réaliser les interfaces.

1. **frontend/backend : utiliser le [lighthouse test](https://developers.google.com/web/tools/lighthouse/) pour améliorer son site et atteint un score de minimum 80 pour chaque critère.**  
Évaluation : chaque page du site sera testée.

1. **frontend : Progressive Web App**  
Évaluation : le score de l'aspect "PWA" de Lighthouse Test sera de 100.

## TEAMS

  - Gaetano Mico Latorre & Geoffrey Poelmans & Guillaume Bare    
  - Quang Le &  Morgane Meganck & Baptiste Firket    
  - Ludovic Hautecoeur & Julie Connerotte    
  - Mohamed Ali Nadir & Sammuel Jassens & Andrea Pinna    
  - Ludovic Dhoore & Anthony Sel  
  - Dylan Valente & Pedro Seromenho & Stéphane Wyns    
  - Claudiu Cornea & Mostapha Tahri & Liliane Mamane
  - Sourech Bauts & Romain Vandevoorde & Paul Henrot   
  - Meilyn Andrade & Mariane Niwemfura

![serious cat with glasses](seriousglassescat.gif)
