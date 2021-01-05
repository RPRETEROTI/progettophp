// create footer

$(document).ready(function () {
  footerPage = `
  <div class="footer flex flex-column">
    <div class="column flex mb-2">
      <img id="logo" src="assets/images/logo.png" alt="">
      <div class="section-brand">
        <p>7-8-9 Settembre 2018<p>
            <p>Piscinas(Sardegna)<p>
      </div>
    </div>
    <div class="column flex">
      <form action="newsletter.php" method="post">
        <div class="form-group d-flex flex-column align-items-center">
          <div class="d-flex justify-content-center">
            <h3 class="title">Newsletter</h5>
          </div>
          <div class="d-flex justify-content-center w-25">
            <label for="em" class="col-form-label"></label>
            <input type="email" name="em" id="em" class="form-control" placeholder="Email">
          </div>
          <div class="d-flex justify-content-center py-2">
            <button type="submit" class="btn btn-primary">Iscriviti</button>
          </div>
        </div>
      </form>
    </div>
  </div>`;
  $("#footer").html(footerPage);
});
