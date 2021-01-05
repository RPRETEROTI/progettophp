// $(document).ready(function () {
//   // show list of artists on first load
//   // showCategoriesFilter();

//   // var keyFilter = "all";
//   // keyFilter = $("#filterForm").find(":selected").val() ?? "all";
//   // console.log("keya", keyFilter);
//   // console.log("xc", $("#filterForm").find(":selected").val());
//   // if (keyFilter === "all") {
//   //   showArtists(keyFilter);
//   // }
//   $(document).on("submit", "#filterForm", function () {
//     var keyFilter;
//     keyFilter = $(this).find(":selected").attr("value");
//     console.log("xc", $("#filterForm").find(":selected").val());
//     console.log("key", keyFilter);
//     console.log("cetrioli");
//     showArtists(keyFilter);
//   });
//   $(document).on("mouseover", ".cantante", function () {
//     // first par = event; second (optional) par = selector (in this case the class); last par = event handler
//     $(this).css("color", "white");
//   });
//   $(document).on("mouseout", ".cantante", function () {
//     // first par = event; second (optional) par = selector (in this case the class); last par = event handler
//     $(this).css("color", "black");
//   });
// });

// function showCategoriesFilter() {
//   $.ajax({
//     url:
//       "http://localhost/progetto_approcciavanzati2020/app/api/read-category.php",
//     type: "GET",
//     success: function (data) {
//       filterTemplate(data);
//       console.log("categ", data);
//     },
//     error: function (xhr, err, exc) {
//       console.log(xhr, err, exc);
//       console.log("E stato riscontrato un errore", err);
//     },
//   });
//   return false;
// }
// // function to show list of categories
// function filterTemplate(data) {
//   containerHtml = `
//     <form action="#" method="POST" id="filterForm">
//     <div class="form-row my-2">`;
//   containerHtml += `
//   <div class="form-group col-8 d-flex align-items-center justify-content-end">
//     <button type="submit" class="btn py-2 px-5" style="background-color:#039ed8">
//       FILTER
//     </button>
//   </div>`;
//   containerHtml += ` <div class="form-group d-flex align-items-center col-4 class="d-flex justify-flex-end">
//     <label for="filter"></label>
//     <select name="filter" class="form-control">
//     <option value="all" selected>
//     All
//     </option>
//     `;
//   $.each(data.categories, function (key, val) {
//     console.log("val", val);
//     containerHtml +=
//       `<option value="` +
//       val.id +
//       `
//       ">
//     ` +
//       val.name +
//       `
//     </option>`;
//   });
//   containerHtml += `</div></select>`;

//   containerHtml += `
//   </div>
//   </form>`;
//   // inject to 'page-content' of our app
//   $(".event-filter-by-category").html(containerHtml);
// }
// function showFilterArtists(){
//   $.ajax({
//     url:"http://localhost/progetto_approcciavanzati2020/app/api/filter.php",
//     method:"POST",
//     datatype:'json',
//     data:{},
//     success:function(result){
//       filterTemplate(data);
//     },
//     error:function(xhr,err,exc){
//       console.log('E stato riscontrato un errore',+err)
//     },
//   })
// }
// function to show list of artists
// function showArtists(keyFilter) {
//   // get data from the read service
//   $.ajax({
//     url:
//       "http://localhost/progetto_approcciavanzati2020/app/api/read.php?filterKey=" +
//       keyFilter,
//     type: "GET",
//     success: function (data) {
//       console.log("datacheck", data);
//       // keyFilter = keyFilter === "all" ? keyFilter : data.artists.category;
//       console.log("key", keyFilter);
//       // alert("ready");
//       // html for listing products
//       readArtistsTemplate(data); // data = server's response (= list of artists, as JSON object)
//     },
//     error: function (xhr, err, exc) {
//       // show error to console
//       console.log(xhr, err, exc);
//       console.log("capra");
//       //console.warn(xhr.responseText);
//       // console.log(form_data);
//     },
//   });
//   return false;
// } // showProducts

// product list html

// function filterTemplate(data){
//   containerHtml=`<div class="container-fluid p-0">`;
//   $.each(data,function(key,value){
//     containerHtml +=;
//   })
// }

function readArtistsTemplate(data) {
  // data = list of products, as JSON object: {"products": [{..},{..}, ]}
  console.log("data", data);
  console.log("dataar", data.artists);

  containerHtml = `<div class="container-fluid p-0">`;
  // loop through returned list of data
  $.each(data.artists, function (key, val) {
    console.log("datasingolo", data.artists);
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
