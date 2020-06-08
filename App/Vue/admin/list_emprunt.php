<!-- 所有emprunt的名單 -->

<h2 id="listUser" style="margin-left:300px;">Liste d'emprunt en cours</h2><br>
<div class="table-responsive">
<table  class="table table-hover" style="text-align: center;">
  <thead>
    <tr class="table-active">
      <th scope="col"  style="vertical-align: middle;">#</th>
      <th scope="col"  style="vertical-align: middle;">Nom prénom</th>
      <th scope="col" style="vertical-align: middle;">Titre d'ouvrage</th>
      <th style="vertical-align: middle;">Date retour</th>
      <th scope="col" style="vertical-align: middle;">Action</th>
    </tr>
  </thead>
  <tbody  id="list_table">

    <?php $n=0; foreach($emps as $emp): $n++; ?>
        
    <tr>
      <th scope="row" style="width:30px; "><?=$n?></th>
      <th ><?=$emp['nom']?>&nbsp;&nbsp;<?=$emp['prenom']?></th>
      <th ><?=$emp['titre']?></th>
      <th ><?=$emp['Retour_Date']?></th>
      <th >
            <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg<?= $emp['emp']?>"><i class="fas fa-edit"></i></button>
            <!-- <a class="btn btn-info" href="index.php?entite=admin&action="><i class="fas fa-edit"></i></a> -->&nbsp;&nbsp;
            <a class="btn btn-danger" href="index.php?entite=admin&action=del_list_emprunt&idEmp=<?= $emp['emp']?>"><i class="fas fa-trash-alt"></i></a>
      </th>

<!-- 彈出視窗 -->
<div class="modal fade bd-example-modal-lg<?= $emp['emp']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="margin:auto"><br><br>
          <h3 style="text-align:center;">Gérer Emprunt</h3>


        <div class="form-group col-md-12" style="padding: 30px;">
        
        <form method="post" action="index.php?entite=admin&action=edit_list_emprunt">
        <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputNAME" style="font-weight: bold">Nom prénom</label>
      <input type="text" name="NAME" class="form-control" id="inputNAME" value="<?= $emp['nom']?>&nbsp;&nbsp;<?= $emp['prenom']?>" readonly>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputTitre" style="font-weight: bold">Titre d'ouvrage</label>
      <input type="text" name="Titre" class="form-control" id="inputTitre" value="<?= $emp['titre']?>" readonly>
    </div>
  
  </div>
        <div class="form-row">
    <div class="form-group col-md-6">
    <input type="hidden" name="idEmp" value="<?= $emp['emp']?>">
      <label for="inputNcard" style="font-weight: bold">N°carte utilisateur</label>
      <input type="text" name="ncard" class="form-control" id="inputNcard" value="<?= $emp['ncard']?>">
    </div>
    
    <div class="form-group col-md-3">
      <label for="inputBookid" style="font-weight: bold">Code de livre</label>
      <input type="text" name="idBook" class="form-control" id="inputBookid" value="<?= $emp['idBook']?>">
    </div>
    <div class="form-group col-md-3">
      <label for="inputStatus" style="font-weight: bold">Status</label>
      <input type="text" name="status" class="form-control" id="inputStatus" value="<?= $emp['status']?>" readonly>
    </div>
  
  </div>
  
  <!-- status判斷, prof八本四周,etud三本兩周 -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputED" style="font-weight: bold">Date d'emprunt</label>
      <input type="date" name="Emp_Date" class="form-control" id="inputED" value="<?= $emp['Emp_Date']?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputRD" style="font-weight: bold">Date de retour</label>
      <input type="date" name="Retour_Date" class="form-control" id="inputRD" value="<?= $emp['Retour_Date']?>">
    </div>
  </div><hr>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputRS" style="font-weight: bold">Retour status&nbsp;&nbsp;<small style="color:blue"><?php if($emp['returnStatus'] === '0'){echo 'Retourné';}?></small><small style="color:red; font-weight:bold; "><?php if($emp['returnStatus'] === '1'){echo 'Passé le date';} ?></small></label>
      <select name="returnStatus" id="inputRS" class="form-control">
          <option value="-"<?php if($emp['returnStatus'] === '-') {echo 'selected';}?>>---Select---</option>
          <option value="0"<?php if($emp['returnStatus'] === '0') {echo 'selected';}?>>Retourné</option>
          <option value="1"<?php if($emp['returnStatus'] === '1') {echo 'selected';}?>>Date dépassée</option>
      </select>
    </div>
    <div class="form-group col-md-1">
        </div>
    <div class="form-group col-md-2">
      <label for="amende" style="font-weight: bold">Amende</label>
      <input type="number" name="amende" class="form-control" id="amende" value="<?php if(!empty($emp['amende'])){echo $emp['amende'];}else{echo 0;} ?>">
    </div>
    <div class="form-group col-md-1">
        <label ></label>
      <h5 style="position:relative; top:15px;">€</h5>
  </div>
  <div class="form-group col-md-2">
      <br>
  <button class="btn btn-danger" style="position:relative; top:8px;">Modifier</button>
  </div>
  </div>
</form>
        </div>
          </div>
          </div>
        </div>
      </tr>

      
      <?php endforeach; ?>
  </tbody>
</table>
</div>