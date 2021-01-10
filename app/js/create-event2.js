$(document).ready(function () {
  loadFormBuilder();
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
      console.log("forzo submit", $(this));
      var form = $(this.currentForm)[0]; // You need to use standard javascript object here
      var formData = new FormData(form);
      console.log("formData", formData);
      createEvent(formData);
    },
  });
  $(document).on("submit", "#formvalidato", function (e) {
    e.preventDefault();
    // if ($(this).valid()) {
    //   var form = $(this)[0]; // You need to use standard javascript object here
    //   var formData = new FormData(form);
    //   console.log("formData", formData);
    //   createEvent(formData);
    //   // var field = $("#uploadimg").val();
    //   // var k = field.substring(12);
    //   // var form = $(this).serializeObject(); // this = the submitted form
    //   // // form["img"] = k;
    //   // var form_data = JSON.stringify(form); // this = the submitted form

    //   // console.log("form_data", form_data);
    //   // console.log("form", form);
    //   // console.log("k", k);
    // }
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

function loadFormBuilder() {
  containerHtml = `<div class="row">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="title">Crea il tuo prossimo evento</h2>
  </div>
</div>`;
  containerHtml += `
<form action="#" method="post" id="formvalidato" enctype="multipart/form-data">
  <div class="row m-3">
      <div class="offset-1 offset-md-3 col-11 col-md-7 col-lg-6 ">`;

  containerHtml += `<div class="form-row">
      <div class="form-group col-12 col-sm-12">
          <label for="name" class="col-form-label">Nome*</label>
          <input name="name" type="text" id="name" class=" credenziali form-control" placeholder="" maxlength="100" value="" aria-describedby="passwordHelpBlock">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
          <label for="code">Codice*</label>
          <input type="text" class="form-control" id="code" name="code" placeholder="Codice" aria-describedby="passwordHelpBlock">
      </div>
      <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
          <label for="checkcode"> Conferma codice*</label>
          <input type="text" class="form-control" id="checkcode" name="checkcode" placeholder="Conferma Codice" aria-describedby="passwordHelpBlock">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-12 col-sm-12 ">
          <label for="descr" class="col-form-label">Descrizione</label>
          <!-- <input name="nome" type="text" id="nome" class="form-control" placeholder="" value=""> -->
          <textarea class="form-control" id="descr" name="descr" rows="3" maxlength="100"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12 col-sm-4">
          <label for="price">Prezzo*</label>
          <input type="number" class="form-control" id="price" name="price" placeholder="Price" aria-describedby="passwordHelpBlock">
      </div>
      <div class="form-group col-12 col-sm-12 col-md-8 ">
          <label for="img">Immagine*</label>
          <div class="testt">Carica</div>
          <input type="file" class="form-control" id="uploadimg" name="uploadimg" style="bottom: 2px; position:relative;" placeholder="inserisci img">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-12 col-sm-12">
          <label for="category"> Scegli categoria:*</label>
          <div class="form-check form-check-inline ml-2">
              <input class="form-check-input" type="radio" name="category" id="a1" value="a1">
              <label class="form-check-label" for="a1">MUSIC</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="category" id="c3" value="c3">
              <label class="form-check-label" for="c3">CULTURE</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="category" id="b2" value="b2">
              <label class="form-check-label" for="b2">SPORT</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="category" id="d4" value="d4">
              <label class="form-check-label" for="d4">CUCINA</label>
          </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-9 col-sm-4 col-md-5 offset-md-1">
          <label for="indirizzo">Data</label>
          <input type="date" class="form-control" id="date" name="date" placeholder="GG/MM/AA">
      </div>
      <div class="form-group col-3 col-sm-3 col-md-5">
          <label for="hour">Ora</label>
          <input type="time" class="form-control" id="hour" name="hour" placeholder="00">
      </div>
    </div>
    <div class="form-row mt-4">
      <div class=" col-12 d-flex justify-content-center">
          <button type="submit" class="btn createbtn" style="background-color:#039ed8">CREA</button>
      </div>
    </div>`;
  containerHtml += ` </div>
    </div>
    </form>`;
  // inject to 'page-content' of our app
  $(".registration").html(containerHtml);
}
function createEvent(formData) {
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/create2.php",
    type: "POST",
    // contentType: "multipart/form-data",
    // dataType: "json",
    processData: false,
    contentType: false,
    data: formData,
    success: function (result) {
      console.log(result);
      console.log(formData);
      location.href = "homepage.php";
    },
    error: function (xhr, err, exc) {
      console.log(xhr.responseText);
      console.log(err);
      var errorJsonMessage = JSON.parse(xhr.responseText);
      failureLogin(errorJsonMessage);
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
  // $(".modal").css({ opacity: "1", display: "block" });
  // $("#myModal").modal("show");
  $(document).on("click", ".close", function () {
    $("#myModal").hide();
  });

  containerHtml =
    `
    <div class="modal fade show" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Errore nel caricamento form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Retry. ` +
    errorJsonMessage["message"] +
    `
        </div>
      </div>
    </div>
  </div>`;

  // inject to 'page-content' of our app
  $(".errorModal").html(containerHtml);
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
