<?php require VIEW_ROOT . '/templates/header.php'; ?>


  <a href="<?PHP echo BASE_URL; ?>/new_post.php">Lägg till ny post</a>

  <?php if(empty($posts)): ?>
    <p>Sorry, no pages at the moment.</p>
  <?php else: ?>
    <ul>
      <?php foreach($posts as $post): ?>
        <li>
          <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $post['post_id']; ?>"><?php echo $post['post_title']; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
