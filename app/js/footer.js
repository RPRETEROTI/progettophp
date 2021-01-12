// create footer

$(document).ready(function () {
  footerPage = `
  <div class="container-fluid px-0 py-2 footer-container">
  <div class="d-flex row m-0">      
  <div class="d-flex offset-0 offset-md-2 col-12 col-md-8 align-items-center justify-content-center">
    <h3 class="title">
    Crea il tuo evento
    </h3>
  </div>
  <div class="d-flex col-12 col-md-2 logo-container">
  <img id="logo" src="assets/images/newlogo.png" alt="">
</div>
</div>
</div>
 `;
  $("#footer").html(footerPage);
});
