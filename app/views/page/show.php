<?php session_start(); ?>

<?php require VIEW_ROOT . '/templates/header.php'; ?>
  <?php if(!$data): ?>
    <p>No page found, sorry.</p>
  <?php else: ?>
    <h2><?php echo $data['post_title']; ?></h2>

    <?php echo $data['post_content']; ?>

    <p class="">
      Created on <?php echo $data['created_time']->format('jS M Y h:m a'); ?>
      <?php if($data['updated_time']): ?>
        Last updated <?php echo $data['updated_time']->format('jS M Y h:m a'); ?>
      <?php endif; ?>
    </p>
  <?php endif; ?>


  <?php if($_SESSION == true): ?>
    <?php if($_SESSION['user_id'] == $data['user_id'] OR $_SESSION['admin'] == 1): ?>
      <a href="<?php echo BASE_URL; ?>/delete_post.php?id=<?php echo $data['post_id']; ?>">Delete post</a>
      <?php if($_SESSION['user_id'] == $data['user_id']): ?>
        <a href="<?php echo BASE_URL; ?>/edit_post.php?id=<?php echo $data['post_id']; ?>">Edit post</a>
      <?php endif; ?>
    <?php endif; ?>
  <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
