
<?php include VIEW_ROOT . '/templates/header.php'; ?>

<div class="container mt-5 mx-auto">
  <?php if(!$data): ?>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
          <p>This post has been deleted.</p>
          <a href="/">View all posts</a>
        </div>
      </div>
    </div>
  <?php else: ?>
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8">
          <!-- Title -->
          <h1 class="display-4 mb-4"><?php echo $data['post_title']; ?></h1>
            <!-- Author -->
            <p class="lead">
              by <a href="#"><?php echo $data['username']; ?></a>
            </p>
            <?php if(!empty($data['image'])): ?>
              <div class="clipper">
                <img class="img-fluid" src="<?php BASE_URL; ?>/app/uploads/<?php echo $data['image']; ?>"></img>
              </div>
            <?php endif; ?>

            <hr>

            <div class="row mx-auto like-time-section">
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span>
                  Posted on - <?php echo $data['created_time']; ?>
                  <?php if($data['updated_time']): ?>
                    - last updated <?php echo $data['updated_time']; ?>
                  <?php endif; ?>
                </p>
                <div class="btn-section">
                <!-- Like and unlike buttons -->
                <?php if($_SESSION == true && $like == false): ?>
                  <span><?php echo $allTheLikes['COUNT(like_id)']; ?> Likes</span>
                  <form action="<?php echo BASE_URL; ?>/app/add_like.php?type=post&id=<?php echo $data['post_id']; ?>" method="POST">
                    <button type="submit" name='like-btn' class="btn btn-primary btn-sm mt-3" style="background-color:white; border-color: white;"><i class="material-icons" style="color:blue">thumb_up</i></button>
                  </form>
                <?php elseif($_SESSION == true): ?>
                  <span><?php echo $allTheLikes['COUNT(like_id)']; ?> Likes</span>
                  <form action="<?php echo BASE_URL; ?>/app/delete_like.php?type=post&id=<?php echo $data['post_id']; ?>" method="POST">
                    <button type="submit" name='unlike-btn' class="btn btn-danger btn-sm mt-3" style="background-color:white; border-color: white;"><i class="material-icons" style="color:red">thumb_down</i></button>
                  </form>
                <?php endif; ?>
                </div>
            </div>


            <hr>

              <!-- Post Content -->
              <p class="lead"><?php echo $data['post_content']; ?></p>
              <?php if($_SESSION == true): ?>
                <?php if($_SESSION['user_id'] == $data['user_id']): ?>
                  <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/edit_post.php?id=<?php echo $data['post_id']; ?>">Edit post</a>
                <?php endif; ?>
                <?php if($_SESSION['user_id'] == $data['user_id'] OR $_SESSION['admin'] == true): ?>
                  <a class="del-post mr-2 btn btn-danger" href="<?php echo BASE_URL; ?>/delete_post.php?id=<?php echo $data['post_id']; ?>">Delete</a>
                <?php endif; ?>
              <?php endif; ?>

              <!-- <?php if($_SESSION == true && $like == false): ?>
                <form action="<?php echo BASE_URL; ?>/app/add_like.php?type=post&id=<?php echo $data['post_id']; ?>" method="POST">
                  <button type="submit" class="btn btn-primary mt-3">Like</button>
                </form>
              <?php elseif($_SESSION == true): ?>
                <form action="<?php echo BASE_URL; ?>/app/delete_like.php?type=post&id=<?php echo $data['post_id']; ?>" method="POST">
                  <button type="submit" class="btn btn-danger mt-3">Remove Like</button>
                </form>
              <?php endif; ?> -->

              <!-- Comments Form -->
              <div class="well mt-5">
                <h2 class="lead">Leave a Comment:</h2>
                <form role="form">
                  <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
      <?php endif; ?>
  </div>

<?php include VIEW_ROOT . '/templates/footer.php'; ?>
