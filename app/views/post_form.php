<?php include VIEW_ROOT . '/templates/header.php'; ?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_post.php" method="POST" enctype="multipart/form-data">
       <h1 class="display-4 text-center mb-4">Write a new blog post</h1>
        <div class="form-group">
          <input type="text" class="form-control" name="post_title" placeholder="Title goes here">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="5" name="post_content" placeholder="Write whatever you like, but it has to be huggable ofcourse <3"></textarea>
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<!--<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">    
      <form action="<?php echo BASE_URL; ?>/app/upload_image.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="image">Select image to upload: </label><br>
            <input type="file" name="image"><br>
          </div>
          <button type="submit" class="btn btn-primary" name="upload">Upload</button>
      </form>
    </div>
  </div>
</div>-->




<?php include VIEW_ROOT . '/templates/footer.php'; ?>
