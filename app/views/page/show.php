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

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
