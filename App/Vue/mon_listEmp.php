<main >
<h2 style="text-align: center; margin-top:15px;">Liste d'inprunt</h2><hr>
    
<div style="padding:30px; margin:0px 20px;">
  <div class="table-responsive" >
    <table class="table table-hover" style="margin-top:15px;text-align:center;">
            <thead>
                <tr class="table-primary">
                    <th>#</th>
                    <th scope="col">Titre d'ouvrage</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Date emprunt</th>
                    <th scope="col">Date retour</th>
                    <th scope="col">Amende</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; foreach ($listEmp as $emp): $i++;?>
                <tr>
                    <th id="num"><?=$i?></th>
                    <th scope="row"><?=$emp->titre?></th>
                    <td><?=$emp->isbn?></td>
                    <td><?=$emp->Emp_Date?></td>
                    <td><?=$emp->Retour_Date?></td>
                    <td><?=$emp->amende?>&nbsp;&nbsp;€</td>
                </tr>
                <?php endforeach ?>
            </tbody>
    </table>
    </div>
    </div>
    <!-- <div class="form-row" style="padding:10px 50px;margin-top:80px;">
    <h4 style="margin:auto;">Liste de réservation</h4>
    <table class="table table-hover" style="margin-top:15px;">
            <thead>
                <tr class="table-active">
                <th scope="col">Titre</th>
                <th scope="col">Date prévue</th>
                </tr>
            </thead>
            <tbody> -->
<!-- 這邊加入foreach的已預約的書資料 -->
                <!-- <tr>
                <th scope="row">XXXXXX</th>
                <td>XXXXXX</td>
                </tr>
            </tbody>
    </table> --><br><br><br>
    
    <!-- <script>
        $(document).ready(function() {
           $("#num").html(function() {
            for(let i=1; i<=8; i++){
                return i;
            }
           });
        });
    </script> -->
</main>