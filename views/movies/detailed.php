
<script> const movie_id = '<?php echo $movie_id; ?>'; </script>
<script src="../../models/movies/detailed.js"></script>
 
<main class="container">
    <section class="movies" id="movies">
        	<div class="row" id="render">
        
        <center id='loading'> Loading movies.. </center> 
        <?php require_once('views/templates/movie_detailed.php') ?>

        </div>
    </section>
</main> 
