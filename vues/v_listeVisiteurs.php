<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
    <div class="row">
        
            <form action="index.php?uc=validerFrais&action=afficherListeVisiteurMois" 
              method="post" role="form">
                <div class="form-group">
                    <div class="col-md-1 ">
                        <label for="lstVisiteurs">Visiteur :</label>
                    </div>
                    <div class="col-md-2">    
                        <select id="lstVisiteurs" title="visiteur" name="lstVisiteurs" class="form-control"
                                onchange="this.form.submit();">
                            <option selected disabled>Choisir un visiteur</option>
                                <?php
                                foreach ($lesVisiteurs as $unVisiteur) {
                                    $id = $unVisiteur['id'];
                                    $nom = $unVisiteur['nom'];
                                    $prenom = $unVisiteur['prenom'];  

                                    if($idVisiteur == $id){ ?>
                                <option selected="selected" value="<?php echo $id?>">
                                <?php echo $nom . ' ' . $prenom?></option>
                                   <?php }else{?>

                                <option value="<?php echo $id?>"> 
                                    <?php echo $nom . ' ' . $prenom  ?>
                                </option>                    
                                <?php
                                    }
                                }
                                ?>
                        </select>
                    </div>
                </div>    
        
        <?php 
        if($uc == 'validerFrais' )  //On contrôle le cas d'utilisation et on inclu la liste des mois si un Comptable cherche à valider les frais;
        {?>    
        
        <div class="col-md-1">
            <label  for="lstMois" accesskey="n">Mois :</label>
        </div>
         <div class="col-md-2">
             <select id="lstMois" name="lstMois" class="form-control"
                     onchange="this.form.submit()">
             <option selected disabled>Choisir un mois</option>
        <?php     
           include 'v_listeMois.php'; 
           echo '</div>';           
        }        
        ?>                                         
         </div>
            </form> 
    </div>
</div>       



