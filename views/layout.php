
<DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <script src="../../assets/js/main.js"></script>
  </head>
  <body>
  <div class="container">
    <div class="header clearfix">
      <nav>
        <ul class="nav nav-pills float-right">
          <li class="nav-item">
            <a class="nav-link" href="?controller=movies&action=upcoming">Upcoming </a>
          </li>
          <div class="form-inline my-2 my-lg-0">
            <input id="searchinput" class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" onClick='searchMovies()'>Search movies</button>
          </div>
        </ul>
      </nav>
      <h3 class="text-muted">Movie App</h3>
    </div>

    <?php require_once('routes.php'); ?>

    <?php if ($_GET['action'] == 'upcoming' || $_GET['action'] == 'search' ) {?>
      <button type="button" class="btn btn-primary btn-lg btn-block" onClick='requestApi(pageglobal)' id='loadmore'>Load more</button>
    <?php } ?>
  </body>
</html>