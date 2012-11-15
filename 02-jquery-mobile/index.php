<!DOCTYPE html>
<html>                                                                  
 	<head>
 		<title>Globant :: Welcome to the HTML5 bootcamp</title>
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
 		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
 		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>                                                                 
 		<script type="text/javascript">                                         
 			function pop(){
 			// do stuff when DOM is ready
   			alert('Page Loaded!')
 			}
 			
 			function doRequest(){
	 			
	 			
	 			$.mobile.showPageLoadingMsg();
	 			
 				$.ajax({
 					type: 'GET',
 					url: 'http://bootcamp.aws.af.cm/welcome/Gaston',
 					dataType:'json',
 					crossDomain: true,

 					
 					success: function (response, status, xhr) {
 							
 							$('div.response')
 								.html(response.response);
 							$.mobile.hidePageLoadingMsg();	

 					},
 					error: function (response, status, xhr) {
 							$('div.fail')
 								.html(status+ ' - '+ xhr.status);
 					}


 				});
 			}

 				function doMovies(){
 					
 					$.ajax({
 						type: 'GET',
 						url: 'http://bootcamp.aws.af.cm/movies',
 						dataType:'json',
 						crossDomain: true,
 						
 						success: function (data){
 							var array= data.d.results;
 							//$.each(array, function() { with function $.each I couldn´t do it.
 							for (var i = 0 ; i < array.length ; i ++ ) {  								
 								$('div.movies').append('<li> Name:'+ array[i].Name +  '</br><b> Synopsis: </b> </br> '    + array[i].Synopsis + '</br><b>Year:  </b></br>' + array[i].ReleaseYear + '</br><b>Box Art: </b></br> <img src="' + array[i].BoxArt.MediumUrl +'"class="ui-li- icon"></img></li>' );
 							}
		 				//});
		 				},
 						error: function (response, status, xhr) {
 							$('div.fail')
 								.html(status+ ' - '+ xhr.status);
 						}



 					}); 						
 				}
 			
 			$(function() {
	 			$("#changePageButton").click(function() {
		 			$.mobile.changePage("pages/sample1.html",{ transition: "slideup"});
		 			});        
		 	});
 	  		</script> 
 		<style type="text/css">
 			.fail {
 				background-color: #FF0000; 
 				color: white;
 			}
 			.response {
 				background-color: green;
 				color: white;
 			}

 			.movies {
	 			/* background: -webkit-linear-gradient(rgba(58,112,206,0.88) 95.03%, #ffffff 100%) /* sorry for this color haha */
 			}
 			
 			
 		</style>                                                            
 	</head>                                                                 
 	
 	<body onload="pop()">                                                                  
 	  
 	  <div data-role="page"> 
 	  	
 	  	<div data-role="header" data-position="fixed"><h1>Bootcamp 2012 Jquery Mobile	</h1>
 	  	<div data-role="navbar">
	 	  	<ul>
		 	  	<li><a href="index.php" class="ui-btn-active">Home</a></li>
		 	  	<li><a href="credits.html" data-transition="pop" data-direction="reverse" >Credits</a></li>
		 	  	<li><a href="contact.html" data-transition="slide">Contact</a></li>
			</ul> 
		</div>
 	  	
 	  	</div>
 	  		
 	  			<button class="clic" data-icon="arrow-d" onclick="javascript:doRequest();">Hello!</button>
  	  				<div class="response"></div>
 	  			<button data-icon="arrow-d" onclick="javascript:doMovies();">List of Movies!</button>	 	  	
 	  				<div class="movies" > <ul data-role="listview" data-inset="true"> </ul></div>
 	  	 <div data-role="content">
 	  	 	<a id="changePageButton" data-role="button" rel="external">External Page!</a>
	 	  	 <input type="text" id="alias"></input>
	 	  	 		<script>document.getElementById('alias').focus()</script>
 	  	
	 	  	
 	  	
 	     	<div class="fail"></div>
 	  	
 	  	
 	     	
 	   	</div>
 	   	<div data-role="footer" data-position="fixed">Bootcamp 2012</div>
 	   </div>	
 	</body>                                                                 
 </html>