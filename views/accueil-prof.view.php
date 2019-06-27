<?php
include('includes/_header.php');
include('includes/_menu.php');
?>


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <center> <h6 class="m-0 font-weight-bold text-primary" style="font-family:roboto;position:relative;font-size:25px">Espace professeur</h6></center>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
               
            </div>
        </div>
    </div>
    <div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">
    <small>Vos information</small>
  </h1>

  <div class="row">
    <div class="col-lg-12 col-md-4 col-sm-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"></a>
          </h4>
          <?php if ($_SESSION['user_statut'] == 2): ?>
          <p class="card-text">bonjour  Mr <?php echo($_SESSION['user_prenom'].' '.$_SESSION['user_nom']) ?>!</p>
        <p class="card-text">Address mail : <?php echo($_SESSION['user_email']) ?></p>
        <p class="card-text">Matricule : <?php echo($_SESSION['user_matricule']) ?></p>
        <p class="card-text">Nombre de Matiere : <?php echo($_SESSION['user_id']); ?></p>
        <p class="card-text">Nombre de Classe :</p>
          <?php endif?>
        </div>
      </div>
    </div>    
  <!-- /.row -->

  <!-- Pagination -->
  

</div>
<!-- /.container -->
     <!-- Pending Requests Card Example -->
           







<?php include('includes/_footer.php'); ?>