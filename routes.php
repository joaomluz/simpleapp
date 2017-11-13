<?php

  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'movies':
        $controller = new MoviesController();
      break;
      // case 'newController':
      //   $controller = new newController();
      // break;
    }

    $controller->{ $action }();
  }

  // New controllers should be added here
  $controllers = array('movies' => ['upcoming', 'detailed', 'search']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('movies', 'upcoming');
    }
  } else {
    call('movies', 'upcoming');
  }
?>