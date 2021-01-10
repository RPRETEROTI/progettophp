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
     
					<div style="background-image: url(assets/uploadimages/` +
      val.fotoev +
      `)" class="container-img-artist col-12 col-sm-6"></div>
                    <div class="d-flex flex-column artist-name col-12 col-sm-5 col-md-6 col-xl-6">
                    <div class="d-flex justify-content-end py-3"><i class="fas fa-trash delete-event" style="color:#F08080;font-size:30px;" data-event="` +
      val.code +
      `"></i></div> 

      <div class="d-flex"><i class="fas ` +
      val.iconCategory +
      `" style="color:white;font-size:30px;"></i></div> 
                        <h5 class="cantante">` +
      val.name +
      `</h5>
     
      <div class="d-flex"><i class="fas fa-euro-sign" style="color:white;font-size:24px;"></i></div>
      <div class="d-flex"> <p class="eventcontent">Prezzo artista:` +
      val.price +
      `</p>  </div> 
      <div ><i class="fas fa-clock" style="color:white;font-size:24px;"></i></div>

      <div class="d-flex"> <p class="eventcontent">Ora esibizione:` +
      val.hourexhibition +
      `</p></div>

      <div class="d-flex"><i class="fas fa-calendar-day" style="color:white;font-size:24px;"></i></div>
         <div>               <p class="eventcontent">Data esibizione:` +
      val.dateexhibition +
      `</p></div>
      <div class="d-flex"><i class="fas fa-info" style="color:white;font-size:24px;"></i>
      </i></div>
      <div>               <p class="eventcontent">Descrizione:` +
      val.description +
      `</p></div>

					</div>
					</div>`;
  });
  containerHtml += `</div>`;

  // inject to 'page-content' of our app
  $(".artist-section").html(containerHtml);
}
