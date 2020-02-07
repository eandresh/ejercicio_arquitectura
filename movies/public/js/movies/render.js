getAllMovies()
.then(function(response){
    for (const mov of response.data) {
        let movTemplate = 
            movieTemplate
                .replace('{movieImg}', mov.poster_path)
                .replace('{movieImg}', mov.poster_path)
                .replace('{movieAverage}', mov.vote_average)
                .replace('{movieLang}', mov.original_language)
                .replace('{movieRelease}', mov.release_date)
                .replace('{movieOverview}', mov.overview)
                .replace('{movieName}', mov.title)
                .replace('{movieName}', mov.title);
    
        $('.moviesappcont').append(movTemplate);
    }
});