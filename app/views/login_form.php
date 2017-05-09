<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_loginuser.php" method="POST">
        <div class="form-group">
          <label for="username">Username: </label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password: </label>
          <input type="password" class="form-control" name="password">
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
