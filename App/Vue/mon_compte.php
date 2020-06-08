<main style="padding:30px;">
<h1 style="text-align:center;">Mon compte</h1>
<a type="button" class="btn btn-info" href="index.php?entite=user&action=list_emp&ncard=<?=$user['ncard'];?>" style="float:right">Liste d'inprunt</a>
<br><hr>
<div class="form-group col-md-8" style="padding: 20px; margin:auto;">
    <form method="post" action="index.php?entite=user&action=edit_mel_fon">
   
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="psw_ncard">°N carte</label>
                <input id="ncard" type="text" class="form-control" name="ncard" value="<?=$user['ncard']?>" readonly>
                <!-- <input id="psw" type="hidden" class="form-control" name="psw_ncard" value=""> -->
                <small>(C'est aussi votre mot de passe!)</small>
            </div>
            <div class="form-group col-md-4">
                <label for="nom" value="">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?=$nom?>" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="<?=$user['prenom']?>" readonly>
            </div>
            <div class="form-group col-md-5">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?=$user['email']?>">
            </div>
            <div class="form-group col-md-5">
                <label for="phone">Numéro de téléphone</label>
                <input type="number" class="form-control" name="phone" value="<?=$user['phone']?>">
            </div>
            <div class="form-group col-md-2" style="text-align:center; position:relative; top:8px;"><br>
            <button type="submit" class="btn btn-danger" >Modifier</button>
        </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="cp">Code Postal</label>
                <input type="number" class="form-control" name="cp" value="<?=$user['cp']?>" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" name="ville" value="<?=$user['ville']?>" readonly>
            </div>
            <div class="form-group col-md-1">
            </div>
            <div class="form-group col-md-5">
                <label for="status">Status</label><br>
                <input type="text" class="form-control" name="status" value="<?=$status?>" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" name="adresse" value="<?=$user['adresse']?>" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="debut_Date">Date d'inscription</label>
                <input type="date" class="form-control" name="debut_Date" value="<?=$user['debut_Date']?>" readonly>
            </div>
            <div class="form-group col-md-4">
                <label for="fin_Date">Date d'expiration</label>
                <input type="date" class="form-control" name="fin_Date" value="<?=$user['fin_Date']?>" readonly>
            </div>
        </div>
        <br>
        
<br><br>
    </form>
</div>


</main>