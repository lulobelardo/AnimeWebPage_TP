$(document).ready(function () {
  $(".mostrar").hide();
  $("#div_demo0").show();
  $(".barra").click(function (e) {
    $(".mostrar").hide();
    $("#div_" + e.target.id).show();
  });
});
