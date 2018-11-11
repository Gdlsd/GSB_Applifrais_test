<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$idVisiteur = filter_input(INPUT_POST, 'lstVisiteurs', FILTER_SANITIZE_STRING);
$idMois = filter_input(INPUT_POST, 'lstMois', FILTER_SANITIZE_STRING);

switch($action){
       
    case 'corrigerFraisForfait' :

        $lesFrais = filter_input(INPUT_POST, 'lesFrais', 
                FILTER_DEFAULT, FILTER_FORCE_ARRAY);
        if (lesQteFraisValides($lesFrais)) {
        $pdo->majFraisForfait($idVisiteur, $idMois, $lesFrais);     
        ajouterSucces('Modification des éléments forfaitisés enregistrée');
        include 'vues/v_succes.php';
        } else {
        ajouterErreur('Les valeurs des frais doivent être numériques');
        include 'vues/v_erreurs.php';
        }             
        break;
        
    case 'validationFraisHorsForfait' :
        
        $idMoisSuivant = getMoisSuivant($idMois);
        $libelle = filter_input(INPUT_POST, 'libelleFraisHf', FILTER_SANITIZE_STRING);
        $dateFrais = filter_input(INPUT_POST, 'dateFraisHf', FILTER_SANITIZE_STRING);
        $montant= filter_input(INPUT_POST, 'montantFraisHf', FILTER_SANITIZE_STRING);
        $idFrais = filter_input(INPUT_POST, 'idFrais', FILTER_SANITIZE_STRING);
            
        if(isset($_POST['repporterFiche']))
        {    
            if($pdo->estPremierFraisMois($idVisiteur, $idMoisSuivant)){
                $pdo->creeNouvellesLignesFrais($idVisiteur, $idMoisSuivant);
                $pdo->majEtatFicheFrais($idVisiteur, $idMois, 'CR'); // Le mois en cours est toujours en cours de création 
            }         
            $pdo->creeNouveauFraisHorsForfait(
            $idVisiteur,
            $idMoisSuivant,
            $libelle,
            $dateFrais,
            $montant
                );            
            $pdo->supprimerFraisHorsForfait($idFrais);        

                ajouterSucces('Les frais on été repporté au mois suivant');
                include 'vues/v_succes.php';
        }
        else
        {
            if(substr($libelle, 0, 8) !== 'REFUSE :'){
                $libelleRefus = substr('REFUSE : ' . $libelle, 0, 40);
            $pdo->majLigneFraisHorsForfait($idFrais, $idVisiteur, $idMois, $libelleRefus, 
                   $dateFrais, $montant);
            ajouterSucces('Les frais pour "' . $libelle . '" on été refusés');
            include 'vues/v_succes.php';
            }else{
                ajouterErreur('Ce frais a déjà été refusé');
                include 'vues/v_erreurs.php';
            }   
        } 
        break;
    
    case 'validerFicheFrais':
        
        $pdo->majEtatFicheFrais($idVisiteur, $idMois, 'VA');
        ajouterSucces('La fiche de frais est validée');
        include 'vues/v_succes.php';
        break;
}

//Affichage liste déroulantes lstVisiteur et lstMois
$lesVisiteurs = $pdo->getListeVisiteur();
$lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
$moisASelectionner = $idMois;
include 'vues/v_listeVisiteurs.php';


//affichage 
$infosFiche = $pdo->getLesInfosFicheFrais($idVisiteur, $idMois);
$libelleEtat = $infosFiche['libEtat'];
$etatFiche = $infosFiche['idEtat'];
$dateValidation = $infosFiche['dateModif'];

$lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $idMois);        
$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $idMois);


if($etatFiche !== 'VA'){
    if(!empty($lesFraisForfait) || !empty($lesFraisHorsForfait)){   
        include 'vues/v_validerFrais.php';
    }
}else{
    ajouterMessageInfo('La fiche de frais pour la période du ' . $numMois . '/' . $numAnnee . ' a été validée '
            . ' le ' . dateAnglaisVersFrancais($dateValidation) . '.');
    ajouterMessageInfo('Vous pouvez consulter cette fiche via l\'onglet "Suivre le paiement '
            . 'des fiches de frais".');
    
    include 'vues/v_messageInfo.php';
            
}




