$(document).ready(function () {
  registerTemplate(); //the function is loaded at every document ready
  $(document).on("click", ".signup", function () {
    //click event that launches function formtemplate and manipulates the elements by different method(text,attr,addClass) in dependance from the class button
    formTemplate();
    $("#registerForm").find("button").text("SIGN IN");
    $("#registerForm").find("button").attr("data-id", "signup");
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
    // submit event
    e.preventDefault();
    var authenticate_id = $(this).find("button").attr("data-id"); //find data-id to know if it is login o signup action
    var form_data = JSON.stringify($(this).serializeObject()); // on the submitted form is applied serializeobject function and then the result is a json stringified to pass into the body of api
    console.log("form_data", form_data);
    authenticate_id === "logIn" ? login(form_data) : signup(form_data); // conditional ternary
  });
});

//function to make form values to json format
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

function login(form_data) {
  //login service
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/login.php",
    type: "POST",
    contentType: "application/json", //  // content-type dei dati della request
    dataType: "json", // formato dei dati della response
    data: form_data,
    success: function (result) {
      //if ok
      //redirect
      location.href = "index.php";
      console.log("dataaf", result);
    },
    error: function (xhr, err, exc) {
      console.log("E stato riscontrato un errore", err);
      console.log("E stato riscontrato un errore", xhr.responseText);
      console.log("xhr", xhr);
      console.log("E stato riscontrato un errore", exc);
      //if not success retrieve the error and transform intop from string to json
      var errorJsonMessage = JSON.parse(xhr.responseText);
      authenticationFailure(errorJsonMessage); //invoke function of error with error message from server
    },
  });
}
function signup(form_data) {
  //signup service
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/signup.php",
    type: "POST",
    contentType: "application/json", // content-type dei dati della request
    dataType: "json", // formato dei dati della response
    data: form_data,
    success: function (result) {
      //the user is signedin
      console.log(result);
      console.log(form_data);
      //redirect

      location.href = "index.php";
    },
    error: function (xhr, err, exc) {
      console.log("hai bsagliato:", xhr.responseText);
      //if not success retrieve the error and transform intop from string to json
      var errorJsonMessage = JSON.parse(xhr.responseText);
      authenticationFailure(errorJsonMessage); //invoke function of error with error message from server
    },
  });
  return false;
}

function authenticationFailure(errorJsonMessage) {
  //the function renders the template with the error form arg errorJsonMessage
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

  // inject to 'messageLogin' of our app
  $(".messageLogin").html(containerHtml);
}

function formTemplate() {
  // the form template
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

  //   // inject to 'registration' of our app
  $(".registration").html(containerHtml);
}

function registerTemplate() {
  //the registration templatebuttons
  containerHtml = `	

        <div class="col-6 align-items-center d-flex justify-content-center login">
          <button type="submit" class="btn loginbtn mypagebtn">LOGIN</button>
        </div>
        <div class="col-6 align-items-center d-flex justify-content-center signup">
        <button type="submit" class="btn signbtn mypagebtn">SIGN IN</button>
      </div>
`;

  // inject to 'buttonregistration' of our app
  $(".buttonregistration").html(containerHtml);
}
