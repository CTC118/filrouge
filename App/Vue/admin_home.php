<main>
<!-- 後臺管理首頁 -->

<h2 id='admin_home'>Page d'Administrateur</h2>
<hr>
<br>
<div style="margin-left:60px;">

<h4>Scanez ou tapez des infos d'ouvrage</h4>
<form method="post" action="index.php?entite=admin&action=search_book">
  <div class="form-row">
      <div class="form-group col-md-2">
        <select name="searchtype" class="form-control">
            <option value="isbn">ISBN</option>
            <option value="titre">Titre</option>
            <option value="auteur">Auteur</option>
            <option value="theme">Thème</option>
        </select>
      </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="found_book">
    </div>
    <div class="form-group col-md-3">
      <input type="submit" class="btn btn-info" value="Envoyer">
    </div>
  </div>
</form>

<hr>

<h4>Scanez ou tapez des infos d'usage</h4>
<form method="post" action="index.php?entite=admin&action=search_user">
  <div class="form-row">
      <div class="form-group col-md-2">
        <select name="searchtype" class="form-control">
            <option value="ncard">N°carte</option>
            <option value="nom">Nom</option>
            <option value="prenom">Prénom</option>
            <option value="phone">Téléphone</option>
        </select>
      </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" name="found_user">
    </div>
    <div class="form-group col-md-3">
      <input type="submit" class="btn btn-info" value="Envoyer">
    </div>
  </div>
</form>

<hr >
<?php if(!empty($message)): ?>
<span style="font-size:1.25rem; color: red; font-weight: bold;"><?=$message;?></span><br><br>
<?php endif;?>
<!-- 書籍搜尋結果 -->
<?php if(!empty(isset($results))): ?>
  <div class="form-row">
  <div class="form-group col-md-12">
  <div>

    <div class="table-responsive" >
        <table class="table table-striped" style="text-align: center;">
            <thead>
                <tr class="table-active">
                    <th>#</th>
                    <th scope="col" style="text-align: center; width:200px;">ISBN</th>
                    <th scope="col" style="text-align: center; width:600px;">Titre</th>
                    <th scope="col" style="text-align: center; width:200px;">Gestion</th>
                </tr>
            </thead>
            <tbody>

        <?php $n=0; foreach($results as $result): $n++;?>
            <tr>
                <th><?=$n?></th>
                <th scope="row" style="vertical-align:middle;"><?=$result['isbn']?></th>
                <th style="vertical-align:middle;"><span style="font-size:1.05rem;"><?=$result['titre']?></span></th>
                <th style="text-align: center; vertical-align:middle;"><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-xl<?=$result['idBook']?>">Détail</button>
<!-- 彈出視窗    -->
<div class="modal fade bd-example-modal-xl<?=$result['idBook']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content"><br><br>
          <h3 style="text-align:center;">Fiche détail d'ouvrage</h3>
          
<div class="form-group col-md-12" style="padding: 30px" >
	<table class="table table-bordered" style="text-align: left;">
  <form method="post" action="index.php?entite=admin&action=edit_book">
		<tr>
			<td rowspan="4" style="width:200px"><input type="file" name="bookImage" class="custom-file-input" id="bookImage"><img style="height: 250px; width:200px;" src="images/<?=$result['bookImage']?>"></td>
      
      <th colspan="2" class="titre">Titre :&nbsp;&nbsp;&nbsp;<input class="form-control" name="titre" value="<?=$result['titre']?>">
          <input type="hidden" name="idBook" value="<?=$result['idBook']?>">
      </th>
			
		</tr>
		<tr>
			
			<th>Auteur :&nbsp;&nbsp;&nbsp;<input class="form-control" name="auteur" value="<?=$result['auteur']?>"></th>
      <th>Traducteur :&nbsp;&nbsp;&nbsp; <input class="form-control" name="traducteur" value="<?=$result['traducteur']?>"></th>
		</tr>
		<tr>
      <th>Editeur :&nbsp;&nbsp;&nbsp;<input class="form-control" name="editeur" value="<?=$result['editeur']?>"></th>
      <th>Année :&nbsp;&nbsp;&nbsp; <input class="form-control" name="year" value="<?=$result['year']?>"></th>
		</tr>
        <tr>
            <th>ISBN :&nbsp;&nbsp;&nbsp;<input class="form-control" name="isbn" value="<?=$result['isbn']?>"></th>
            <th>Format :&nbsp;&nbsp;&nbsp;<input class="form-control" name="format" value="<?=$result['format']?>"></th>
		</tr>
		<tr>
      <th>Theme :&nbsp;&nbsp;&nbsp;<input class="form-control" name="theme" value="<?=$result['theme']?>"></th>
      <th>Catégorie :&nbsp;&nbsp;&nbsp;<input class="form-control" type="hidden" value="<?=$result['categ']?>">
          <select name="categ" class="form-control" id="inputCateg">
              <option value="1" <?php if($result['categ'] == 1) {echo "selected";}?>>Romans & Fictions</option>
              <option value="2" <?php if($result['categ'] == 2) {echo "selected";}?>>Arts & Culture</option>
              <option value="3" <?php if($result['categ'] == 3) {echo "selected";}?>>Histoire & Géographie</option>
              <option value="4" <?php if($result['categ'] == 4) {echo "selected";}?>>Loisirs, Vie pratique & Société</option>
              <option value="5" <?php if($result['categ'] == 5) {echo "selected";}?>>Sciences & Techniques</option>
          </select>
      </th>
      <th>Langue :&nbsp;&nbsp;&nbsp;<input class="form-control" name="langue" value="<?=$result['langue']?>"></th>
    </tr>
    <tr>
      <th colspan="2">Résume :&nbsp;&nbsp;&nbsp;<textarea class="form-control" name="resume" rows="3"><?=$result['resume']?></textarea></th>
      <th>Langue d'original :&nbsp;&nbsp;&nbsp;<input class="form-control" name="langue_orig" value="<?=$result['langue_orig']?>">
          <br><button type="submit" style="float:right;" class="btn btn-danger">Modifier</button>
          
        </th>
    </tr>
    <tr>
      <!-- <th colspan="3"></th> -->
    </tr>
    </form>
		
  
    </table>
</div>
        </div>
        </div>
      </div>&nbsp;&nbsp;
      <a href="index.php?entite=admin&action=deleteBook&idBook=<?= $result['idBook']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
  </th>

            </tr>

        <?php endforeach; ?>
                      
    
            </tbody>
        </table>
    </div>
</div>
</div>
</div>




<!-- 人員搜尋結果 -->
<?php elseif(!empty(isset($resultat))): ?>
  <div class="form-row">
  <div class="form-group col-md-12">
  <div>

    <div class="table-responsive" >
        <table class="table table-striped" style="text-align: center">
            <thead>
                <tr class="table-active">
                    <th>#</th>
                    <th scope="col" style=" width:100px;">N°carte</th>
                    <th scope="col" style=" width:400px;">Nom et prénom</th>
                    <th scope="col" style=" width:200px;">Téléphone</th>
                    <th scope="col" style="text-align: center; width:200px;">Gestion</th>
                </tr>
            </thead>
            <tbody>

        <?php $n=0; foreach($resultat as $result): $n++;?>
            <tr>
                <th><?=$n?></th>
                <th scope="row" style="vertical-align:middle;"><?=$result['ncard']?></th>
                <th style="vertical-align:middle;"><?=$result['nom']?>&nbsp;&nbsp;<?=$result['prenom']?></th>
                <th style="vertical-align:middle;"><span style="font-size:1.05rem;"><?=$result['phone']?></span></th>
                <th style="text-align: center; vertical-align:middle;"><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg<?=$result['idUser']?>">Détail</button>
    <div class="modal fade bd-example-modal-lg<?=$result['idUser']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content"><br><br>
          <h3 style="text-align:center;">Fiche détail d'usager</h3>


          <div class="form-group col-md-12" style="padding: 30px">
          <form method="post" action="index.php?entite=admin&action=update_user&idUser=<?=$result['idUser']?>" style="text-align: left;">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="psw_ncard">°N carte</label>
              <input id="ncard" type="text" class="form-control" name="ncard" value="<?=$result['ncard']?>" onkeyup="psw.value=this.value;" readonly>
              <input id="psw" type="hidden" class="form-control" name="psw_ncard" value="">
              <input type="hidden" value="<?=$result['idUser']?>" name="idUser">
              <small>(C'est le mot de passe d'utilisateur!)</small>
            </div>
            <div class="form-group col-md-4">
              <label for="nom" value="">Nom</label>
              <input type="text" class="form-control" name="nom" value="<?=$result['nom']?>">
            </div>
            <div class="form-group col-md-4">
              <label for="prenom">Prénom</label>
              <input type="text" class="form-control" name="prenom" value="<?=$result['prenom']?>">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?=$result['email']?>">
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Numéro de téléphone</label>
              <input type="number" class="form-control" name="phone" value="<?=$result['phone']?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="cp">Code Postal</label>
              <input type="number" class="form-control" name="cp" value="<?=$result['cp']?>">
            </div>
            <div class="form-group col-md-4">
              <label for="ville">Ville</label>
              <input type="text" class="form-control" name="ville" value="<?=$result['ville']?>">
            </div>
            <div class="form-group col-md-1">
            </div>
            <div class="form-group col-md-5">
              <label for="status">Status</label><br>
              <input type="text" class="form-control" name="status" value="<?=$result['status']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" name="adresse" value="<?=$result['adresse']?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="debut_Date">Date d'inscription</label>
              <input type="date" class="form-control" name="debut_Date" value="<?=$result['debut_Date']?>">
            </div>
            <div class="form-group col-md-4">
              <label for="fin_Date">Date d'inscription</label>
              <input type="date" class="form-control" name="fin_Date" value="<?=$result['fin_Date']?>">
            </div>
          </div>

          <button type="submit" class="btn btn-danger">Modifier</button>
<br><br>
        </form>
        </div>
          </div>
          </div>
        </div>&nbsp;&nbsp;
        <a href="index.php?entite=admin&action=deleteUser&idUser=<?= $result['idUser']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
        </tr>

<?php endforeach; ?>
              
<?php endif ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
<br>

</div>


</main>