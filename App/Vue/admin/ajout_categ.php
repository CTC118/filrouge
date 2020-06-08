<h2>Ajouter Catégories</h2>
<br>
<hr>
<form method="post" action="index.php?entite=admin&action=ajout_categ">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputCateg" style="font-weight: bold">Titre de catégorie</label>
      <input type="text" name="categ" class="form-control" id="inputCateg" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputStatus" style="font-weight: bold">Status</label>
      <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" id="inputStatus" name="sta_categ">
                    <label class="form-check-label" for="defaultCheck1">
                        Actif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="inputStatus" name="sta_categ">
                    <label class="form-check-label" for="defaultCheck2">
                        Inactif
                    </label>
                </div>
      <!-- <input type="text" name="sta_categ" class="form-control" id="inputStatus" > -->
    </div>
  </div>
  <button class="btn btn-info">Valider</button>
</form>