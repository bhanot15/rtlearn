<?php require __DIR__.'/header.php'; ?>

<?php
    session_destroy();
    redirect('login.php');
?>

<?php require __DIR__.'/footer.php'; ?>