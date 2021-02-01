$(document).ready(function () {
  loadFormBuilder();

  //validatore jquery per i dati immessi nel form. Creazione di regole per ogni campo
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
      //Se il form risulta validato viene lanciata l'invio del form(submit)
      console.log("submit", $(this));
      var form = $(this.currentForm)[0]; // Gnero un oggetto/array con i campi del form validato
      var formData = new FormData(form); //generato l'oggetto formData da passare al body dell'api. Si è scelta questa strada dato che il form ha tipo multipart/form-data vista la presenza di un file
      console.log("formData", formData);
      //viene avviata la funzione di creazione con arg. il formdata
      createEvent(formData);
    },
  });
  $(document).on("submit", "#formvalidato", function (e) {
    //si previene behaviour button per fare attivare il validatore
    e.preventDefault();
  });
});

//funzione che carica il form al caricamnto pagina
function loadFormBuilder() {
  containerHtml = `<div class="row m-0">
  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <h3 class="title">Crea il tuo prossimo evento</h2>
  </div>
</div>`;
  containerHtml += `
<form action="#" method="post"  enctype: "multipart/form-data" id="formvalidato" enctype="multipart/form-data">
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
          <input type="text" class="form-control" id="code" name="code" maxlength="8" placeholder="Codice" aria-describedby="passwordHelpBlock">
      </div>
      <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
          <label for="checkcode"> Conferma codice*</label>
          <input type="text" class="form-control" id="checkcode" name="checkcode" maxlength="8" placeholder="Conferma Codice" aria-describedby="passwordHelpBlock">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-12 col-sm-12 ">
          <label for="descr" class="col-form-label">Descrizione*</label>
          <!-- <input name="nome" type="text" id="nome" class="form-control" placeholder="" value=""> -->
          <textarea class="form-control" id="descr" name="descr" rows="3" maxlength="100"></textarea>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-12 col-sm-4">
          <label for="price">Prezzo*</label>
          <input type="number" class="form-control" id="price" min="1" max="99" name="price" placeholder="Price" aria-describedby="passwordHelpBlock">
      </div>
      <div class="form-group col-12 col-sm-12 col-md-8 ">
          <label for="img">Immagine</label>
          <div class="imgbutton">Carica</div>
          <input type="file" class="form-control" id="uploadimg" name="uploadimg" style="bottom: 2px; position:relative;" placeholder="inserisci img">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-12 col-sm-12">
          <label for="category"> Scegli categoria:*</label>
          
          <div class="flex row m-0">
          <div class="form-check col-8 col-lg-7 offset-lg-1">
              <input class="form-check-input" type="radio" name="category" id="a1" value="a1">
              <label class="form-check-label" for="a1">MUSIC</label>
          </div>
          <div class="form-check col-4">
              <input class="form-check-input" type="radio" name="category" id="c3" value="c3">
              <label class="form-check-label" for="c3">CULTURE</label>
          </div>
          </div>

           <div class="flex row m-0">
          <div class="form-check col-8 col-lg-7 offset-lg-1">
              <input class="form-check-input" type="radio" name="category" id="b2" value="b2">
              <label class="form-check-label" for="b2">SPORT</label>
          </div>
          <div class="form-check col-4">
              <input class="form-check-input" type="radio" name="category" id="d4" value="d4">
              <label class="form-check-label" for="d4">CUCINA</label>
          </div>
          </div>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-12  col-md-5 offset-md-1">
          <label for="indirizzo">Data*</label>
          <input type="date" class="form-control" id="date" name="date" placeholder="GG/MM/AA">
      </div>
      <div class="form-group col-12 col-md-5">
          <label for="hour">Ora*</label>
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
  // inietto in 'registration' dell'app
  $(".registration").html(containerHtml);
}
//funzione legata al servizio di creazione evento.
//type:POST
function createEvent(formData) {
  $.ajax({
    url: "http://localhost/progetto_approcciavanzati2020/app/api/create.php",
    type: "POST",
    //enctype: "multipart/form-data",
    dataType: "json",
    processData: false, //messi a false per bloccare formattazione jquery
    contentType: false, //messi a false per formattazione jquery
    data: formData,
    success: function (result) {
      // console.log(result);
      console.log(formData);
      //se l'ajax ha success sono rediretto in index.php
      location.href = "index.php";
    },
    error: function (xhr, err, exc) {
      // console.log(xhr.responseText);
      // console.log(err);
      //se va in error viene salvato il messaggio derivante da server e inserito come arg della funzione failureLogin
      var errorJsonMessage = JSON.parse(xhr.responseText);
      // location.href = "eventcreate.php";
      failureCreation(errorJsonMessage);
    },
  });
  return false;
}

//viene generata modale con errore dell'api
function failureCreation(errorJsonMessage) {
  $(document).on("click", ".close", function () {
    $("#myModal").hide();
    $("#code").val("");
    $("#checkcode").val("");
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

  // inietto in 'errorModal' dell'app
  $(".errorModal").html(containerHtml);
}
