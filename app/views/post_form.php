<?php include VIEW_ROOT . '/templates/header.php'; ?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_post.php" method="POST">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="post_title">
        </div>
        <div class="form-group">
          <label for="exampleTextarea">Blog content</label>
          <textarea class="form-control" rows="5" name="post_content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php include VIEW_ROOT . '/templates/footer.php'; ?>
