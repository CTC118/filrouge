
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="padding-left:40px">
  <?php if ($vue !== 'accueil'): ?>
    <a class="navbar-brand" href="index.php" style="position:relative;top:-2px;"><i class="fas fa-home"></i>&nbsp;ACCUEIL</a>
  <?php endif; ?>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"  aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">LIVRES NUMERIQUES</a>
        <div class="dropdown-menu bg-primary" style="font-size:1.25rem;">
            <a class="dropdown-item" href="index.php?entite=book&action=list_books&categ=Romans et Fictions">Romans & Fictions</a>
            <a class="dropdown-item" href="index.php?entite=book&action=list_books&categ=Arts et Culture">Arts & Culture</a>
            <a class="dropdown-item" href="index.php?entite=book&action=list_books&categ=Histoire et Géographie">Histoire & Géographie</a>
            <a class="dropdown-item" href="index.php?entite=book&action=list_books&categ=Loisirs, Vie pratique et Société">Loisirs, Vie pratique & Société</a>
            <a class="dropdown-item" href="index.php?entite=book&action=list_books&categ=Sciences et Techniques">Sciences & Techniques</a>
        </div>
      </li>
      <?php if ($vue !== 'infos'): ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?entite=nav&action=info">INFOS PRATIQUES</a>
      </li><?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" href="#">AGENDA</a>
      </li>
          <div id="nav_btn_role">
              <?php if ($connect && $status == 'admin'): ?>
              <li class="nav-item" >
                <a class="nav-link" href="index.php?entite=admin&action=admin_home">ADMINISTRATEUR</a>
              </li>
              <?php elseif ($connect && $status !== 'admin'): ?>
              <li class="nav-item">
              <a class="nav-link" href="index.php?entite=user&action=compte">MON COMPTE</a>
              </li>
              <?php endif ?>
          </div>

    </ul>
    <form id="search_index1" method="post" action="index.php?entite=book&action=search" class="form-inline my-2 my-lg-0">
      <input name="search" class="form-control mr-sm-2" type="text" placeholder="Tapez un titre de livre..." >
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  </div>
</nav>
