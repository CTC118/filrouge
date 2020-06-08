<!-- 所有書的名單 -->

<h2 id="listUser" style="margin-left:300px;">Liste d'ouvrages</h2><br>
<div class="table-responsive">
<table  class="table table-hover">
  <thead>
    <tr class="table-active">
      <th scope="col" style="text-align: center;">#</th>
      <th scope="col" style="text-align: center;">Titre</th>
      <th scope="col"></th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody  id="list_table">

    <?php $n=0; foreach($books as $book): $n++; ?>
        
    <tr>
      <th scope="row" style="width:30px; text-align: center;"><?=$n?></th>
      <th style="text-align: center;"><?=$book['titre']?></th>
      <th><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-xl<?=$book['idBook']?>">Détail</button>

<!-- 彈出視窗 -->
      <div class="modal fade bd-example-modal-xl<?=$book['idBook']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content"><br><br>
          <h3 style="text-align:center;">Fiche détail d'ouvrage</h3>
          
<div class="form-group col-md-12" style="padding: 30px" >
	<table class="table table-bordered">
  <form method="post" action="index.php?entite=admin&action=edit_book">
		<tr>
			<td rowspan="4" style="width:200px"><input type="file" name="bookImage" class="custom-file-input" id="bookImage"><img style="height: 250px; width:200px;" src="images/<?=$book['bookImage']?>"></td>
      
      <th colspan="2" class="titre">Titre :&nbsp;&nbsp;&nbsp;<input class="form-control" name="titre" value="<?=$book['titre']?>">
          <input type="hidden" name="idBook" value="<?=$book['idBook']?>">
      </th>
			
		</tr>
		<tr>
			
			<th>Auteur :&nbsp;&nbsp;&nbsp;<input class="form-control" name="auteur" value="<?=$book['auteur']?>"></th>
      <th>Traducteur :&nbsp;&nbsp;&nbsp; <input class="form-control" name="traducteur" value="<?=$book['traducteur']?>"></th>
		</tr>
		<tr>
      <th>Éditeur :&nbsp;&nbsp;&nbsp;<input class="form-control" name="editeur" value="<?=$book['editeur']?>"></th>
      <th>Année :&nbsp;&nbsp;&nbsp; <input class="form-control" name="year" value="<?=$book['year']?>"></th>
		</tr>
        <tr>
            <th>ISBN :&nbsp;&nbsp;&nbsp;<input class="form-control" name="isbn" value="<?=$book['isbn']?>"></th>
            <th>Format :&nbsp;&nbsp;&nbsp;<input class="form-control" name="format" value="<?=$book['format']?>"></th>
		</tr>
		<tr>
      <th>Thème :&nbsp;&nbsp;&nbsp;<input class="form-control" name="theme" value="<?=$book['theme']?>"></th>
      <th>Catégorie :&nbsp;&nbsp;&nbsp;<input class="form-control" type="hidden" value="<?=$book['categ']?>">
          <select name="categ" class="form-control" id="inputCateg">
              <option value="1" <?php if($book['categ'] == 1) {echo "selected";}?>>Romans & Fictions</option>
              <option value="2" <?php if($book['categ'] == 2) {echo "selected";}?>>Arts & Culture</option>
              <option value="3" <?php if($book['categ'] == 3) {echo "selected";}?>>Histoire & Géographie</option>
              <option value="4" <?php if($book['categ'] == 4) {echo "selected";}?>>Loisirs, Vie pratique & Société</option>
              <option value="5" <?php if($book['categ'] == 5) {echo "selected";}?>>Sciences & Techniques</option>
          </select>
      </th>
      <th>Langue :&nbsp;&nbsp;&nbsp;<input class="form-control" name="langue" value="<?=$book['langue']?>"></th>
    </tr>
    <tr>
      <th colspan="2">Résumé :&nbsp;&nbsp;&nbsp;<textarea class="form-control" name="resume" rows="3"><?=$book['resume']?></textarea></th>
      <th>Langue d'original :&nbsp;&nbsp;&nbsp;<input class="form-control" name="langue_orig" value="<?=$book['langue_orig']?>">
          <br><button type="submit" style="float:right;" class="btn btn-danger">Modifier</button>
      </th>
    </tr>
    <tr>
      <!-- <th colspan="3"></th> -->
    </tr>
    </form>
		<!-- <tr> -->
        <!-- <th colspan="3"  style="border-top:1px solid;">
    <form method="post" action="index.php?entite=admin&action=gestion">
        <h5>Gestion :&nbsp;&nbsp;&nbsp;</h5>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="emprunter" value="0" >
                <label class="form-check-label" for="inlineCheckbox1">Emprunté</label> -->
                <!-- <?php if(($_POST['emprunter'])==='checked'){echo '1';} else { echo '0';} ?> -->
            <!-- </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="reserver" value="0">
                <label class="form-check-label" for="inlineCheckbox2">Réservé</label>
            </div> -->
            <!-- <input id="sta" type="number" name="sta" value="XX" readonly> -->
            <!-- <button type="submit" class="btn btn-info btn-sm">Valider</button>
        </form>
        </th> -->
        <!-- <th colspan="2" id="sta" style="text-align: center;"><label class="sta ">Statistique :&nbsp;&nbsp;&nbsp;</label><input id="sta" type="number" name="sta" value="XX" readonly>fois/an	</th> -->
    <!-- </tr> -->
  
    </table>
</div>
        </div>
        </div>
      </div>

      
    </th>
    <th scope="col"><a href="index.php?entite=admin&action=deleteBook&idBook=<?= $book['idBook']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></th>
  </tr>
      
      <?php endforeach; ?>
  </tbody>
</table>
</div>


<!-- <form method="get" action="#">
                <label>Gestion : </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="emprunter" id="defaultCheck1" name="checkGestion[]">
                    <label class="form-check-label" for="defaultCheck1">
                        Emprunté
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="reserver" id="defaultCheck2" name="checkGestion[]">
                    <label class="form-check-label" for="defaultCheck2">
                        Réservé
                    </label>
                </div> -->
                <!-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="supprimer" id="defaultCheck3" name="checkGestion[]">
                    <label class="form-check-label" style="color:red" for="defaultCheck3">
                        Supprimé
                    </label>
                </div> -->
            <!-- <br>
            
            <button type="submit" class="btn btn-info btn-sm">Valider</button>
                </form> -->
                    