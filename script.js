$(document).ready(function(){

  $("#selectOffre").change(function(){
    
    // get the value id of current selected item
    var val = $("#selectOffre").val();
    
    // send ajax request
    $.ajax({
      url: "offres.php",
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

	$("#titleOffre").empty();
	$("#titleOffre").append(data["name"]);
	$("#descOffre").empty();
	$("#descOffre").append(data["desc"]);
	$("#priceOffre").empty();
	$("#priceOffre").append(data["price"]+"€");
  $("#imgOffre").empty();
  $("#imgOffre").append("<img class='thumbnail' src=img/"+data["name"]+".jpg>");
}