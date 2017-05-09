<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bloggisarna</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="/pic/bloggis.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Bloggisarna
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <?php if(!isset($_SESSION['loggedin'])): ?>
            <a class="nav-link" href="<?PHP echo BASE_URL; ?>/login_user.php">Logga in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?PHP echo BASE_URL; ?>/reg_user.php">Registrera</a>
          </li>
            <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?PHP echo BASE_URL; ?>/new_post.php">Lägg till ny post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?PHP echo BASE_URL; ?>/logout_user.php">Logga ut</a>
          </li>
        </ul>
          <span class="navbar-text"><?php echo 'Välkommen tillbaka ' . $_SESSION['username'] . '!</br>'; ?></span>
        <?php endif; ?>
      </div>
    </nav>
