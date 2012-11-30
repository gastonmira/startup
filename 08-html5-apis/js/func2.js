fileObjt = {
 handleFileSelect: function(evt) {
    evt.stopPropagation();
    evt.preventDefault();

    var files = evt.dataTransfer.files; // FileList object.

        // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {
          output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
              f.size, ' bytes, last modified: ',
              f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
              '</li>');
    }
    document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  },

  handleDragOver: function(evt) {
    evt.stopPropagation();
    evt.preventDefault();
    evt.dataTransfer.dropEffect = 'copy'; // Explicitly show this is a copy.
  },

  get_location: function() {
		var map; // Define a global to hold the map object
	function success(position)
	{
     // Define the coordinates as a Google Maps LatLng Object
     var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

     // Prepare the map options
     var mapOptions = {
                    zoom: 10,
                    center: coords,
                    mapTypeControl: false,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    mapTypeId: google.maps.MapTypeId.ROADMAP
            };
     // Create the map, and place it in the map_canvas div
     map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

     // Place the initial marker
     var marker = new google.maps.Marker({
                    position: coords,
                    map: map,
                    title: "Your current location!"
            });
}


  },

  saveCode: function() {              
    $(".save").blur(function(){
       localStorage.setItem('saved',$('#scriptCode'.val()))
    
      if (localStorage.getItem('saved')){
              console.log(localStorage.getItem('saved'));
          $("#msg").text("From LocalStorage");
          $(".save").html(localStorage.getItem('saved'));
      }else{
          $("#msg").text("LocalStorage is Empty!");
      }
    });
  }
}