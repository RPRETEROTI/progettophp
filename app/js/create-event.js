$(document).ready(function () {
  $("#formvalidato").validate({
    rules: {
      code: {
        required: true,
      },
      name: {
        required: true,
      },
      descr: {
        required: true,
      },
      price: {
        required: true,
      },
      category: {
        required: true,
      },
      date: {
        required: true,
      },
      hour: {
        required: true,
      },
      checkcode: {
        required: true,
        equalTo: "#code",
      },
    },
    messages: {
      code: {
        required: "Inserisci il codice evento",
      },
      checkcode: {
        required: "Reinserisci il codice evento",
        equalTo: "Inserisci codice uguale",
      },
      name: {
        required: "Inserisci il nome evento",
      },
      descr: {
        required: "Inserisci la descrizione evento",
      },
      price: {
        required: "Inserisci il prezzo evento",
      },
      category: {
        required: "Inserisci la categoria evento",
      },
      date: {
        required: "Inserisci la data evento",
      },
      hour: {
        required: "Inserisci orario evento",
      },
    },
    submitHandler: function () {
      $(this).submit();
      console.log("forzo submit", form);
    },
  });
  $(document).on("submit", "#formvalidato", function (e) {
    e.preventDefault();
    if ($(this).valid()) {
      var field = $("#img").val();
      var k = field.substring(12);
      var form = $(this).serializeObject(); // this = the submitted form
      form["img"] = k;
      var form_data = JSON.stringify(form); // this = the submitted form

      console.log("form_data", form_data);
      console.log("form", form);
      console.log("k", k);
      createEvent(form_data);
    }
    // else {
    //   location.href = "buildevento.php";
    // }
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

// var field = $("#img").val();
// var k = field.substring(12);
// var form = $(this).serializeObject(); // this = the submitted form
// form["img"] = k;
// var form_data = JSON.stringify(form); // this = the submitted form

// console.log("form_data", form_data);
// console.log("form", form);
// console.log("k", k);
// createEvent(form_data);
function createEvent(form_data) {
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/create.php",
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
    },
  });
  return false;
}

// function successLogin() {
//   containerHtml = `
//   <div class="alert alert-primary" role="alert">
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">&times;</span>
//   </button>
//       SEistato loggato correttamente. Fottiti.
//           </div>`;

//   // inject to 'page-content' of our app
//   $(".message").html(containerHtml);
// }

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
