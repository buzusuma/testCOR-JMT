$(document).ready(function(){

	$('#calcular').on('click', function(){
       var dimension = $('#dimension').val();
     	if(dimension) {
	       $.ajax({
	           url: '/calcular/'+dimension,    
	           type: "GET",
	           dataType: "json",             
	            
	       });
	       
	       console.log(dimension)

  		}   
  	});

});