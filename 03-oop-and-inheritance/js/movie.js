(function(window){
		
		function Movie(title, rating, id){
			this.title=title;
			this.rating=rating;
			this.id=id;
		};
		 // public methods
		Movie.prototype.getTitle = function(){
			return this.title;
		};
		
		Movie.prototype.setTitle(newTitle){
			 this.title=newTitle;
	    };	

		Movie.prototype.getRating = function(){
			return this.rating;
		};
		
		Movie.prototype.setRating(newRating){
			this.rating=newRating;
	    };
		
		Movie.prototype.getId = function(){
			return this.id;
		};
		
		Movie.prototype.setId(newId){
			this.ide=newId;
	    };
		
		Movie.prototype.play = function() {
			console.log("Playing " + this.title);	
		};
		
		Movie.prototype.stop = function () {
			console.log("Stoping " + this.title);
		};
		window.Movie= Movie;
	
}(window));