<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <!-- logo estel -->
            <img src="assets/img/logo.png" alt=""  width="50" height="30">
            </div>
            <div class="sidebar-brand-text mx-3">GROUPE_ESTEL</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
<!-- redirection des utilisateurs avec verification statut -->
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <?php if ($_SESSION['user_statut'] == 1): ?>

            <?php elseif ($_SESSION['user_statut'] == 2): ?>
                <a class="nav-link" href="accueil-prof.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau</span>
                </a>
            <?php endif; ?>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <?php if ($_SESSION['user_statut'] == 1): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Utilisateur</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="inscription.php">Ajouter</a>
                        <a class="collapse-item" href="professeur.php">Lister tous les professeurs</a>
                        <a class="collapse-item" href="ajouter-matiere.php">Ajouter matiere</a>
                          <a class="collapse-item" href="ajouter-filiere.php">Ajouter filiere</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Séance</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"></h6>
                        <a class="collapse-item" href="#">Liste</a>
                    </div>
                </div>
            </li>
        <?php elseif ($_SESSION['user_statut'] == 2): ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Séance</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="mat-fil.php">Ajouter</a>
                        <!-- <a class="collapse-item" href="liste-seance-prof.php">Lister tous</a> -->
                        <a class="collapse-item" href="liste-seance.php">Mes séances</a>
                    </div>
                </div>
            </li>

        <?php endif; ?>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                -->
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo($_SESSION['user_prenom'].' '.$_SESSION['user_nom']) ?></span>
                            <img class="img-profile rounded-circle" src="assets/img/avatar.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" href="<?php echo($_SESSION['user_prenom'].' '.$_SESSION['user_nom']) ?>
                                <?php echo($_SESSION['user_prenom'].' '.$_SESSION['user_nom']) ?>"></i>
                                Profile 
                            </a>
                            <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a> -->
                            <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <!-- <a class="dropdown-item" name="deco" href="logout.php" data-toggle="modal" data-target="logout.php">
                                
                                    <a href="logout.php">deconnexion</a>
                                
                                
                                ?
                                se deconnecter
                            </a> -->
                            <?php if(isset($_SESSION['id_users']))?>
                                
                            <?php echo '<a href="includes/logout.php">deconecter</a>'
                           ?>
                         </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->



