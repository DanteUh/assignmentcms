<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/delete_post.php" method="POST">
        <div class="form-group">
          <p>Do you really want to delete this post? - <?php echo $post['post_title']; ?></p>
        </div>
        <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
        <button type="submit" class="btn btn-primary">Yes</button>
      </form>
    </div>
  </div>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
