$(document).ready(function () {
  $(document).on("click", ".delete-event", function () {
    //on the event click on .delete-.event it is retrieved the value of data-event
    var event_id = $(this).attr("data-event");
    deleteEvent(event_id); //invoke function with arg the event_id
    $("#feedback").fadeIn(2000); //A message of success or error fades in and then fades out in a small interval
    $("#feedback").fadeOut(3000);
  });
});
// function to show list of artists
function deleteEvent(id) {
  // delete event from  the delete service
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/delete.php",
    type: "POST",
    dataType: "json",
    data: JSON.stringify({ code: id }), //the data in Json(code of the event to be deleted) has beenn stringified
    success: function (result) {
      console.log("datacheck", result);
      // html for listing products
      positiveFeedbackSong(); //if success launch the function
      location.href = "eventi.php";
    },
    error: function (xhr, err, exc) {
      console.log("capra");
    },
  });
  negativeFeedbackSong(); //if no success launch the function
  return false;
}

function positiveFeedbackSong() {
  //message if the deletion has success
  containerHtml = `
  <div class="alert alert-primary" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
      Hai rimosso correttamente l'evento. 
          </div>`;

  // inject to 'feedback' of our app
  $("#feedback").html(containerHtml);
}

function negativeFeedback() {
  //message if the deletion has no success
  containerHtml = `<div class="alert alert-danger" role="alert">
      C'è stato un problema. Ritenta
    </div>`;

  // inject to 'feedback' of our app
  $("#feedback").html(containerHtml);
}
