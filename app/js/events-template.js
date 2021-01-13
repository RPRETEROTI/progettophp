function readEventsTemplate(data) {
  //generazione pagina con i data della response server side
  // data = list of events, as JSON object: {"events": [{..},{..}, ]}
  console.log("data", data);
  console.log("dataar", data.events);

  containerHtml = `<div class="container-fluid p-0">`;
  // loop through returned list of data
  $.each(data.events, function (key, val) {
    console.log("datasingolo", data.events);
    containerHtml +=
      `<div class="background-artist row  ">
       
                      <div style="background-image: url(assets/uploadimages/` +
      val.fotoev +
      `)" class="container-img-artist col-12 col-sm-6"></div>
                      <div class="d-flex flex-column artist-name col-12 col-sm-5 col-md-6 col-xl-6">
                      <div class="d-flex justify-content-end py-2"><i class="fas fa-trash delete-event" style="color:#F08080;font-size:30px;" data-event="` +
      val.code +
      `"></i></div> 
  
        <div class="d-flex"><i class="fas ` +
      val.iconCategory +
      `" style="color:#0f4c82;;font-size:35px;"></i></div> 
                          <h5 class="cantante">` +
      val.name +
      `</h5>
       
        <div class="d-flex"><i class="fas fa-euro-sign" style="color:white;font-size:24px;"></i></div>
        <div class="d-flex justify-content-center"> <p class="eventcontent">Prezzo:` +
      val.price +
      `</p>  </div> 
        <div>
        <i class="fas fa-clock" style="color:white;font-size:24px;"></i></div>
  
        <div class="d-flex justify-content-center"> <p class="eventcontent">Ora:` +
      val.hourexhibition +
      `</p></div>
  
        <div class="d-flex "><i class="fas fa-calendar-day" style="color:white;font-size:24px;"></i></div>
           <div class="d-flex justify-content-center"> <p class="eventcontent">Data:` +
      val.dateexhibition +
      `</p></div>
        <div class="d-flex"><i class="fas fa-info" style="color:white;font-size:24px;"></i>
        </i></div>
        <div class="d-flex justify-content-center">
        <p class="eventcontent">` +
      val.description +
      `</p></div>
  
                      </div>
                      </div>`;
  });
  containerHtml += `</div>`;

  // inject to 'artist-section' of our app
  $(".artist-section").html(containerHtml);
}
