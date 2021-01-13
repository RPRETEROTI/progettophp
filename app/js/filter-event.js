$(document).ready(function () {
  $(document).on("submit", "#filterForm", function (e) {
    e.preventDefault(); //prevent default behaviour of submit
    var keyFilter; //create keyfilter var
    keyFilter = $(this).find(":selected").attr("value"); //find val of option selected into select in form with id filterForm
    console.log("key", keyFilter);
    showFilterEvents(keyFilter); // invoke function with arg keyFilter
  });
});

function showFilterEvents(keyFilter) {
  //service to filter event with the keyFilter. GET method
  $.ajax({
    url:
      "http://localhost/progetto_approcciavanzati2020/app/api/filter.php?filterKey=" +
      keyFilter,
    method: "GET",
    success: function (data) {
      //if success
      readEventsTemplate(data); //data are response server. invoke function with arg data
      console.log("dataaf", data);
    },
    error: function (xhr, err, exc) {
      console.log("E stato riscontrato un errore", err);
    },
  });
}
