# GSB_AppliFrais  
### Situation professionnelle de développement d'application web  

Guide d'installation de l'application sur serveur local.  
    
- Téléchargez l'intégralité de l'application (Clone or download -> Download Zip)  
- Décompressez l'archive dans le dossier www de wamp (C:/wamp64/www)  
- Dans phpMyAdmin, cliquez sur 'Nouvelle bade de données' dans la colone de gauche.  
    - Créez la nouvelle table "gsb_frais"  
    - Sélectionnez la table "gsb_frais", puis dans l'onglet Importer, insérer le script de la base de donnée (gsb_frais.sql) présent   
        dans le dossier de l'application préalablement extrait.  
 - Dans le fichier includes/class.pdogsb.inc.php, rendez-vous au tout début de la classe pour compléter vos paramètres de connexion :  
  
private static $serveur = 'mysql:host=localhost'; >> Remplacez localhost par l'adresse de votre serveur distant si besoin  
private static $bdd = 'dbname=gsb_frais';         >> Pas besoin de modifier sauf si vous n'avez pas appelé la base de donnée "gsb_frais"  
private static $user = 'userGsb';                 >> Nom d'utilisateur de connexion  
private static $mdp = 'secret';                   >> Mot de passe  

L'application est prête à être utilisée.  
