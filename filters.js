$(document).ready(function () {
  //store price filter data
  if (localStorage.price) $(".price").val(localStorage.price);
  else {
    localStorage.setItem("price", "noFilter");
    $(".price").val("noFilter");
  }
  $(".price").on("change", function () {
    localStorage.setItem("price", $(this).val());
  });

  //store region data
  if (localStorage.region) $(".region").val(localStorage.region);
  else {
    localStorage.setItem("region", "all");
    $(".region").val("all");
  }
  $(".region").on("change", function () {
    localStorage.setItem("region", $(this).val());
  });
});
