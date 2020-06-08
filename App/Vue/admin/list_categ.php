<!-- 所有categ的名單 -->

<h2 id="listUser" style="margin-left:300px;">Liste des catégories</h2><br>
<div class="table-responsive">
<table  class="table table-hover" style="text-align: center;">
  <thead>
    <tr class="table-active">
      <th scope="col"  style="vertical-align: middle;">#</th>
      <th scope="col"  style="vertical-align: middle;">Catégorie</th>
      <th scope="col" style="vertical-align: middle;">Status<br>
      <small>[ 0-> Inactuf , 1-> Actif ]</small></th>
      <th scope="col" style="vertical-align: middle;">Action</th>
    </tr>
  </thead>
  <tbody  id="list_table">

    <?php $n=0; foreach($categs as $categ): $n++; ?>
        
    <tr>
      <th scope="row" style="width:30px; "><?=$n?></th>
      <th ><?=$categ['type']?></th>
      <th ><?=$categ['status']?></th>
      <th >
            <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg<?= $categ['idCateg']?>"><i class="fas fa-edit"></i></button>
            <!-- <a class="btn btn-info" href="index.php?entite=admin&action="><i class="fas fa-edit"></i></a> -->
            <a class="btn btn-danger" href="index.php?entite=admin&action=del_list_categ&idCateg=<?= $categ['idCateg']?>"><i class="fas fa-trash-alt"></i></a>
      </th>

<!-- 彈出視窗 -->
<div class="modal fade bd-example-modal-lg<?= $categ['idCateg']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="margin:auto"><br><br>
          <h3 style="text-align:center;">Modification Catégorie</h3>


        <div class="form-group col-md-12" style="padding: 30px">
        
        <form method="post" action="index.php?entite=admin&action=edit_list_categ">
  <div class="form-row">
    <div class="form-group col-md-8">
        <input type="hidden" name="idCateg" value="<?= $categ['idCateg']?>">
      <label for="inputCateg" style="font-weight: bold">Titre de catégorie</label>
      <input type="text" name="categ" class="form-control" id="inputCateg" value="<?=$categ['type']?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="inputStatus" style="font-weight: bold">Status</label>
      
      <?php if($categ['status'] ==='1'):?>
      <div class="form-check">
          
                    <input class="form-check-input" type="radio" value="1" id="inputStatus" name="sta_categ" checked>
                    <label class="form-check-label" for="inputStatus">
                        Actif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="inputStatus" name="sta_categ">
                    <label class="form-check-label" for="inputStatus">
                        Inactif
                    </label>
                </div>
        <?php elseif($categ['status'] ==='0'): ?>
                <div class="form-check">
                    
                    <input class="form-check-input" type="radio" value="1" id="inputStatus" name="sta_categ">
                    <label class="form-check-label" for="inputStatus">
                        Actif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="inputStatus" name="sta_categ" checked>
                    <label class="form-check-label" for="inputStatus">
                        Inactif
                    </label>
                </div>
        <?php endif; ?>
    </div>
  </div>
  <button class="btn btn-info">Valider</button>
</form>
        </div>
          </div>
          </div>
        </div>
      </tr>

  </tr>
      
      <?php endforeach; ?>
  </tbody>
</table>
</div>