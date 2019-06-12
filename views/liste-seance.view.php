<?php
include('includes/_header.php');
include('includes/_menu.php');
?>

<!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des séances</h6>
                <form action="liste-seance.php" method="post">
                    <div class="form-group">
                        <select name="matiere" id="" class="form-control" onchange="">
                            <?php foreach ($matieres as $id): ?>
                                <option></option>
                                <option value="<?= $id->id_matiere ?>"><?php echo($id->lib_matiere); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn-user" value="voir">
                </form> 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <?php if($seances != NULL ): ?>
              <div style="display:flex;">
                    <h5>Filiere:</h5> &nbsp;
                    <?php foreach ($filieres as $seance): ?>
                        <span><?= $seance->code_filiere ?></span>
                    <?php endforeach; ?>
                </div>
                <div style="display:flex;">
                    <h5>Niveau:</h5> &nbsp;
                    <?php foreach ($filieres as $seance): ?>
                        <span><?= $seance->niveau ?></span>
                    <?php endforeach; ?>
                </div>
                <div style="display:float:left;ex;">
                    <h5>Groupe:</h5> &nbsp;
                    <?php foreach ($filieres as $seance): ?>
                        <span><?= $seance->groupe ?></span>
                    <?php endforeach; ?>
                </div>
                <div>
                    <td>
                        <a href="liste-seance.views.php?id_seance=<?= $seance->id_seance ?>" class="btn btn-danger btn-icon-split btn-sm" id="delete">
                            <span class="icon text-white-50" >
                            <i class="fas fa-trash" ></i>
                            <input type="hidden" value="delete" >
                            </span>
                        </a>
                    </td>
                </div>
                <?php endif; ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <?php if (isset($_POST['matiere'])): ?>
                        <tr>
                            <th>Num-séance</th>
                            <?php foreach ($seances  as $seance): ?>
                            <th> séance <?= $seance->num_seance ?></th>
                            <?php endforeach; ?>
                        </tr>
                        <tr>
                            <th>Duree-séance</th>
                            <?php foreach ($seances  as $seance): ?>
                            <td><?= $seance->dure_seance ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <tr>
                            <th>Objectifs-Pedagogique</th>
                            <?php foreach ($seances  as $seance): ?>
                            <td><?= $seance->objectif_pedagogique ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <tr>
                            <th>Video-projection</th>
                            <?php foreach ($seances  as $seance): ?>
                            <td><?= $seance->video_projection ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <tr>
                            <th>Acces-Internet</th>
                            <?php foreach ($seances  as $seance): ?>
                            <td><?= $seance->acces_internet ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <tr>
                            <th>Activité</th>
                            <?php foreach ($seances  as $seance): ?>
                            <td><?= $seance->activite ?></td>
                            <?php endforeach; ?>
                        </tr>
                         <?php endif; ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->







<?php include('includes/_footer.php'); ?>