$(document).ready(function () {
  showEvents(); //invoco la funzione ad ogni caricamento pagina
  $(document).on("mouseover", ".cantante", function () {
    //evento di mouseover che manipola il colore dell'elemento
    $(this).css("color", "white");
  });
  $(document).on("mouseout", ".cantante", function () {
    //evento di mouseout  che manipola il colore dell'elemento
    $(this).css("color", "black");
  });
});

// function to show list of events
function showEvents() {
  // get data from the read service
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/read.php",
    type: "GET",
    success: function (data) {
      console.log("datacheck", data);
      readEventsTemplate(data); // data = server's response (= list of events, as JSON object)
    },
    error: function (xhr, err, exc) {
      // show error to console
      console.log(xhr, err, exc);
      console.log("capra");
    },
  });
  return false;
}
