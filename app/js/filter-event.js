$(document).ready(function () {
  $(document).on("submit", "#filterForm", function (e) {
    e.preventDefault();
    var keyFilter;
    keyFilter = $(this).find(":selected").attr("value");
    console.log("key", keyFilter);
    console.log("cetrioli");
    showFilterEvents(keyFilter);
  });
});

function showFilterEvents(keyFilter) {
  $.ajax({
    url:
      "http://localhost/progetto_approcciavanzati2020/app/api/filter.php?filterKey=" +
      keyFilter,
    method: "GET",
    success: function (data) {
      filterEventsTemplate(data);
      console.log("dataaf", data);
    },
    error: function (xhr, err, exc) {
      console.log("E stato riscontrato un errore", err);
    },
  });
}

function filterEventsTemplate(data) {
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
