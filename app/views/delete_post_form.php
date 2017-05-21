<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/delete_post.php" method="POST">
        <div class="form-group">
          <p>Do you really want to delete this post? - <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $post['post_id']; ?>"><?php echo $post['post_title']; ?></a></p>
        </div>
        <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
        <button type="submit" name="submit" class="btn btn-danger">Yes</button>
        <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $post['post_id']; ?>" class="btn btn-primary">Cancel</a>
        <?php if(isset($_POST['submit'])): ?>
          <div class="alert alert-success">
              <?php echo $_SESSION['success']; ?>
          </div>
        <?php endif; ?>
      </form>
    </div>
  </div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
