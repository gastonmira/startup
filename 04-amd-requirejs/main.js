require.config({
    //baseUrl: '', i don´t need it in this case.
    paths: {
        'jqueryMobile': 'http://code.jquery.com/jquery-1.8.2.min.js',
        'director':'lib/modules/director',
        'movie': 'lib/modules/movie',
        }
});

require (['movie'], function(movie){
		var movies = [
		require('Movie')('Alien', 'Ridley Scott'), 
		require('Movie')('Indiana Jones', 'Steven Spielberg'),
		require('Movie')('Inglorious Basterds','Quentin Tarantino')
		];
		
		console.log(movies[1].getAttribute('title'));

});

require (['director'], function(director){
		var directors = [ 
						require('Director')('Ridley Scott',['RequireJS is very diffcult to understand at first', 'Boca Juniors Sucks!']),
						require('Director')('Steven Spielberg',['Im a River Plate fan!', 'I hate Palermo!', 'C´mon Trezeguet!'])
						];

});

require (['movie'], function(movie) {
		movie.listMovies();	
});

require (['director'], function(director) {
			director.speak();
});