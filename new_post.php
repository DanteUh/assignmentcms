<?php session_start();
  var_dump($_SESSION['user_id']);
?>
<?php include 'app/database.php'; ?>


<?php include VIEW_ROOT . '/post_form.php'; ?>
