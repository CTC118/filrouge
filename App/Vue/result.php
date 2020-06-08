<main style="padding:10px; margin:0px 20px;">
<h1 style="text-align: center;margin-top:15px;">Résutat de recherche</h1>
<div style=" text-align: center;margin-top:70px;">
<span style="font-weight:500; color:red; font-size:1.25rem;"><?=$message?></span>

<!-- <?php if(isset($results)): ?>
    <div class="table-responsive" >
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th scope="col" style="text-align: center; width:200px;">Image</th>
                    <th scope="col" style="text-align: center; width:800px;">Titre</th>
                    <th scope="col" style="text-align: center; width:200px;">Gestion</th>
                </tr>
            </thead>
            <tbody>
    
        <?php foreach($results as $result): ?>
            <tr>
                <th scope="row"><img style="height:150px; width:100px; padding:10px;" src="images/<?=$result['bookImage']?>"></th>
                <th style="vertical-align:middle;"><span style="font-size:1.25rem;"><?=$result['titre']?></span>
                <div style="width:800px; text-align:left; font-weight:400; padding:10px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?=$result['resume']?></div></th>
                <th style="text-align: center; vertical-align:middle;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl<?=$result['idBook']?>">Détail</button>
<br><br>
                <?php if($connect == true): ?>
                    <a href="index.php?entite=panier&action=add" class="btn btn-info"><i class="fas fa-shopping-bag"></i></a>
                <?php endif; ?>
                
                <div  class="modal fade bd-example-modal-xl<?=$result['idBook']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div  class="modal-dialog modal-xl">
          <div  class="modal-content"><br><br>
          <div class="table-responsive-md">
            <h3 style="text-align:center;">Fiche détail d'ouvrage</h3>
            <br><br>
	            <table style="background-color:rgba(235,104,100,0.3) ;" class="table table-bordered ">
		            <tr>
                        <td rowspan="6" style="width:300px"><img style="height: 300px; width:200px;" src="images/<?=$result['bookImage']?>"></td>
                        <th colspan="2" class="titre" >Titre :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['titre']?></span></th>
		            </tr>
		            <tr>
			            <th>Auteur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['auteur']?></span></th>
                        <?php if($result['traducteur'] !== ''): ?>
                          <th>Traducteur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['traducteur']?></span></th> 
                        <?php else: ?>
                          <th></th>
                        <?php endif ?>
		            </tr>
                    <tr>
                        <th>Editeur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['editeur']?>,&nbsp;&nbsp;<?=$result['year']?></span></th>
                        <th>Format :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['format']?></span></th>
                    </tr>
                    <tr>
                        <th>ISBN :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['isbn']?></span></th>
                        <th>Langue :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['langue']?></span></th>
                    </tr>
                    <tr>
                        <th>Theme :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['theme']?></span></th>
                      <?php if($result['langue_orig'] !== ''): ?>
                        <th>Langue originale :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result['langue_orig']?></span></th>
                      <?php else: ?>
                          <th></th>
                      <?php endif ?>
                    </tr>
                    <tr>
                        <th colspan="2" id="sta">Résumé :&nbsp;&nbsp;&nbsp;<br><span style="font-weight:400"><?=$result['resume']?></span></th>
                    </tr>
                </table>
          </div>
            </div>
        </div>
      </div>
  </th>

            </tr>
            
        <?php endforeach; ?>
    <?php else: ?>
        
    <?php endif ?>
            </tbody>
        </table>
    </div> -->
</div>
<br><br><br><br><br>
</main>