<header class="container-fluid bg-dark text-white">
    <div class="row">
        <img id="top" src="images/books.jpg">
        <img id="logo" src="images/logo_rougec.png" alt="logo">

        <div class="col-4" style="margin-top:3px;">
        <span class="badge badge-secondary"><?php echo date('d/m/Y');?>&nbsp;&nbsp;&nbsp;<?php $weekarray=array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
                echo $weekarray[date("w")]; ?></span>
        </div>
                        <!-- <div class="col-3">
                            <?php if ($connect && $status == 'admin'): ?>
                                <a class="btn btn-success float-right" href="index.php?entite=admin&action=admin_home"><i class="fas fa-users-cog">&nbsp;&nbsp;&nbsp;ADMINISTRATEUR</i></a>
                            <?php elseif ($connect && $status !== 'admin'): ?>
                                <a class="btn btn-success float-right" href="index.php?entite=user&action=compte"><i class="fas fa-user-alt"></i>&nbsp;&nbsp;&nbsp;Mon Compte</a>
                            <?php endif ?>
                        </div> -->
        <div class="col-5" style="margin-top:5px;">
        <?php if ($connect): ?>
        <span class="float-right">[ <?= $status ?> ] Bonjour, <b><?= $prenom ?>&nbsp;&nbsp;<?= $nom ?></b>&nbsp;&nbsp;&nbsp;
        <?php endif ?>
        </div>
        <div class="col-3" >
            <?php if (!$connect): ?>
               <a href="index.php?entite=user&action=form_connect" class="btn btn-secondary btn-sm float-right">CONNEXION&nbsp;&nbsp;&nbsp;<i class="fas fa-user-alt "></i></a>
            <?php else: ?>
                <a href="index.php?entite=panier&action=show_panier" class="btn btn-info btn-sm" style="position:relative; left:60px;">PANIER&nbsp;&nbsp;&nbsp;<i class="fas fa-shopping-bag fa-2x" ></i></a>
                <a href="index.php?entite=user&action=deconnect" class="btn btn-secondary btn-sm float-right">DÉCONNEXION&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-out-alt fa-2x"></i></a></span>
            <?php endif ?>

            <!-- style="color:#369;" -->

        </div>
    </div>
</header>
