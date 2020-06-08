<main class="container">
<div id="print_area">
    <br>
    <h2 style="text-align: center;">Liste de livres</h2>
    <button onclick="print();" type="button" class="btn btn-info float-right">IMPRIMER&nbsp;&nbsp;&nbsp;<i class="fas fa-print"></i></button>
    <br><br>
    <br>
    <table class="table table-hover table-bordered">
        <thead>
            <tr class="table-primary">
                <th scope="col" style="width:50px;text-align: center;">IdBook</th>
                <th scope="col" style="width:400px;text-align: center;">TITRE</th>
                <th scope="col" style="width:170px;text-align: center;">ISBN</th>
                <th scope="col" style="width:80px;"><a href="index.php?entite=panier&action=vider" style="text-decoration: none;">Vider panier</a></th>
                <!-- <th scope="col">QUANTITE TOTAL</th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach($panier as $idBook => $article): ?>
            <tr>
                <td scope="row" style="text-align: center;"><?= $idBook?></td>
                <td style="padding-left:20px;"><?= $article->getLivre()->getTitre()?></td>
                <td style="padding-left:20px;"><?= $article->getLivre()->getIsbn()?></td>
                <td style="text-align: center;"><a type="button"  onclick="requete(this)" data-id="<?=$idBook?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                <!--  <button onclick="requete(this)" data-id="<?=$idBook?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>-->
            </tr>
            <?php endforeach; ?>
        </tbody>
        <!-- <tfoot>
            <tr class="table-secondary">
                <td colspan="3" style="text-align: right">QUANTITE TOTAL</td>
                <td><?=$montant?></td>
            </tr>
        </tfoot> -->
        </table> 
    <br>
    
</div>



<script type="text/javascript">
    //print function

    function print() { 
        document.body.innerHTML=document.getElementById('print_area').innerHTML; 
        window.print(); 
        // Window.close();
    } 


    function requete(a){
            idBook = a.dataset.id;
            url = 'index.php?entite=panier&action=del_book&idBook='+idBook;
            $.ajax(url).done(function (){
                window.location.href = 'index.php?entite=panier&action=show_panier';
            }).fail(function (jqXHR, textStatus){
                alert("Erreur " + textStatus);
            });
        }
        


    </script>
    <br><br><br><br><br>
</main>
