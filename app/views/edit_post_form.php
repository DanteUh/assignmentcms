<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/update_post.php" method="POST">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="post_title" value="<?php echo $post['post_title']; ?>">
        </div>
        <div class="form-group">
          <label for="exampleTextarea">Blog content</label>
          <textarea class="form-control" rows="5" name="post_content"><?php echo $post['post_content']; ?></textarea>
        </div>
        <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
