$(document).ready(function () {
  showCategoriesFilter(); //invoke the function every load page
});

function showCategoriesFilter() {
  //service to read categories
  $.ajax({
    url:
      "http://localhost/progetto_approcciavanzati2020/app/api/read-category.php",
    type: "GET",
    success: function (data) {
      filterTemplate(data); // data from response server
      console.log("categ", data);
    },
    error: function (xhr, err, exc) {
      console.log(xhr, err, exc);
      console.log("E stato riscontrato un errore");
    },
  });
  return false;
}
// function to show list of categories

function filterTemplate(data) {
  //generazione pagina con i data della response server side
  // data = list of categories, as JSON object: {"categories": [{..},{..}, ]}
  containerHtml = ` 
    <form action="#" method="POST" id="filterForm">
    <div class="form-row my-4">`;
  containerHtml += `    
  <div class="form-group col-12 col-md-8 w-100 d-flex align-items-center justify-content-end">
    <button type="submit" class="btn  filterbtn py-2 px-5" >
      FILTER
    </button>
  </div>`;
  containerHtml += ` <div class="form-group d-flex align-items-center col-12 col-md-4 class="d-flex justify-flex-end">
    <label for="filter"></label>
    <select name="filter" class="form-control">
    <option value="" >Seleziona il filtro eventi</option>
    <option value="all" >
    All
    </option>
    `;
  // loop through returned list of data

  $.each(data.categories, function (key, val) {
    console.log("val", val);
    containerHtml +=
      `<option value="` +
      val.id +
      `">   
    ` +
      val.name +
      `
    </option>`;
  });
  containerHtml += `</div></select>`;

  containerHtml += `    
  </div></div></form>`;

  // inject to 'event-filter-by-category' of our app
  $(".event-filter-by-category").html(containerHtml);
}
