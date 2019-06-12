<?php
session_start();
include('includes/_header.php');
include('includes/_menu.php');
?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page introuvable</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="../<?php echo $_SERVER['REQUEST_URI']; ?>">&larr; retour</a>
    </div>

</div>
<!-- /.container-fluid -->



<?php include('includes/_footer.php'); ?>
