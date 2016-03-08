$(document).ready(function(){

  $("#selectOffre").change(function(){
    
    // get the value id of current selected item
    var val = $("#selectOffre").val();
    
    // send ajax request
    $.ajax({
      url: "action.php",
      type: "get", //send it through get method
      data:{id_offre: val},
      success: function(response) {
        console.log( "Got response: " + response );
        displayData(response);
      },
      error: function(xhr) {
       alert("something went wrong");
      }
    });
    
  });

});


function displayData(data){
	data = JSON.parse(data)
	console.log(data);
	console.log(data["desc"]);

	$("#titleOffre").empty();
	$("#titleOffre").append(data["name"]);
	$("#descOffre").empty();
	$("#descOffre").append(data["desc"]);
	$("#priceOffre").empty();
	$("#priceOffre").append(data["price"]);
}