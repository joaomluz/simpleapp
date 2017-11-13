
<script> const searchQuery = '<?php echo $search_query; ?>'; </script>
<script src="../../models/movies/search.js"></script>

<main class="container">
<section class="movies" id="movies">
    <h2>Search Movies</h2><br>
	<div class="row" id="render">

    <center id='loading'> Loading movies.. </center> 
    <?php require_once('views/templates/movie_card.php') ?>

	</div>
</section>
</main>
