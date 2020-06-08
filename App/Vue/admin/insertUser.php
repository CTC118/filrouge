<!-- 創立新帳戶表格 -->
<h2 id="newUser" >Créer un compte</h2>
      <hr>
      <span><?= $message; ?></span>
      <div class="row">
        <div class="form-group col-md-12">
          <form  method="post" action="index.php?entite=admin&action=insert_user">
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="sexe">Sexe</label>
                <select id="sexe" class="form-control" name="sexe">
                  <option value="F" >Mme</option>
                  <option value="M" >M.</option>
                </select>
              </div>
              <div class="form-group col-md-5">
                <label for="lastname" value="" >Nom</label>
                <input id="lastname" type="text" class="form-control" name="nom" value="" oninput="new_psw()" require>
              </div>
              <div class="form-group col-md-5">
                <label for="firstname">Prénom</label>
                <input id="firstname" type="text" class="form-control" name="prenom" value="" oninput="new_psw()" require>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com" require>
              </div>
              <div class="form-group col-md-6">
                <label for="phone">Numéro de téléphone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="01 23 45 67 89" require>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="cp">Code Postal</label>
                <input type="number" class="form-control" id="cp" name="cp" require>
              </div>
              <div class="form-group col-md-4">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" require>
              </div>
            </div>

            <div class="form-group">
              <label for="address">Adresse</label>
              <input type="text" class="form-control" id="address" name="adresse" placeholder="1 rue du Paris" require>
            </div>

            <h5>Status</h5>
            <div class="form-check">
              <input onchange="montrer(this)" id="admin" class="form-check-input" type="radio" name="status"value="admin">
              <label class="form-check-label" for="admin">administrateur</label>
            </div>
            <div class="form-check">
              <input onchange="montrer(this)" id="prof" class="form-check-input" type="radio" name="status"value="professeur">
              <label class="form-check-label" for="prof">professeur</label>
            </div>
            <div class="form-check">
              <input onchange="montrer(this)" id="etud" class="form-check-input" type="radio" name="status"value="etudiant">
              <label class="form-check-label" for="etud">étudiant</label>
            </div>
            <hr>
            <h4>Informations de la carte</h4>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="psw">Numéro de carte</label>
                <small>(C'est le mot de passe d'utilisateur!)</small>
                <input id="psw" type="text" class="form-control" name="psw_ncard" value="">
                <input id="ncard" type="hidden" class="form-control" name="ncard" value="">
              </div>
            </div>
            <div class="form-row">
              
              <div class="form-group col-md-4">
                <label for="debut_Date">Date d'inscription</label>
                <input id="debut_date" type="date" class="form-control" name="debut_Date" >
                <!-- value="<?= isset($_POST['debut_Date']) ? $_POST['debut_Date'] : '' ; ?>" -->
              </div>
              <div id="hide_div" class="form-group col-md-4">
                <label for="fin_Date">Date d'expiration</label>
                <input id="fin_date" type="date" class="form-control" name="fin_Date" value="">
                <!-- value="<?= isset($_POST['debut_Date']) ? $_POST['fin_Date'] = date("Y-m-d", time() + (365 * 24 * 60 * 60)) : '' ; ?>" -->
              </div>
              
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
          </form>
        </div>
      </div>
      
      <script type="text/javascript">
        
        function new_psw(){
          var nom = document.getElementById("lastname").value; 
          var prenom = document.getElementById("firstname").value;
          var pik_nom = nom.substr(0, 3);
          var pik_pre = prenom.substr(0, 3);
          var ran_num = Math.ceil( Math.random()*1000);
          document.getElementById("psw").value = pik_nom + pik_pre + ran_num;
          document.getElementById("ncard").value = pik_nom + pik_pre + ran_num;
        }

        // function montrer(radio){
        //     switch (radio.id){
        //       case 'admin':
        //         hide_div.style.display = 'none';
        //         document.getElementById("fin_date").value = NULL;
        //         //fin_date.value = null;
        //         break;
        //       case 'prof':
        //         hide_div.style.display = 'block';
        //         break;
        //       case 'etud':
        //         hide_div.style.display = 'block';
        //         break;
        //     }
        // }

      </script>
      <!-- 
        function year_later(this){
          var ayear = new Date(this);
          var new_year = ayear.setFullYear(ayear.getFullYear()+1);
          var new_month = ayear.setFullMonth(ayear.getFullMonth());
          var new_date = ayear.setDate(ayear.getDate()-1);
          document.getElementById("fin_date").value = new_year + "-" + new_month + "-" + new_date;
        }
       -->