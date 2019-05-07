<?php
include('includes/_header.php');
include('includes/_menu.php');
?>





    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <!-- <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nombre de professeur</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($users) ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
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
                                    <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-user-edit"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-trash"></i>
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

    </div>
    <!-- /.container-fluid -->







<?php include('includes/_footer.php'); ?>