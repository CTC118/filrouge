<main style="padding:30px;">
<div id="print_area">
    <h2 style="text-align:center;">Liste de livres</h2><hr>
    <button onclick="print();" type="button" class="btn btn-info float-right">IMPRIMER&nbsp;&nbsp;&nbsp;<i class="fas fa-print"></i></button>
    <br><br>
    <br>
    <table class="table table-hover table-bordered" style="text-align: center;vertical-align: middle;">
        <thead>
            <tr class="table-primary">
                <th scope="col" style="width:50px;">IdBook</th>
                <th scope="col" style="width:400px;">TITRE</th>
                <th scope="col" style="width:170px;">ISBN</th>
                <th scope="col" style="width:80px;"><a href="index.php?entite=panier&action=vider" style="text-decoration: none;">Vider panier</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($panier as $idBook => $article): ?>
            <tr>
                <td scope="row" style="text-align: center;"><?= $idBook?></td>
                <td style="padding-left:20px;"><?= $article->getLivre()->getTitre()?></td>
                <td style="padding-left:20px;"><?= $article->getLivre()->getIsbn()?></td>
                <td style="text-align: center;"><a type="button"  onclick="requete(this)" data-id="<?=$idBook?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        
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
