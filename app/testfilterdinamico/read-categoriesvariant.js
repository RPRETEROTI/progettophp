$(document).ready(function () {
  showCategoriesFilter();
});
// $(document).on("click", "#load-categories", function () {
//   showCategoriesFilter();

// });
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
  containerHtml += `</select>`;

  // inject to 'page-content' of our app
  $(".event-filter-by-category").html(containerHtml);
}

//data-id="` +
// val.dataId +
// `">
