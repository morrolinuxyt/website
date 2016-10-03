$(document).ready(function(){
  $(".nav_button").click(function(){
    $(".nav_mobile").slideToggle();
  });
  $(".open").click(function(){
    $(this).find(".to_close").slideToggle();
    $(this).find(".to_open").slideToggle();
    var color = $(this).css("background-color");
    if (color === "rgb(205, 220, 57)") {
      $(this).css("background-color", "#E0E0E0");
      $(this).css("opacity", "1");
    } else {
      $(this).css("background-color", "#CDDC39");
      $(this).css("opacity", "0.8");
    }
  });
});
