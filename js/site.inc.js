// JavaScript Document

$(document).ready(function(){
  $('div.loader').fadeOut();

  $(".trigger").click(function(){
      if(!$(this).hasClass("active")){
        $(this).addClass('active');
        $(".navigation").slideDown('slow');
      }else{
        $(this).removeClass('active');
        $(".navigation").slideUp('slow');
      }

      return false;
  });
});