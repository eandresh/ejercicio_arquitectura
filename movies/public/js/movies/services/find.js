let findMovie = function(id) {
    let urlFind = FIND_MOVIE.replace('{idMovie}', id)
    
    $.get(urlFind, function(data) {
        console.log(data);
    })
}