
<!-- I view visas alla posts utåt som hämtas från index.php -->
<?php require VIEW_ROOT . '/templates/header.php'; ?>
   
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h1 class="display-3 justify-content-center mt-5">CUDDLY</h1>
        <p class="lead">A blog</p>
      </div>
    </div>

  <!-- To check if there is a post on that page -->
  <main class="main-content mb-3">
      <div class="container mt-5">
       <h2 class="display-4 text-center mb-5">Activity</h2>

        <!-- if there's not any posts in database -->
        <?php if(empty($posts)): ?>
          <!-- this paragraph will be shown -->
          <p>No posts yet.</p>
        <?php else: ?>
          <!-- looping through all posts that $posts holds -->
            <?php foreach($posts as $post): ?>
              <div class="row mt-3">
                <div class="">

                  <!-- Success-message is printed out if  -->
                  <?php if(!empty($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                      <?php echo $_SESSION['success']; ?>
                    </div>
                    <!-- To reset success-message -->
                    <?php $_SESSION['success'] = ''; ?>
                  <?php endif; ?>

                  <!-- Error-message is printed out if  -->
                  <?php if(!empty($_SESSION['msg_post'])): ?>
                    <div class="alert alert-danger">
                      <?php echo $_SESSION['msg_post']; ?>
                    </div>
                    <?php $_SESSION['msg_post'] = ''; ?>
                  <?php endif; ?>

                  <!-- Error-message is printed out if  -->
                  <?php if(!empty($_SESSION['msg_edit'])): ?>
                    <div class="alert alert-danger">
                      <?php echo $_SESSION['msg_edit']; ?>
                    </div>
                    <?php $_SESSION['msg_edit'] = ''; ?>
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
  </main>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>