     
<div class="container">  
    <div>
        <h1> Validation des fiches de frais </h1>
    </div></br>
   
    <div>
        <h3>Eléments forfaitisés</h3>
            <div class="col-md-4">
                <form method="post" 
                      action="index.php?uc=gererFrais&action=validerMajFraisForfait" 
                      role="form">
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
                                       size="10" maxlength="5" 
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
</div>   
</br></br>
<div class="container">  
    <h3>Eléments Hors-Forfait</h3>
    <hr>
    <div class="row">
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
                              action="index.php?uc=validerFrais&action=validerMajFraisForfait" 
                              role="form">
                        <td> <input type="text" 
                                    id ="dateFraisHf" 
                                    name="dateFraisHf"
                                    class="form-control"
                                    value="<?php echo $date ?>"></td>
                        <td> <input type="text"
                                    id="libelleFraisHf"
                                    name="dateFraisHf"
                                    class="form-control"
                                    value="<?php echo $libelle ?>"</td>
                        <td><input type="text"
                                   id="montantFraisHf"
                                   name="montantFraisHf"
                                   class="form-control"
                                   value="<?php echo $montant ?>"</td>
                        <td><button class="btn btn-success" type="submit">Corriger</button>
                            <button class="btn btn-danger" type="reset">Réinitialiser</button>                           
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
    <!--<div class="row">
        <h3>Nouvel élément hors forfait</h3>
        <div class="col-md-4">
            <form action="index.php?uc=gererFrais&action=validerCreationFrais" 
                  method="post" role="form">
                <div class="form-group">
                    <label for="txtDateHF">Date (jj/mm/aaaa): </label>
                    <input type="text" id="txtDateHF" name="dateFrais" 
                           class="form-control" id="text">
                </div>
                <div class="form-group">
                    <label for="txtLibelleHF">Libellé</label>             
                    <input type="text" id="txtLibelleHF" name="libelle" 
                           class="form-control" id="text">
                </div> 
                <div class="form-group">
                    <label for="txtMontantHF">Montant : </label>
                    <div class="input-group">
                        <span class="input-group-addon">€</span>
                        <input type="text" id="txtMontantHF" name="montant" 
                               class="form-control" value="">
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Ajouter</button>
                <button class="btn btn-danger" type="reset">Effacer</button>
            </form>
        </div>
    </div>-->
</div>