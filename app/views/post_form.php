<?php include VIEW_ROOT . '/templates/header.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_post.php" method="POST" enctype="multipart/form-data">
       <h1 class="display-4 text-center mb-4">Write a new blog post</h1>
        <div class="form-group">
          <input type="text" class="form-control" name="post_title" placeholder="Title here">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="5" name="post_content" placeholder="Post here"></textarea>
        </div>
        <!-- La till denna div för att testa få in bild och post i samma formulär-->
        <div class="form-group">
            <label for="image">Select image to upload: </label><br>
            <input type="file" name="image"><br>
        </div>
        <?php if(!empty($_SESSION['msg_post'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['msg_post']; ?>
            </div>
        <?php endif; ?>
        <button type="submit" name="upload" class="btn btn-primary mb-4">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include VIEW_ROOT . '/templates/footer.php'; ?>
