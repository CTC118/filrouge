<main class="container custom-container-width">
    <div class="row">
    <div class="col" style="padding:20px;">
    <h2>Connectez vous</h2><br>
    <span><?= $message ?></span>
    <form method="post" action="index.php?entite=user&action=verif_connect">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="idLogin" style="font-weight: 500; font-size:1.25rem;">Votre nom : </label>
                <input type="text" class="form-control" id="idLogin" name="nom" >
            </div>
        </div>
        <div class="row">
        <div class="form-group col-md-4">
            <label for="idPsw" style="font-weight: 500; font-size:1.25rem;">Numéro ID : </label>
            <input type="password" class="form-control" id="idPsw" name="psw_ncard" >
            <i id="open" class="fas fa-eye fa-2x" style="position:relative; top:-35px; left:360px;"></i>
            
            <i id="close" class="fas fa-eye-slash fa-2x" style="display:none; position:relative; top:-35px; left:360px;" ></i>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
    </div>
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