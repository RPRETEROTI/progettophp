$(document).ready(function () {
  registerTemplate();
  $(document).on("click", ".signin", function () {
    formTemplate();
    $("#registerForm").find("button").text("SIGN IN");
    $("#registerForm").find("button").attr("data-id", "signIn");
    $("#registerForm").find("button").addClass("signbtn");
    $(".formRegister").find(".title").text("Iscriviti alla piattaforma");
  });
  $(document).on("click", ".login", function () {
    formTemplate();
    $("#registerForm").find("button").text("LOGIN");
    $("#registerForm").find("button").attr("data-id", "logIn");
    $("#registerForm").find("button").addClass("loginbtn");
    $(".formRegister").find(".title").text("Accedi alla piattaforma");
  });

  $(document).on("submit", "#registerForm", function (e) {
    e.preventDefault();
    var authenticate_id = $(this).find("button").attr("data-id");
    var userName;
    var passWord;
    userName = $(this).find("input[name=usr]").val();
    passWord = $(this).find("input[name=pwd]").val();
    var form_data = JSON.stringify($(this).serializeObject()); // this = the submitted form
    console.log("form_data", form_data);
    console.log("key", userName, passWord);
    console.log("cetrioli");
    authenticate_id === "logIn" ? login(form_data) : signin(form_data);

    // authenticate_id === "logIn" ? login(userName, passWord) : signin(form_data);
  });
});

$.fn.serializeObject = function () {
  var o = {};
  var a = this.serializeArray();
  $.each(a, function () {
    if (o[this.name] !== undefined) {
      if (!o[this.name].push) {
        o[this.name] = [o[this.name]];
      }
      o[this.name].push(this.value || "");
    } else {
      o[this.name] = this.value || "";
    }
  });
  return o;
};
// function login(usr, psw) {
//   $.ajax({
//     url:
//       "http://localhost/progetto_approcciavanzati2020/app/api/login.php?usr=" +
//       usr +
//       "&pwd=" +
//       psw,
//     method: "GET",
//     success: function (data) {
//       // successLogin(data);
//       location.href = "homepage.php";
//       console.log("dataaf", data);
//     },
//     error: function (xhr, err, exc) {
//       console.log("E stato riscontrato un errore", err);
//       console.log("E stato riscontrato un errore", xhr.responseText);
//       console.log("xhr", xhr);
//       console.log("E stato riscontrato un errore", exc);
//       var errorJsonMessage = JSON.parse(xhr.responseText);
//       failureLogin(errorJsonMessage);
//     },
//   });
// }
function login(form_data) {
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/login.php",
    method: "POST",
    contentType: "application/json",
    dataType: "json",
    data: form_data,
    success: function (result) {
      // successLogin(data);
      location.href = "homepage.php";
      console.log("dataaf", result);
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
function signin(form_data) {
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/signin.php",
    type: "POST",
    contentType: "application/json",
    dataType: "json",
    data: form_data,
    success: function (result) {
      console.log(result);
      console.log(form_data);
      location.href = "homepage.php";
    },
    error: function (xhr, err, exc) {
      console.log("hai bsagliato:", xhr.responseText);
      var errorJsonMessage = JSON.parse(xhr.responseText);
      failureLogin(errorJsonMessage);
    },
  });
  return false;
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

function failureLogin(errorJsonMessage) {
  $("#registerForm").find("input").val("");
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

function formTemplate() {
  containerHtml = `	<div class="row formRegister">
  <div class="col-12 ">
    <h3 class="title"></h3>
    <form action="#" method="post" id="registerForm" autocomplete="off">
      <div class="form-row mypage">
        <div class="form-group col-12 col-md-3 ">
          <label for="usr" class="accesso col-form-label">Username</label>
          <div>
            <input name="usr" type="text" id="usr" class="credenziali form-control" />
          </div>
        </div>
        <div class="form-group col-12 col-md-3 ">
          <label for="usr" class="accesso col-form-label">Password</label>
          <div>
            <input name="pwd" type="password" id="pwd" class="credenziali form-control" />
          </div>
        </div>
        <div class="col-12 col-md-2 containerBtn">
          <button type="submit" data-id="" class="btn"></button>
        </div>
      </div>
      <div class="form-row">
      <div class="col-12 align-items-center d-flex justify-content-center messageLogin">
      </div>
    </div>
      
    </form>
  </div>
    </form>
  </div>
</div>`;

  //   // inject to 'page-content' of our app
  $(".registration").html(containerHtml);
}
{
}
function registerTemplate() {
  containerHtml = `	

        <div class="col-6 align-items-center d-flex justify-content-center login">
          <button type="submit" class="btn loginbtn mypagebtn">LOGIN</button>
        </div>
        <div class="col-6 align-items-center d-flex justify-content-center signin">
        <button type="submit" class="btn signbtn mypagebtn">SIGN IN</button>
      </div>

`;

  // inject to 'page-content' of our app
  $(".buttonregistration").html(containerHtml);
}
