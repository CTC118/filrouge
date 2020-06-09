<main>
<a id="uptoTop_book" href="#back_top" class="btn btn-secondary"><i class="fas fa-angle-up"></i></a>
<?php if(!empty($categ)): ?>
  <h2 style="text-align: center; margin-top:15px;">Liste de la catégorie <?=$categ?> </h2><hr>
<?php elseif(!empty($results)): ?>
  <h2 style="text-align: center;margin-top:15px;">Résutat de recherche</h2><hr>
<?php endif; ?>
<div id="msg" style="float:right">Livre ajouté au panier</div>
<div style="padding:30px; margin:0px 20px;">

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
  <?php if(!empty(isset($categ))): ?>
    <?php foreach($books as $book): ?>
        
      <tr >
            <th scope="row" style="text-align:center"><img style="height:150px; width:100px; padding:10px;" src="images/<?=$book->getBookImage()?>"></th>
            <th style="vertical-align:middle;"><span style="font-size:1.25rem;"><?=$book->getTitre()?></span><br><br>
            <div style="width:800px; text-align:left; font-weight:400; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?=$book->getResume()?></div></th>
            <th style="text-align: center; vertical-align:middle;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl<?=$book->getIdBook()?>">Détail</button>
<br><br>

<?php if($connect): ?>
  <a type="button"  onclick="requete(this)" data-id="<?=$book->getIdBook()?>" class="btn btn-info"><i class="fas fa-shopping-bag"></i></a>
    <!-- <button type="button" href="index.php?entite=panier&action=add&id=<?=$book->getIdBook()?>" class="btn btn-info"  onclick="requete(this)" data-id="<?=$book->getIdBook()?>"></button> -->
<?php endif; ?>      

      <div  class="modal fade bd-example-modal-xl<?=$book->getIdBook()?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div  class="modal-dialog modal-xl">
          <div  class="modal-content"><br><br>
          <div class="table-responsive-md">
            <h3 style="text-align:center;">Fiche détail d'ouvrage</h3>
            <br><br>
	            <table style="background-color:rgba(235,104,100,0.3) ; text-align:left" class="table table-bordered ">
		            <tr>
                        <td rowspan="6" style="width:300px; text-align:center; vertical-align:middle;"><img style="height: 300px; width:200px;" src="images/<?=$book->getBookImage()?>"></td>
                        <th colspan="2" class="titre" >Titre :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getTitre()?></span></th>
		            </tr>
		            <tr>
			            <th>Auteur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getAuteur()?></span></th>
                        <?php if($book->getTraducteur() !== ''): ?>
                          <th>Traducteur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getTraducteur()?></span></th> 
                        <?php else: ?>
                          <th></th>
                        <?php endif ?>
		            </tr>
                    <tr>
                        <th>Editeur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getEditeur()?>,&nbsp;&nbsp;<?=$book->getYear()?></span></th>
                        <th>Format :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getFormat()?></span></th>
                    </tr>
                    <tr>
                        <th>ISBN :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getIsbn()?></span></th>
                        <th>Langue :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getLangue()?></span></th>
                    </tr>
                    <tr>
                        <th>Theme :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getTheme()?></span></th>
                      <?php if($book->getLangue_orig() !== ''): ?>
                        <th>Langue originale :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$book->getLangue_orig()?></span></th>
                      <?php else: ?>
                          <th></th>
                      <?php endif ?>
                    </tr>
                    <tr>
                        <th colspan="2" id="sta">Résumé :&nbsp;&nbsp;&nbsp;<br><span style="font-weight:400"><?=$book->getResume()?></span></th>
                    </tr>
                </table>
          </div>
            </div>
        </div>
      </div>
  </th>
</tr>

<?php endforeach  ?>
<?php elseif(!empty(isset($results))): ?>
  <?php foreach($results as $result): ?>
            <tr>
                <th scope="row" style="text-align: center;"><img style="height:150px; width:100px; padding:10px;" src="images/<?=$result->getBookImage()?>"></th>
                <th style="vertical-align:middle;"><span style="font-size:1.25rem;"><?=$result->getTitre()?></span><br><br>
                <div style="width:800px; text-align:left; font-weight:400;overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?=$result->getResume()?></div></th>
                <th style="text-align: center; vertical-align:middle;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl<?=$result->getIdBook()?>">Détail</button>
<br><br>
                <?php if($connect == true): ?>
                  <a type="button"  onclick="requete(this)" data-id="<?=$result->getIdBook()?>" class="btn btn-info"><i class="fas fa-shopping-bag"></i></a>
                    <!-- <a href="index.php?entite=panier&action=add" class="btn btn-info"><i class="fas fa-shopping-bag"></i></a> -->
                <?php endif; ?>
                
                <div  class="modal fade bd-example-modal-xl<?=$result->getIdBook()?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div  class="modal-dialog modal-xl">
          <div  class="modal-content"><br><br>
          <div class="table-responsive-md">
            <h3 style="text-align:center;">Fiche détail d'ouvrage</h3>
            <br><br>
	            <table style="background-color:rgba(235,104,100,0.3) ;text-align: left; " class="table table-bordered ">
		            <tr>
                        <td rowspan="6" style="width:300px; text-align: center; vertical-align:middle;"><img style="height: 300px; width:200px;" src="images/<?=$result->getBookImage()?>"></td>
                        <th colspan="2" class="titre" >Titre :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getTitre()?></span></th>
		            </tr>
		            <tr>
			            <th>Auteur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getAuteur()?></span></th>
                        <?php if($result->getTraducteur() !== ''): ?>
                          <th>Traducteur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getTraducteur()?></span></th> 
                        <?php else: ?>
                          <th></th>
                        <?php endif ?>
		            </tr>
                    <tr>
                        <th>Editeur :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getEditeur()?>,&nbsp;&nbsp;<?=$result->getYear()?></span></th>
                        <th>Format :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getFormat()?></span></th>
                    </tr>
                    <tr>
                        <th>ISBN :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getIsbn()?></span></th>
                        <th>Langue :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getLangue()?></span></th>
                    </tr>
                    <tr>
                        <th>Theme :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getTheme()?></span></th>
                      <?php if($result->getLangue_orig() !== ''): ?>
                        <th>Langue originale :&nbsp;&nbsp;&nbsp;<span style="font-weight:400"><?=$result->getLangue_orig()?></span></th>
                      <?php else: ?>
                          <th></th>
                      <?php endif ?>
                    </tr>
                    <tr>
                        <th colspan="2" id="sta">Résumé :&nbsp;&nbsp;&nbsp;<br><span style="font-weight:400"><?=$result->getResume()?></span></th>
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
      <span style="font-size:1.25rem; color: red; font-weight: bold;"><?=$message?></span>
<?php endif; ?>
  </tbody>
</table>
</div>


</div>
<script>
  
// 注意!括弧裡的參數若為button則彈出視窗無作用
        function requete(a){
            idBook = a.dataset.id;
            //alert(idBook);
            url = 'index.php?entite=panier&action=add&idBook='+idBook;
            //alert(url);
            $.ajax(url).done(function (){
                $("#msg").show(1000).delay(2000).hide(1000);
                //alert('ok');
            }).fail(function (jqXHR, textStatus){
                alert("Erreur " + textStatus);
            });
        }
        
        $(document).ready(function (){
            $("#msg").hide();
        });
    </script>
    <br><br><br>
</main>