
<!-- I view visas alla posts utåt som hämtas från index.php -->
<?php require VIEW_ROOT . '/templates/header.php'; ?>

  <?php if(!isset($_SESSION['loggedin'])): ?>
    <a href="<?PHP echo BASE_URL; ?>/login_user.php">Logga in</a>
    <a href="<?PHP echo BASE_URL; ?>/reg_user.php">Registrera ny användare</a>
  <?php else: ?>
    <?php echo 'Hello ' . $_SESSION['username'] . '!</br>'; ?>
    <a href="<?PHP echo BASE_URL; ?>/logout_user.php">Logga ut</a>
    <a href="<?PHP echo BASE_URL; ?>/new_post.php">Lägg till ny post</a>
  <?php endif; ?>

  <!-- För att kolla om det finns en post på den pagen -->
  <?php if(empty($posts)): ?>
    <p>Sorry, no pages at the moment.</p>
  <?php else: ?>
    <!-- Listar alla befintliga posts -->
    <ul>
      <?php foreach($posts as $post): ?>
        <li>
          <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $post['post_id']; ?>"><?php echo $post['post_title']; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>