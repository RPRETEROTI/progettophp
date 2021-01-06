$(document).ready(function () {
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
      successLogin(data);
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

function failureLogin(errorJsonMessage) {
  containerHtml =
    `<div class="alert alert-primary" role="alert">
      C'è stato un problema. ` +
    errorJsonMessage["message"] +
    `
    </div>`;

  // inject to 'page-content' of our app
  $(".message").html(containerHtml);
}

//data-id="` +
// val.dataId +
// `">
