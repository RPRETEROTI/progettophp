$(document).ready(function () {
  showCategoriesFilter();
});

function showCategoriesFilter() {
  $.ajax({
    url:
      "http://localhost/progetto_approcciavanzati2020/app/api/read-category.php",
    type: "GET",
    success: function (data) {
      filterTemplate(data);
      console.log("categ", data);
    },
    error: function (xhr, err, exc) {
      console.log(xhr, err, exc);
      console.log("E stato riscontrato un errore", err);
    },
  });
  return false;
}
// function to show list of categories

function filterTemplate(data) {
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

  // inject to 'page-content' of our app
  $(".event-filter-by-category").html(containerHtml);
}

//data-id="` +
// val.dataId +
// `">
