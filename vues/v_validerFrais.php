     
<div class="container">  
    <hr>
    <h1> Validation des fiches de frais </h1>
    <?php echo 'Statut : ' . $libelleEtat['libelle']; ?>
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
                        <button class="btn btn-success" type="submit">Corriger
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                        <button class="btn btn-danger" type="reset">Réinitialiser
                            <span class="glyphicon glyphicon-refresh"></span>
                        </button>
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
                                     
                                <td> <?php echo $date ?></td>
                                <td> <?php echo $libelle ?></td>
                                <td><?php echo $montant ?></td>
                                <td>  
                                    <button class="btn btn-sm btn-danger" type="submit" name="refuserFiche" value="refuserFiche">Refuser
                                    <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                    
                                    <button class="btn btn-sm btn-warning" type="submit" name="repporterFiche" value="repporterFiche">Repporter
                                    <span class="infobulle glyphicon glyphicon-share-alt" aria-label="Repporter ce frais"></span>
                                    </button>                          
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
    
    <hr>
        <form method="post" action="index.php?uc=validerFrais&action=validerFicheFrais" role="form">
        <input name="lstVisiteurs" value="<?php echo $idVisiteur; ?>" type="hidden">
        <input name="lstMois" value="<?php echo $idMois; ?>" type="hidden">
        <button class="btn btn-lg btn-success center-block" type="submit" name="validerFiche" value="validerFiche">Valider la fiche de frais
        <span class="glyphicon glyphicon-ok"></span>
        </form>
</div>

                                    