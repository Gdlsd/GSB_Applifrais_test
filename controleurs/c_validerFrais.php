<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$idVisiteur = filter_input(INPUT_POST, 'lstVisiteurs', FILTER_SANITIZE_STRING);
$mois = filter_input(INPUT_POST, 'lstMois', FILTER_SANITIZE_STRING);



switch($action){
    case 'afficherListeVisiteurMois':
        $lesVisiteurs = $pdo->getListeVisiteur();
        $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
        include 'vues/v_listeVisiteurs.php';
        break;
}

if(isset($mois)){
$lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur, $mois);        
$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur, $mois);
include 'vues/v_validerFrais.php';
}
