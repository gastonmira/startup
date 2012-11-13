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
 					},


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


 		</style>                                                            
 	</head>                                                                 
 	
 	<body onload="pop()">                                                                  
 	   
 	  <button onclick="javascript:doRequest();">Click!</button> 
 	  <input type="text" id="alias"></input>
 	  	<script>document.getElementById('alias').focus()</script>
 	  	<div class="response"></div>
 	  	<div class="fail"></div>
 	</body>                                                                 
 </html>