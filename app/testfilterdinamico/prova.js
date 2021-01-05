$(document).ready(function () {
  // show list of product on first load
  showProducts();
  // when the user clicks on a 'read products' button
});

// function to show list of products
// function showProducts() {
//   // get data from the read service
//   $.ajax({
//     url: "http://localhost/progetto_approcciavanzati2020/app/api/read.php",
//     type: "GET",
//     success: function (data) {
//       console.log("datacheck", data);
//       // html for listing products
//       readProductsTemplate(data); // data = server's response (= list of products, as JSON object)
//       // chage page title
//       //   changePageTitle("Read products");
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
function readProductsTemplate(data) {
  // data = list of products, as JSON object: {"products": [{..},{..}, ]}
  console.log("data", data);

  // loop through returned list of data
  // $.each(data, function (key, val) {
  //   console.log("datasingolo", data);
  // });

  // inject to 'page-content' of our app
  //   $("#page-content").html(read_products_html);
}
