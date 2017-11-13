
// Handle Upcomings Movies
var pageglobal = 1;
var totalPages = 1;

function requestApi(page) {

    var url = "https://api.themoviedb.org/3/movie/upcoming?api_key=" + key + "&language=en-US&page=" + page;

    if (totalPages > page) {
        document.getElementById('loadmore').style.display = 'none';
        return false;
    }

    AJAX.request(url,function() {
        if (!result.status_code) {
            document.getElementById('loadmore').style.display = 'inline';            
            document.getElementById('loading').style.display = 'none';
            result.results.forEach(renderCards);
            
        } else {
            //TODO: Handle error
            console.log(result.status_code);
        }
    });
    pageglobal++;

}

function renderCards(movie, i) {
    console.log(movie);
    if ('content' in document.createElement('template')) {
        var c = document.querySelector('.single_card').content;

        c.querySelector('h3').textContent = movie.original_title;
        c.querySelector('img').src = 'https://image.tmdb.org/t/p/w300/' + movie.poster_path;
        c.querySelector('.btn').href = "?controller=movies&action=detailed&movie_id=" + movie.id;
        
        c.querySelector('.release').textContent = movie.release_date;
        document.querySelector('#render').appendChild(document.importNode(c, true));
    }
}

requestApi(pageglobal);
