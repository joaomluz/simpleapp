<?php

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'movies';
    $action     = 'upcoming';
  }

  require_once('views/layout.php');
?>