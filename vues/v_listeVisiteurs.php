<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
    <div class="col-md-4">
        <form action="index.php?uc=validerFrais&action=choixVisiteur" 
              method="post" role="form">
            <div class="form-group">
                <div class="col-4">
                <label for="lstVisiteurs">Choisir le visiteurs :</label>
                </div>
                <div class="col-4">
                <select id="lstVisiteurs" name="lstVisiteurs" class="form-control"
                        onchange="this.form.submit();">
                    <?php
                    foreach ($lesVisiteurs as $unVisiteur) {
                        $id = $unVisiteur['id'];
                        $nom = $unVisiteur['nom'];
                        $prenom = $unVisiteur['prenom'];  
                        
                        if($idVisiteur == $id){ ?>
                    <option selected value="<?php echo $id?>">
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
        </form>
        <div class="col-4">
        <?php 
        if($uc == 'validerFrais' )  //On contrôle le cas d'utilisation et on inclu la liste des mois si un Comptable cherche à valider les frais;
        {?>
            <form action="index.php?uc=validerFrais&action=controlerFrais" 
                  method="post" role="form">
              
        <?php     
           include 'v_listeMois.php';
        }
        ?>
            </form>
        </div>
    </div>
</div>

