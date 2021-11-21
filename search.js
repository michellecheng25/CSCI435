var searchItem = "";
var cheapToExpensive = false;
var expensiveToCheap = false;
var region = "All Regions";

$(document).ready(function () {
  $(".priceFilter > .btn").click(function () {
    $(".btn").removeClass("active");
    $(this).addClass("active");
  });

  $("#cheapToExpensive").click(function () {
    cheapToExpensive = true;
    expensiveToCheap = false;
    console.log($(this));
  });

  $("#expensiveToCheap").click(function () {
    expensiveToCheap = true;
    cheapToExpensive = false;
  });

  $("#noFilter").click(function () {
    var cheapToExpensive = false;
    var expensiveToCheap = false;
  });

  $("#search").click(function () {
    searchItem = $("#searchbar").val();
    console.log(searchItem);
    if (cheapToExpensive && !expensiveToCheap) console.log("cheapToExpensive");
    else if (!cheapToExpensive && expensiveToCheap)
      console.log("expensiveToCheap");
    else console.log("no Filter");
    console.log(region);
  });
});
