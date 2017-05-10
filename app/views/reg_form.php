<?php require VIEW_ROOT . '/templates/header.php'; ?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_user.php" method="POST">
        <div class="form-group">
          <label for="username">Username: </label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password: </label>
          <input type="text" class="form-control" name="password">
        </div>
        <!--Error meddelande om fel eller ingen input från användaren-->
        <?php if(!empty($_POST['msg_adduser'])): ?>
          <div class="alert alert-danger">
            <?php echo $_POST['msg_adduser']; ?></br>
          </div>
          <!--Meddelande om användaren är registrerad-->
          <?php elseif(!empty($_POST['msg_user_reg'])): ?>
          <div class="alert alert-success">
            <?php echo $_POST['msg_user_reg']; ?></br>
          </div>
        <?php endif; ?>

        <button type="submit" class="btn btn-primary">OK</button>
      </form>
    </div>
  </div>
</div>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>
