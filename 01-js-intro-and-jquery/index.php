<!DOCTYPE html>
<html>                                                                  
 	<head>
 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>                                                                  
 		<script type="text/javascript">                                         
 			function pop(){
 			// do stuff when DOM is ready
   			alert('Page Loaded!')
 			}
 			function doRequest(){

 				$.ajax({
 					type: 'GET',
 					url: 'http://bootcamp.aws.af.cm/welcome/Gaston',
 					dataType:'json',
 					crossDomain: true,

 					
 					success: function (response, status, xhr) {
 							
 							$('div.response')
 								.html(response.response);

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
 								$('div.movies').append('</br></br><b>Name: </b></br>'+ array[i].Name +  '</br><b> Synopsis: </b> </br> '    + array[i].Synopsis + '</br><b>Year:  </b></br>' + array[i].ReleaseYear + '</br><b>Box Art: </b></br> <img src="' + array[i].BoxArt.MediumUrl +'"></img>' );
 							}
		 				//});
		 				},
 						error: function (response, status, xhr) {
 							$('div.fail')
 								.html(status+ ' - '+ xhr.status);
 						}



 					}); 						
 				}
 			
 			
 		</script> 
 		<title>Globant :: Welcome to the HTML5 bootcamp</title> 
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
	 			background: -webkit-linear-gradient(rgba(58,112,206,0.88) 95.03%, #ffffff 100%) /* sorry for this color haha */
 			}
 		</style>                                                            
 	</head>                                                                 
 	
 	<body onload="pop()">                                                                  
 	   
 	  <button onclick="javascript:doRequest();">Click!</button> 
 	  <input type="text" id="alias"></input>
 	  	<script>document.getElementById('alias').focus()</script>
 	  	<div class="response"></div>
 	  	<div class="fail"></div>
 	  	<button onclick="javascript:doMovies();">List of Movies!</button> 
 	   	<div class="movies" > </div>
 	</body>                                                                 
 </html>