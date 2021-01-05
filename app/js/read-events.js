$(document).ready(function () {
  showEvents();
  $(document).on("mouseover", ".cantante", function () {
    // first par = event; second (optional) par = selector (in this case the class); last par = event handler
    $(this).css("color", "white");
  });
  $(document).on("mouseout", ".cantante", function () {
    // first par = event; second (optional) par = selector (in this case the class); last par = event handler
    $(this).css("color", "black");
  });
});

// function to show list of artists
function showEvents() {
  // get data from the read service
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/read.php",
    type: "GET",
    success: function (data) {
      console.log("datacheck", data);
      console.log("bau");
      // alert("ready");
      // html for listing products
      readEventsTemplate(data); // data = server's response (= list of artists, as JSON object)
    },
    error: function (xhr, err, exc) {
      // show error to console
      console.log(xhr, err, exc);
      console.log("capra");
      //console.warn(xhr.responseText);
      // console.log(form_data);
    },
  });
  return false;
} // showProducts

function readEventsTemplate(data) {
  // data = list of products, as JSON object: {"products": [{..},{..}, ]}
  console.log("data", data);
  console.log("dataar", data.events);

  containerHtml = `<div class="container-fluid p-0">`;
  // loop through returned list of data
  $.each(data.events, function (key, val) {
    console.log("datasingolo", data.events);
    containerHtml +=
      `<div class="background-artist row align-items-center ">
     
					<div style="background-image: url(assets/images/` +
      val.fotoart +
      `)" class="container-img-artist col-12 col-sm-6"></div>
                    <div class="d-flex flex-column artist-name col-12 col-sm-5 col-md-6 col-xl-6">
                    <i class="fas fa-trash delete-event" style="color:white" data-event="` +
      val.code +
      `"></i>
                        <h5 class="cantante">` +
      val.name +
      `</h5>
                        <p>Canzone artista:` +
      val.price +
      `</p>
                        <p>Ora esibizione:` +
      val.hourexhibition +
      `</p>
                        <p>Data esibizione:` +
      val.dateexhibition +
      `</p>
					</div>
					</div>`;
  });
  containerHtml += `</div>`;

  // inject to 'page-content' of our app
  $(".artist-section").html(containerHtml);
}
