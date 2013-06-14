/*jslint browser: true*/
/*global $, jQuery, moment*/
// This is a manifest file that'll be compiled into application.min.js


$(document).ready(function(){

  //Set the default skin to skin-one, unless there is a cookie set
  $(".btn-1").addClass("active");
  $(".skin").addClass("skin-one");

  //Rig up a skin switcher for the buttons
  $(".btn-1").click(function() {
    $(".skin").addClass("skin-one").removeClass("skin-two skin-three skin-four");
    //Set a cookie so the skin doesn't change on page-refresh
    document.cookie = "skin=skin-one";
  });
  $(".btn-2").click(function() {
    $(".skin").addClass("skin-two").removeClass("skin-one skin-three skin-four");
    document.cookie = "skin=skin-two";
  });
  $(".btn-3").click(function() {
    $(".skin").addClass("skin-three").removeClass("skin-one skin-two skin-four");
    document.cookie = "skin=skin-three";
  });
  $(".btn-4").click(function() {
    $(".skin").addClass("skin-four").removeClass("skin-one skin-two skin-three");
    document.cookie = "skin=skin-four";
  });

});