$(document).ready(function () {
  $(document).on("submit", "#formsong", function () {
    // first par = event; second (optional) par = selector (in this case the id); last par = event handler

    // get form data
    var form_data = JSON.stringify($("#formsong").serializeObject());
    console.log("form_data", form_data);
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
