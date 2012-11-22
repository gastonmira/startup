define ("Director",function() {
	return function Director(name,quotes){
		this.name=name;
		this.quotes=quotes;
	};
	
	Director.prototype.name= function() {
		return name;
	};
	
	Director.prototype.quotes= function() {
		return quotes;
	};
	
	Director.prototype.speak= function() {
		for(var i=0, k=quotes.length;i <k; i++)
					console.log(this.name + 'says: ' + directors[i].quotes[i]);
	};
	
	
	return Director;
});

/*define ('director', function(Director){
		var directors = [ 
						require('Director')('Ridley Scott',['RequireJS is very diffcult to understand at first', 'Boca Juniors Sucks!']),
						require('Director')('Steven Spielberg',['Im a River Plate fan!', 'I hate Palermo!', 'C´mon Trezeguet!'])
						];
		
		return {
			speak: function(){
				for(var i=0, k=quotes.length;i <k; i++)
					console.log(this.name + 'says: ' + directors[i].quotes[i]);
			}
		}
		
}); */	