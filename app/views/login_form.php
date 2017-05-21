

<?php require VIEW_ROOT . '/templates/header.php'; ?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_loginuser.php" method="POST">
        <h1 class="display-4 mb-4 text-center">Log In</h1>
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <?php if(!empty($_POST['error'])): ?>
          <div class="alert alert-danger">
            <?php echo $_POST['error']; ?>
          </div>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="image-container d-flex justify-content-center">
            <img class="" src="../../pic/login.png" alt="login-picture">
      </div>
    </div>
  </div>
</div>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>

