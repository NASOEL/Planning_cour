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
               <center> <h6 class="m-0 font-weight-bold text-primary">Bienvenue dans l'espace admin</h6></center>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

  <div class="card shadow mb-4">
    <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste des professeurs</h6>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users  as $user): ?>
                            <tr>
                                <td><?= $user->prenom ?></td>
                                <td><?= $user->nom ?></td>
                                <td><?= $user->matricule ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->telephone ?></td>
                                <td>
                                    <a href="views/confirmation-view.php?id_users=<?= $user->id_users ?>" class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-user-edit"></i>
                                        </span>
                                    </a>
                                    <a href="professeur.php?id_users=<?= $user->id_users ?>" class="btn btn-danger btn-icon-split btn-sm" id="delete">
                                        <span class="icon text-white-50" >
                                        <i class="fas fa-trash" ></i>
                                        <input type="hidden" value="delete" >
                                        </span>
                                    </a>
                                  </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                </table>
            
        </div>
    </div>
</div>





<?php include('includes/_footer.php'); ?>