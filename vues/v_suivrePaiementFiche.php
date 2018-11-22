<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <h1> Fiche de frais</h1>
    <hr>
    <div class="panel panel-primary">
    <div class="panel-heading">Fiche de frais du mois 
        <?php echo $numMois . '-' . $numAnnee ?> : </div>
    <div class="panel-body">
        <strong><u>Etat :</u></strong> <?php echo $libEtat ?>
        depuis le <?php echo $dateModif ?> <br> 
        <strong><u>Montant validé :</u></strong> <?php echo $montantValide ?>
    </div>
    </div>
    
    <!---------- Calcul des frais forfaitisés ---------->
    
    <div class="panel panel-info">
    <div class="panel-heading">Eléments forfaitisés</div>
    <table class="table table-bordered table-responsive">
        <tr>
            <th class="col-md-3">Frais</th>
            <th class="col-md-3">Montant unitaire</th>
            <th class="col-md-3">Quantité</th>
            <th class="col-md-3">Montant total</th>
        </tr>
        <tr>
            <?php
            $totalFraisForfait = 0;
            foreach ($lesFraisForfait as $unFraisForfait) {    
                $libelle = $unFraisForfait['libelle'];
                $montant = $unFraisForfait['montant'];
                $quantite = $unFraisForfait['quantite'];
                $fraisForfait = $montant * $quantite;
                $totalFraisForfait += $fraisForfait;
            ?>
        <tr>
            <td><?php echo $libelle ?></td>
            <td><?php echo $montant ?></td>
            <td><?php echo $quantite ?></td>
            <td><?php echo $fraisForfait ?></td>
        </tr>          
            <?php    
            }
            ?>
        <tr>
            <th>Montant total</th>
            <td> </td>
            <td> </td>
            <th><?php echo $totalFraisForfait . '€' ?> </th>
        </tr>
    </table>
    
    <table>
        
     <!---------- Calcul des frais hors forfait ---------->
     
    <div class="panel panel-info">
    <div class="panel-heading">Elements hors forfait - 
        <?php echo $nbJustificatifs ?> justificatifs reçus</div>
        <table class="table table-bordered table-responsive">
            <tr>
                <th class="col-md-3">Date</th>
                <th class="col-md-6">Libellé</th>
                <th class='col-md-3'>Montant</th>                
            </tr>
            <?php
            $totalFraisHorsForfait = 0;
            foreach ($lesFraisHorsForfait as $unFraisHorsForfait) {
                $date = $unFraisHorsForfait['date'];
                $libelle = htmlspecialchars($unFraisHorsForfait['libelle']);
                if($unFraisHorsForfait['refus']){
                    $montant = 0;
                }else{
                    $montant = $unFraisHorsForfait['montant']; 
                }
                $totalFraisHorsForfait += $montant;
                ?>
                <tr>
                    <td><?php echo $date ?></td>
                    <td><?php echo $libelle ?></td>
                    <td><?php echo $montant ?></td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <th>Montant total</th>
                <td> </td>
                <th><?php echo $totalFraisHorsForfait . '€' ?> </th>
            </tr>
        </table>
    </div>
     
     <!---------- Total des frais Forfaitisés + Hors forfait ---------->
    <div class="panel panel-info">
        <div class="panel-heading">Descriptif des éléments hors forfait - 
            <?php echo $nbJustificatifs ?> justificatifs reçus</div>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th class="date">Total Frais Forfaitisés</th>
                    <th class="libelle">Total Frais Hors Forfait</th>
                    <th class='montant'>Total des frais à rembourser</th>                
                </tr>
                <tr>
                    <td><?php echo $totalFraisForfait ?></td>
                    <td><?php echo $totalFraisHorsForfait ?></td>
                    <th><?php echo $totalFraisForfait + $totalFraisHorsForfait . '€'?></th>
                </tr>
            </table>
    </div>
     
</div>
    
    
    
    
    
</div>