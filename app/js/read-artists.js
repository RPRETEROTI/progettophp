$(document).ready(function () {
  // show list of artists on first load
  showArtists();
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
function showArtists() {
  // get data from the read service
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/read.php",
    type: "GET",
    success: function (data) {
      console.log("datacheck", data);
      // html for listing products
      readArtistsTemplate(data); // data = server's response (= list of artists, as JSON object)
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

// product list html
function readArtistsTemplate(data) {
  // data = list of products, as JSON object: {"products": [{..},{..}, ]}
  console.log("data", data);
  console.log("dataar", data.artists);

  containerHtml = `<div class="background-artist row ">`;
  // loop through returned list of data
  $.each(data.artists, function (key, val) {
    console.log("datasingolo", data.artists);
    containerHtml +=
      `<div style="background-image: url(assets/images/` +
      val.fotoart +
      `)" class="container-img-artist col-12 col-sm-6"></div>
                    <div class="background-artist d-flex artist-name col-12 col-sm-5 col-md-12 col-xl-6">
                        <h5 class="cantante">` +
      val.name +
      `</h5>
                        <i class="far fa-heart icon"></i>
                        <p>Canzone artista:` +
      val.song +
      `</p>
                        <p>Ora esibizione:` +
      val.hour +
      `</p>
                        <p>Data esibizione:` +
      val.date +
      `</p>
                    </div>`;
  });
  containerHtml += `</div>`;

  // inject to 'page-content' of our app
  $(".artist-section").html(containerHtml);
}
