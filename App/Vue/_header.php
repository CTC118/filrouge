<header  id="back_top"  class="container-fluid bg-dark text-white">
    <div class="row">
        <img id="top" src="images/books.jpg">
        <img id="logo" src="images/logo_rougec.png" alt="logo">

        <div id="index_date" class="col-4" style="margin-top:3px;">
        <span class="badge badge-secondary"><?php echo date('d/m/Y');?>&nbsp;&nbsp;&nbsp;<?php $weekarray=array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
                echo $weekarray[date("w")]; ?></span>
        </div>

                <div>
                            <?php if ($connect && $status == 'admin'): ?>
                                <!-- <a id="header_btn_role"><button href="index.php?entite=admin&action=admin_home"><i class="fas fa-users-cog fa-2x"></i></button></a> -->
                                <a id="header_btn_role" class="btn btn-success" href="index.php?entite=admin&action=admin_home"><i id="header_btn_role_pic" class="fas fa-users-cog fa-2x"></i></a>
                            <?php elseif ($connect && $status !== 'admin'): ?>
                                <a id="header_btn_role2" class="btn btn-success" href="index.php?entite=user&action=compte"><i class="fas fa-user-alt"></i>&nbsp;Compte</a>
                            <?php endif ?>
                </div>

        <div id="header_salut" class="col-5" style="margin-top:5px;">
        <?php if ($connect): ?>
        <span class="float-right">[ <?= $status ?> ] Bonjour, <b><?= $prenom ?>&nbsp;&nbsp;<?= $nom ?></b>&nbsp;&nbsp;&nbsp;
        <?php endif ?>
        </div>
        <div id="header_btn_div" class="col-3" >
            <?php if (!$connect): ?>
               <a id="header_btn1" href="index.php?entite=user&action=form_connect" class="btn btn-secondary btn-sm float-right"><span>CONNEXION&nbsp;&nbsp;&nbsp;</span><i id="header_btn1_small" class="fas fa-user-alt "></i><i id="header_btn1_big" class="fas fa-user-alt fa-2x"></i></a>
            <?php else: ?>
                <a id="header_btn2" href="index.php?entite=panier&action=show_panier" class="btn btn-info btn-sm" style="position:relative; left:60px;"><span id="header_btn_tex" >PANIER&nbsp;&nbsp;&nbsp;</span> <i  class="fas fa-shopping-bag fa-2x" ></i></a>
                <a id="header_btn3" href="index.php?entite=user&action=deconnect" class="btn btn-secondary btn-sm float-right"><span id="header_btn_tex">DÉCONNEXION&nbsp;&nbsp;&nbsp;</span> <i class="fas fa-sign-out-alt fa-2x"></i></a></span>
            <?php endif ?>

            <!-- style="color:#369;" -->

        </div>
    </div>
</header>
