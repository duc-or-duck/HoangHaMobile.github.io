$(function () {
    $('.show').click(function() {
      $('.toast').addClass('on');
    });
  
    $('.close').click(function() {
      $('.toast').removeClass('on');
    });
  });