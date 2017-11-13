<?php
  class MoviesController {
    
    public function upcoming() {
      require_once('./views/movies/upcoming.php');
    }

    public function detailed() {
      $movie_id = isset($_GET['movie_id']) ? $_GET['movie_id'] : '';
      require_once('./views/movies/detailed.php');
    }

    public function search() {
      $search_query = isset($_GET['search_query']) ? $_GET['search_query'] : '';
      require_once('./views/movies/search.php');
    }
  }
?>