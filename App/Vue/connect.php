<main >

<div >
    <div style="text-align:center;">
        <h2 style="width:400px;margin:10px auto;">Connectez-vous</h2><hr>
        <span style="width:400px;margin:20px auto;color:red;font-weight: bold;"><?= $message ?></span>
    </div>
    <form id="form_connect" method="post" action="index.php?entite=user&action=verif_connect" style="background-color: #EB6864; border-radius: 5px;">
        <div id="form_div" class="form-group">
            <div class="col-md-11">
                <label for="idLogin" style="font-weight: bold">Tapez votre nom : </label>
                <input type="text" class="form-control" id="idLogin" name="nom" >
            </div><br>
            <div class="col-md-11">
                <label for="idPsw" style="font-weight: bold">Numéro ID : </label>
                <input type="password" class="form-control" id="idPsw" name="psw_ncard">
            </div>
            <i id="open" class="fas fa-eye fa-2x" ></i>
            <i id="close" class="fas fa-eye-slash fa-2x" style="display:none; " ></i>
            <div style="text-align:center;">
                <button type="submit" class="btn btn-secondary" >Valider</button>
            </div>
        </div>
    </form>
</div>
    
</main>
<br>
<script>
    $(document).ready(function(){
        
        $("#open").click(function(){
            $("#idPsw").attr("type","text");
            $(this).hide();
            $("#close").show();
        });

        $("#close").click(function(){
            $("#idPsw").attr("type","password");
            $(this).hide();
            $("#open").show();
        });

    });
</script>