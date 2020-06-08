<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <!-- 此為三槓漢堡圖示 -->
    <i class="fas fa-bars"></i>
    </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="index.php?entite=admin&action=admin_home">Page d'Admin</a>
        <div id="close-sidebar">
            <!-- 此為叉叉圖示 -->
          &nbsp;<i class="fas fa-times"></i>
        </div>
      </div>



    <div class="sidebar-header">
    <div class="user-pic">
        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
        alt="User picture">
    </div>
    <div class="user-info">
        <span class="user-name"><?php echo $nom; ?>
        <strong><?php echo $prenom; ?></strong>
        </span>
        <span class="user-role">Administrateur</span>
        <span class="user-status">
        <i class="fa fa-circle"></i>
        <span>Online</span>
        </span>
    </div>
    </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
        <form method="post" action="index.php?entite=admin&action=search">
          <div class="input-group">
          
            <input type="text" name="rechercher" class="form-control search-menu" style="height:2.6rem;" placeholder="chercher par ISBN...">
            <div class="input-group-append">
              <span class="input-group-text">
                <button type="submit" style="background-color:transparent; border-color:transparent;"><i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
          
          </div>
          </form>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Gestions</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fas fa-book"></i>
              <span>Ouvrages</span>
              </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="index.php?entite=admin&action=form_addbook">Ajouter des livres</a>
                </li>
                <li>
                  <a href="index.php?entite=admin&action=list_books">Liste des Ouvrages
                    </a>
                </li>
                
               <!--  <li>
                  <a href="#"></a>
                </li>
                <li>
                  <a href="#">Réservation</a>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fas fa-folder-open"></i></i>
              <span>Catégorie</span>
              </a>
              <div class="sidebar-submenu">
              <ul>
                <li><a href="index.php?entite=admin&action=form_categ">Ajouter des catégories</a></li>
                <li><a href="index.php?entite=admin&action=list_categ">Gérer des catégories</a></li>
              </ul>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fas fa-book-reader"></i>
              <span>Emprunt</span>
              </a>
              <div class="sidebar-submenu">
              <ul>
                <li><a href="index.php?entite=admin&action=form_emprunt">Nouvel Emprunt</a></li>
                <li><a href="index.php?entite=admin&action=list_emprunt">Gérer Emprunt</a></li>
                <li><a href="index.php?entite=admin&action=list_rappel">Liste de rappel</a></li>
                <li><a href="index.php?entite=admin&action=list_return">Liste de retour</a></li>
              </ul>
          <li class="sidebar-dropdown">
            <a href="#">
            <i class="fas fa-user"></i>
              <span>Utilisateur</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li><a href="index.php?entite=admin&action=form_insert">Créer un Compte</a></li>
                <li><a href="index.php?entite=admin&action=list_users">Liste d'utilisateurs</a></li>
                <li><a href="index.php?entite=admin&action=list_admin">Liste d'administrateurs</a></li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="index.php?entite=admin&action=statistique">
            <i class="fa fa-chart-line"></i>
              <span>Statistique</span>
              </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendrier</span>
            </a>
          </li>
        </ul>
        <br><br>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="index.php?entite=admin&action=admin_compte">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="index.php?entite=user&action=deconnect">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
</div>