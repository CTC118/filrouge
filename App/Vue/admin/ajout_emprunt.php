<h2>Ajouter Emprunt</h2>
<br>
<hr>
<form method="post" action="index.php?entite=admin&action=emprunter">
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputStatus" style="font-weight: bold">Status</label>
      <select id="inputStatus" name="status" class="form-control">
          <option value="">---Select---</option>
          <option value="prof">professeur</option>
          <option value="etud">étudiant</option>
      </select>
    </div>
    <!-- <div class="form-group col-md-1"></div> -->
    <div class="form-group col-md-8" style="margin-left:30px;">
      <br>
      <small style="color:blue;font-weight:500;">- Professeurs peuvent emprunter jusqu’à 8 livres pendant 4 semaines</small><br>
      <small style="color:blue;font-weight:500;">- Étudiants ne peuvent emprunter que 3 livres pour une période de 2 semaines</small><br><br>
<!-- php因為沒送出表單所以值抓不到因此沒作用,可用js -->
      <!-- <?php if(filter_input(INPUT_POST,'status') == 'prof' && filter_input(INPUT_POST,'status') != ''): ?>
        <h6 style="color:blue;font-weight:500;">- Professeurs peuvent emprunter jusqu’à 8 livres pendant 4 semaines</h6><br>
      <?php elseif(filter_input(INPUT_POST,'status')=='etud' && filter_input(INPUT_POST,'status') != ''): ?>
        <h6 style="color:blue;font-weight:500;">- Étudiants ne peuvent emprunter que 3 livres pour unepériode de 2 semaines</h6><br><br>
      <?php endif; ?> -->
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNcard" style="font-weight: bold">Insert N°carte</label>
      <input type="text" name="ncard" class="form-control" id="inputNcard" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputBookid" style="font-weight: bold">Tapez code de livre</label>
      <input type="text" name="bookid" class="form-control" id="inputBookid" >
    </div>
  </div>
  <!-- status判斷, prof八本四周,etud三本兩周 -->
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputED" style="font-weight: bold">Date d'emprunt</label>
      <input type="date" name="Emp_Date" class="form-control" id="inputED" value="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputRD" style="font-weight: bold">Date de retour</label>
      <input type="date" name="Retour_Date" class="form-control" id="inputRD" value="">
    </div>
  </div><br>
  <button class="btn btn-info">Valider</button>
</form>