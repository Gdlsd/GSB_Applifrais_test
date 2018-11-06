     
<div class="container">  
    <hr>
    <h1> Validation des fiches de frais </h1>
    <hr>
    
    <div class="row">
    <div class="col-md-3">       
    
      
        <h3>Eléments forfaitisés</h3>
            <div>
                <form method="post" 
                      action="index.php?uc=validerFrais&action=corrigerFraisForfait" 
                      role="form">
                    <input name="lstVisiteurs" value="<?php echo $idVisiteur; ?>" 
                                            type="hidden">
                    <input name="lstMois" value="<?php echo $idMois; ?>" 
                                            type="hidden">
                    <fieldset>       
                        <?php
                        foreach ($lesFraisForfait as $unFrais) {
                            $idFrais = $unFrais['idfrais'];
                            $libelle = htmlspecialchars($unFrais['libelle']);
                            $quantite = $unFrais['quantite']; ?>
                            <div class="form-group">
                                <label for="idFrais"><?php echo $libelle ?></label>                             
                                <input type="text" id="idFrais" 
                                       name="lesFrais[<?php echo $idFrais ?>]"
                                       
                                       value="<?php echo $quantite ?>" 
                                       class="form-control">

                            </div>
                            <?php
                        }
                        ?>
                        <button class="btn btn-success" type="submit">Corriger</button>
                        <button class="btn btn-danger" type="reset">Réinitialiser</button>
                    </fieldset>
                </form>
            </div>
     </div>


        <div class="col-md-9">
            <h3>Eléments Hors-Forfait</h3>

                <div class="panel panel-info">
                    <div class="panel-heading">Descriptif des éléments hors forfait</div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th class="date">Date</th>
                                <th class="libelle">Libellé</th>  
                                <th class="montant">Montant</th>  
                                <th class="action">&nbsp;</th> 
                            </tr>
                        </thead>  
                        <tbody>
                        <?php
                        foreach ($lesFraisHorsForfait as $unFraisHorsForfait) {
                            $libelle = htmlspecialchars($unFraisHorsForfait['libelle']);
                            $date = $unFraisHorsForfait['date'];
                            $montant = $unFraisHorsForfait['montant'];
                            $id = $unFraisHorsForfait['id']; ?>           

                            <tr>
                                <form method="post" 
                                      action="index.php?uc=validerFrais&action=validationFraisHorsForfait" 
                                      role="form">
                                     <input name="lstVisiteurs" value="<?php echo $idVisiteur; ?>" 
                                            type="hidden">
                                     <input name="lstMois" value="<?php echo $idMois; ?>" 
                                            type="hidden">
                                     <input name="idFrais" value="<?php echo $id; ?>" 
                                            type="hidden">
                                     
                                <td> <input type="text" 
                                            id ="dateFraisHf" 
                                            name="dateFraisHf"
                                            class="form-control"
                                            value="<?php echo $date ?>"></td>
                                <td> <input type="text"
                                            id="libelleFraisHf"
                                            name="libelleFraisHf"
                                            class="form-control"
                                            value="<?php echo $libelle ?>"</td>
                                <td><input type="text"
                                           id="montantFraisHf"
                                           name="montantFraisHf"
                                           class="form-control"
                                           value="<?php echo $montant ?>"</td>
                                <td>
                                    <button class="btn btn-warning" type="submit" name="repporterFiche" value="repporterFiche">Repporter</button>
                                    <button class="btn btn-danger" type="submit" name="refuserFiche" value="refuserFiche">Refuser</button>                           
                                </td>
                                </form>
                            </tr>

                            <?php
                        }
                        ?>
                        </tbody>  
                    </table>
                </div>
        </div>
    </div>
</div>