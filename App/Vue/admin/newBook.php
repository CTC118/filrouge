<h2>Insertion des ouvrages</h2>
<br>
<?php if(!empty($message)): ?>
<span style="font-size:1.25rem; color: red; font-weight: bold;"><?=$message;?></span>
<?php endif;?>
<hr>
<form method="post" action="index.php?entite=admin&action=addbook">
  <div class="form-row">
    <div class="form-group col-md-7">
      <label for="inputTitre">Titre</label>
      <input type="text" name="titre" class="form-control" id="inputTitre" placeholder="Titre d'ouvrage">
    </div>
          <div class="form-group col-md-4 custom-file" style="position:relative; top:32px; left: 75px;">
            
      
            <input type="file" name="bookImage" class="custom-file-input" id="bookImage">
                  <label for="bookImage" class="custom-file-label">Image d'ouvrage</label>
                </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputAuteur">Auteur</label>
        <input type="text" name="auteur" class="form-control" id="inputAuteur">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEditeur">Éditeur</label>
      <input type="text" name="editeur" class="form-control" id="inputEditeur">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTraducteur">Traducteur</label>
      <input type="text" name="traducteur" class="form-control" id="inputTraducteur">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputISBN">ISBN</label>
      <input type="text" name="isbn" class="form-control" id="inputISBN">
    </div>
      <div class="form-group col-md-3">
          <label for="inputTheme">Thème</label>
          <input type="text" name="theme" class="form-control" id="inputTheme">
      </div>
      <div class="form-group col-md-2">
          <label for="inputYear">Année</label>
          <input type="number" name="year" class="form-control" id="inputYear">
      </div>
      <div class="form-group col-md-4">
          <label for="inputCateg">Catégorie</label>
          <select name="categ" class="form-control" id="inputCateg">
              <option value="1">Romans & Fictions</option>
              <option value="2">Arts & Culture</option>
              <option value="3">Histoire & Géographie</option>
              <option value="4">Loisirs, Vie pratique & Société</option>
              <option value="5">Sciences & Techniques</option>
          </select>
        </div>
<!-- &nbsp;&nbsp;&nbsp;
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Emprunté">
        <label class="form-check-label" for="inlineCheckbox1">Emprunté</label>
    </div>
&nbsp;&nbsp;&nbsp;
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Réservé">
        <label class="form-check-label" for="inlineCheckbox2">Réservé</label>
    </div>
&nbsp;&nbsp;&nbsp;
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Supprimé">
        <label class="form-check-label" for="inlineCheckbox3">Supprimé</label>
    </div> -->
  </div>
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="inputLangue">Langue</label>
          <input type="text" name="langue" class="form-control" id="inputLangue">
      </div>
      <div class="form-group col-md-4">
          <label for="inputLangue_orig">Langue originale</label>
          <input type="text" name="langue_orig" class="form-control" id="inputLangue_orig">
      </div>
      <div class="form-group col-md-4">
          <label for="inputFormat">Format</label>
          <input type="text" name="format" class="form-control" id="inputFormat">
      </div>
  </div>
  <div class="form-row" >
  <div class="form-group col-md-7">
        <label for="resume">Résumé</label>
        <textarea class="form-control" id="resume" name="resume" rows="3"></textarea>
    </div>
    
  <div class="form-group col-md-2" style="position:relative; top:30px; left:30px;">
    <button type="submit" class="btn btn-info">Ajouter</button>
  </div>

</div>
</form>