let getAllMovies = function() {
    return $.get(ALL_MOVIES, function(data) {
        movies = data.data.map(function(item) {
            item.poster_path = 'img/movies' + item.poster_path;
            return item;
        });
    });
}