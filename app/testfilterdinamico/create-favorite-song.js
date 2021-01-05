$(document).ready(function () {
  $(document).on("submit", "#formsong", function () {
    // get data from the read service
    var form_data = $(this).serializeObject(); // this = the submitted form
    console.log("form_data", form_data);
    $.ajax({
      url:
        "http://localhost/progetto_approcciavanzati2020/app/api/createSong.php",
      type: "POST",
      dataType: "json",
      data: form_data,
      success: function (result) {
        console.log("result", result);
        console.log(form_data);
        // html for listing products
        positiveFeedbackSong(); // data = server's response (= list of artists, as JSON object)
      },
      error: function (xhr, err, exc) {
        // show error to console
        console.log(xhr, err, exc);
        console.log("capra");
        negativeFeedbackSong();
        //console.warn(xhr.responseText);
        console.log(form_data);
      },
    });
    return false;
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

// product list html
function positiveFeedbackSong() {
  containerHtml = `<div class="alert alert-primary" role="alert">
      Hai aggiunto corettamente la canzone. <br />
      Vedi nella sezione canzoni della tua mypage
    </div>`;

  // inject to 'page-content' of our app
  $("#feedback").html(containerHtml);
}

function negativeFeedbackSong() {
  containerHtml = `<div class="alert alert-primary" role="alert">
      C'è stato un problema. Ritenta
    </div>`;

  // inject to 'page-content' of our app
  $("#feedback").html(containerHtml);
}
