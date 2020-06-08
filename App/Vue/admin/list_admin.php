<!-- 所有admin名單 -->

<h2 id="listUser" style="margin-left:300px;">Liste d'administrateurs</h2>


<br><div class="table-responsive">
<table  class="table table-hover">
  <thead>
    <tr class="table-active">
      <th scope="col" style=" text-align: center;">#</th>
      <th scope="col">Nom et prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody  id="list_table">


    <?php $n=0; foreach($users as $user): $n++;?>

      <tr>
        <th scope="row" style=" text-align: center;"><?=$n?>
          </th>
        <th><?=  $user['nom'] ?>&nbsp;&nbsp;<?= $user['prenom']?></th>
      <th><a href="mailto:<?= $user['email'] ?>"><?= $user['email'] ?></a></th>
      <th><?= $user['phone'] ?></th>
      <th>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg<?= $user['idUser']?>"><i class="fas fa-eye"></i></button>&nbsp;&nbsp;  
      <a href="index.php?entite=admin&action=deleteUser&idUser=<?= $user['idUser']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></th>
      
<!-- 彈出視窗 -->
      <div class="modal fade bd-example-modal-lg<?= $user['idUser']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content"><br><br>
          <h3 style="text-align:center;">Fiche détail d'administrateur</h3>


          <div class="form-group col-md-12" style="padding: 30px">
          <form method="post" action="index.php?entite=admin&action=update_user">
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="psw_ncard">Numéro ID</label>
              <input id="ncard" type="text" class="form-control" name="ncard" value="<?=$user['ncard']?>" readonly>
              <!-- <input id="psw" type="hidden" class="form-control" name="psw_ncard" value="">
              <small>(C'est le mot de passe d'utilisateur!)</small> -->
            </div>
            <div class="form-group col-md-4">
              <label for="nom" value="">Nom</label>
              <input type="text" class="form-control" name="nom" value="<?=$user['nom']?>"readonly>
              <input type="hidden" name="idUser" value="<?=$user['idUser']?>">
            </div>
            <div class="form-group col-md-4">
              <label for="prenom">Prénom</label>
              <input type="text" class="form-control" name="prenom" value="<?=$user['prenom']?>"readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?=$user['email']?>"readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="phone">Numéro de téléphone</label>
              <input type="number" class="form-control" name="phone" value="<?=$user['phone']?>"readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="cp">Code Postal</label>
              <input type="number" class="form-control" name="cp" value="<?=$user['cp']?>"readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="ville">Ville</label>
              <input type="text" class="form-control" name="ville" value="<?=$user['ville']?>"readonly>
            </div>
            <div class="form-group col-md-1"></div>
            
            <div class="form-group col-md-5">
              <!-- <label for="status">Status</label><br> -->
              <label for="debut_Date">Date d'inscription</label>
              <input type="date" class="form-control" name="debut_Date" value="<?= $user['debut_Date'] ?>"readonly>
            </div>
            <!-- <div class="form-group col-md-2">
                <button type="submit" class="btn btn-danger" style="position: relative; top:30px;">Modifier</button>
            </div> -->
          </div>
          <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" name="adresse" value="<?=$user['adresse']?>"readonly>
          </div>
          <!-- <div class="form-row">
            <div class="form-group col-md-4">
              <label for="debut_Date">Date d'inscription</label>
              <input type="date" class="form-control" name="debut_Date" value="<?= $user['debut_Date'] ?>"readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="fin_Date">Date d'expiration</label>
              <input type="date" class="form-control" name="fin_Date" value="<?= $user['fin_Date'] ?>"readonly>
            </div>
          </div> -->

          
<br><br>
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