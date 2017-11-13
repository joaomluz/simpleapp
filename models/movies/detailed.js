
// Handle Upcomings Movies

var url = "https://api.themoviedb.org/3/movie/" + movie_id + "?api_key=" + key + "&language=en-US&page=1";

AJAX.request(url,function() {
    if (!result.status_code) {
        document.getElementById('loading').style.display = 'none';
        renderCards(result);
    } else {
        console.log(result.status_code);
    }
});

function renderCards(movie) {
    if ('content' in document.createElement('template')) {
        var c = document.querySelector('.movie').content;

        c.querySelector('h2').textContent = movie.original_title;
        c.querySelector('img').src = 'https://image.tmdb.org/t/p/w300/' + movie.poster_path;
        c.querySelector('.desc').textContent = movie.overview;

        c.querySelector('.genre').textContent = movie.genres.map(function(elem){
            return elem.name;
        }).join(", ");
        
        c.querySelector('.release').textContent = movie.release_date;

        document.querySelector('#render').appendChild(document.importNode(c, true));
    }
};