$(function () {
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
    submitHandler: function (form) {
      form.submit();
    },
  });
});
