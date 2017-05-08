
  <?php require VIEW_ROOT . '/templates/header.php'; ?>



    <a href="<?PHP echo BASE_URL; ?>/new_post.php">Lägg till ny post</a><br/>

  <!-- För att kolla om det finns en post på den specifika sidan -->
  <?php if(empty($posts)): ?>
    <p>Sorry, no pages at the moment.</p>
  <?php else: ?>

    <!-- Listar alla befintliga posts -->
    <ul>
      <?php foreach($posts as $post): ?> 
        <li>
          <!--Länkar till den post, vars post_id stämmer överens med den post som finns i databasen-->
          <a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $post['post_id']; ?>"><?php echo $post['post_title']; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>


   <!--Om en användare är inloggad visas alla posts på startsidan -->
  <?php if(isset($_SESSION['uname'])): ?>
    <!--Meddelande om att man är inloggad visas-->
    <?php if(!empty($msg_log)): ?>
      <p class="text-center"><?php echo $msg_log ?></p>
        <!--Logga ut-länk -->
        <p class="text-center"><a href="<?PHP echo BASE_URL; ?>/logout_user.php">Logga ut</a></p>
    <?php endif; ?>


  <!--Om en användare inte är inloggad hänvisas man till att logga in eller registrera sig-->
  <?php else: ?>

    <!--Meddelande om att man är inloggad visas-->
    <?php if(!empty($msg_log)): ?>
      <p class="text-center"><?php echo $msg_log ?></p>
    <?php endif; ?>

    <div class="wrapper">  
          <p class="text-center"><a href="<?PHP echo BASE_URL; ?>/login_user.php">Logga in</a> eller
          <a href="<?PHP echo BASE_URL; ?>/reg_user.php">Registrera dig</a></p>
    </div>

  <?php endif; ?>



<?php require VIEW_ROOT . '/templates/footer.php'; ?>
