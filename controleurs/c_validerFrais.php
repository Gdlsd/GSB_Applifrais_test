<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch($action){
    case 'choixVisiteur':
    $lesVisiteurs = $pdo->getListeVisiteur();
    $idVisiteur = filter_input(INPUT_POST, 'lstVisiteurs', FILTER_SANITIZE_STRING);
    if(isset($idVisiteur)){
        $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
    }
    
    include 'vues/v_listeVisiteurs.php';
    
    break;

    break;
}

