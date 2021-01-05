$(document).ready(function () {
    $(document).on("click", "#load-categories", function () {
      showCategoriesFilter();
    });
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
      <div class="form-row my-2">`;
    containerHtml += `    
    <div class="form-group col-8 d-flex align-items-center justify-content-end">
      <button type="submit" class="btn py-2 px-5" style="background-color:#039ed8">
        FILTER
      </button>
    </div>`;
    containerHtml += ` <div class="form-group d-flex align-items-center col-4 class="d-flex justify-flex-end">
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
    </div></div>`;
  
    containerHtml += `    
    </form>`;
    containerHtml = `    
    <div class="row my-2">
    <div class="col-12 d-flex align-items-center justify-content-end">
    <button class="form-group col-12 d-flex align-items-center justify-content-end" id="load-categories" class="btn py-2 px-5" style="background-color:#039ed8">
      LOAD CATEGORIES
    </button>
  </div>
  </div>
    `;
    // inject to 'page-content' of our app
    $(".event-filter-by-category").html(containerHtml);
  }
  //data-id="` +
  // val.dataId +
  // `">
  