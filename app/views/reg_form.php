<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_user.php" method="POST">
       <h2 class="display-4 text-center mb-4">Register</h2>
        <div class="form-group">
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password">
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="image-container d-flex justify-content-center">
            <img class="" src="../../pic/register.png" alt="login-picture">
      </div>
    </div>
  </div>
</div>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>



