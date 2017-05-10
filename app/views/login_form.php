<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form class="mt-5" action="<?php echo BASE_URL; ?>/app/add_loginuser.php" method="POST">
       <div class="image-container">
            <!--<img class="" src="../../pic/login.png" alt="login-picture">-->
        </div>
        <h2 class="mb-3">Login</h2>
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
    </div>
  </div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
