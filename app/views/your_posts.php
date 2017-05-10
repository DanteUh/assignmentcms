<?php require VIEW_ROOT . '/templates/header.php'; ?>

<div class="container mt-5">
  <!-- if there's not any posts in database -->
  <?php if(empty($posts)): ?>
    <!-- this paragraph will be shown -->
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8">
        <p>You have not created any posts yet, go <a href="<?PHP echo BASE_URL; ?>/new_post.php">here</a> to write your first one!</p>
      </div>
    </div>
    <?php else: ?>
    <!-- Listar alla befintliga posts -->
    <!-- looping through all posts that $posts holds -->
      <?php foreach($posts as $post): ?>
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-8">
            <?php if(!empty($_SESSION['success'])): ?>
              <div class="alert alert-success">
                <?php echo $_SESSION['success']; ?>
              </div>
              <?php $_SESSION['success'] = ''; ?>
            <?php endif; ?>
            <div class="post-preview">
              <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $post['post_id']; ?>">
                <h5 class="post-title"><?php echo $post['post_title']; ?></h5>
              </a>
              <p class="post-meta">Posted by <a href="#"><?php echo $post['username']; ?></a> on <?php echo $post['created_time']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
  <?php endif; ?>
</div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
