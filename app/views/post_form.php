<?php include VIEW_ROOT . '/templates/header.php'; ?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_post.php" method="POST">
       <h1 class="display-4 text-center mb-4">Write a new blog post</h1>
        <div class="form-group">
          <input type="text" class="form-control" name="post_title" placeholder="Title goes here">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="5" name="post_content" placeholder="Write whatever you like, but it has to be huggable ofcourse <3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php include VIEW_ROOT . '/templates/footer.php'; ?>
