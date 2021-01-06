$(document).ready(function () {
  registrationTemplate();

  $(document).on("mouseover", ".login", function () {
    $(this).addClass("backgr");
    $(".signin :input").prop("disabled", true);
  });
  $(document).on("mouseout", ".login", function () {
    $(this).removeClass("backgr");
    $(".signin :input").prop("disabled", false);
  });
  $(document).on("mouseover", ".signin", function () {
    $(this).addClass("backgr");
    $(".login :input").prop("disabled", true);
  });
  $(document).on("mouseout", ".signin", function () {
    $(this).removeClass("backgr");
    $(".login :input").prop("disabled", false);
  });
  $(document).on("submit", "#loginForm", function (e) {
    e.preventDefault();
    var userName;
    var passWord;
    userName = $(this).find("input[name=usr]").val();
    passWord = $(this).find("input[name=pwd]").val();

    console.log("key", userName, passWord);
    console.log("cetrioli");
    login(userName, passWord);
  });
});

function login(usr, psw) {
  $.ajax({
    url:
      "http://localhost/progetto_approcciavanzati2020/app/api/login.php?usr=" +
      usr +
      "&pwd=" +
      psw,
    method: "GET",
    success: function (data) {
      // successLogin(data);
      location.href = "homepage.php";
      console.log("dataaf", data);
    },
    error: function (xhr, err, exc) {
      console.log("E stato riscontrato un errore", err);
      console.log("E stato riscontrato un errore", xhr.responseText);
      console.log("xhr", xhr);
      console.log("E stato riscontrato un errore", exc);
      var errorJsonMessage = JSON.parse(xhr.responseText);
      failureLogin(errorJsonMessage);
    },
  });
}
function successLogin() {
  containerHtml = `
  <div class="alert alert-primary" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
      SEistato loggato correttamente. Fottiti. 
          </div>`;

  // inject to 'page-content' of our app
  $(".message").html(containerHtml);
}
{
  /* <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> */
}
function failureLogin(errorJsonMessage) {
  $("#loginForm").find("input").val("");
  containerHtml =
    `<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> Retry. ` +
    errorJsonMessage["message"] +
    `
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">  <i class="fas fa-times"></i></span>
  </button>
    
    </div>`;

  // inject to 'page-content' of our app
  $(".messageLogin").html(containerHtml);
}

function registrationTemplate() {
  containerHtml = `	<div class="row">
  <div class="col-6 login">
    <h3 class="title">Accedi al tuo profilo</h3>
    <form action="#" method="post" id="loginForm" autocomplete="off">
      <div class="form-row mypage">
        <div class="form-group col-12 col-md-5 ">
          <label for="usr" class="accesso col-form-label">Username</label>
          <div>
            <input name="usr" type="text" id="usr" class="credenziali form-control" />
          </div>
        </div>
        <div class="form-group col-12 col-md-5 ">
          <label for="usr" class="accesso col-form-label">Password</label>
          <div>
            <input name="pwd" type="password" id="pwd" class="credenziali form-control" />
          </div>
        </div>
      </div>
      <div class="form-row">
      <div class="col-12 align-items-center d-flex justify-content-center messageLogin">
      </div>
    </div>
      <div class="form-row">
        <div class="col-12 align-items-center d-flex justify-content-center login">
          <button type="submit"  class="btn mypagebtn">LOGIN</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-6 signin">
    <h3 class="title">Crea il tuo profilo</h3>
    <form action="#" method="post" id="loginForm"  autocomplete="off">
      <div class="form-row mypage">
        <div class="form-group col-12 col-md-5 ">
          <label for="usr" class="accesso col-form-label">Username</label>
          <div>
            <input name="usr" type="text" id="usr" class="credenziali form-control" />
            <small id="passwordHelpBlock" class="usrn message form-text"></small>
          </div>
        </div>
        <div class="form-group col-12 col-md-5 ">
          <label for="usr" class="accesso col-form-label">Password</label>
          <div>
            <input name="pwd" type="password" id="pwd" class="credenziali form-control" />
            <small id="passwordHelpBlock" class="usrn message form-text"></small>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-12 align-items-center d-flex justify-content-center">
          <button type="submit" class="btn mypagebtn">SIGN IN</button>
        </div>
      </div>
    </form>
  </div>
</div>`;

  // inject to 'page-content' of our app
  $(".registration").html(containerHtml);
}
