define ("Movie", function() {
	return function Movie(title,director){
		this.title=title;
		this.director=director;
	};
	
	 Movie.prototype.title = function() {
        return title;
    };
	
	Movie.prototype.director = function() {
        return director;
    };
 
 	Movie.prototype.listMovies = function(){
	 		k=movies.length;
			for (var i=0; i<k; i++){
				console.log(movies[i].title);
			}

 	};

	return Movie;
});

/*
define	 (['movie'], function(Movie) {
	var movies = [
		new Movie('Alien', 'Ridley Scott'), 
		new Movie('Indiana Jones', 'Steven Spielberg'),
		new Movie('Inglorious Basterds','Quentin Tarantino')
		];
	
	return {
		listMovies: function(){
			 k=movies.length;
			for (var i=0; i<k; i++){
				console.log(movies[i].title);
			}
			
		}
	};
}); */