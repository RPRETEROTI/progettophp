// $(document).ready(function () {
//   // show list of artists on first load
//   showArtists();
//   $(document).on("mouseover", ".cantante", function () {
//     // first par = event; second (optional) par = selector (in this case the class); last par = event handler
//     $(this).css("color", "white");
//   });
//   $(document).on("mouseout", ".cantante", function () {
//     // first par = event; second (optional) par = selector (in this case the class); last par = event handler
//     $(this).css("color", "black");
//   });
// });

// $(document).ready(function () {
//   // $("#feedback").addClass("left");
//   // $("#feedback").fadeIn();
//   $(document).on("click", ".delete-event", function () {
//     // $("#feedback").addClass("left");
//     // $("#feedback").fadeIn();
//     // $("#feedback").animate({ right: "0px" }, "slow");
//     // $("#feedback").fadeOut();
//     $("#feedback").fadeIn();
//     $("#feedback").addClass("left");
//     var event_id = $(this).attr("data-event");
//     deleteEvent(event_id);
//     $("#feedback").removeClass("left");
//     $("#feedback").animate({ right: "0px" }, "slow");
//     $("#feedback").fadeOut();
//     $("#feedback").animate({ left: "0px" }, "slow");

//     // });
//     // $("#feedback").animate({ right: "0px" }, "slow", function () {
//     //   $(this).hide();
//     // });
//   });
// });
$(document).ready(function () {
  $(document).on("click", ".delete-event", function () {
    var event_id = $(this).attr("data-event");
    deleteEvent(event_id);
    $("#feedback").fadeIn(2000);
    $("#feedback").fadeOut(3000);
  });
});
// function to show list of artists
function deleteEvent(id) {
  // get data from the read service
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/delete.php",
    type: "POST",
    dataType: "json",
    data: JSON.stringify({ code: id }),
    success: function (result) {
      console.log("datacheck", result);
      // html for listing products
      positiveFeedbackSong();
      location.href = "eventi.php";
    },
    error: function (xhr, err, exc) {
      // show error to console
      // console.log(xhr, err, exc);
      console.log("capra");
      // negativeFeedbackSong();
      //console.warn(xhr.responseText);
      // console.log(form_data);
    },
  });
  negativeFeedbackSong();
  return false;
} // showProducts

// product list html
function positiveFeedbackSong() {
  containerHtml = `
  <div class="alert alert-primary" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
      Hai aggiunto corettamente la canzone. 
          </div>`;

  // inject to 'page-content' of our app
  $("#feedback").html(containerHtml);
}

function negativeFeedbackSong() {
  containerHtml = `<div class="alert alert-danger" role="alert">
      C'è stato un problema. Ritenta
    </div>`;

  // inject to 'page-content' of our app
  $("#feedback").html(containerHtml);
}
