
<script src="../../models/movies/upcoming.js"></script>

<main class="container" id="infscroll">
<section class="movies" id="movies">
    <h2>Upcoming Movies</h2><br>
	<div class="row" id="render">
    <center id='loading'> <p>Loading movies..</p> </center> 
    <?php require_once('views/templates/movie_card.php') ?>

	</div>
</section>
</main>
