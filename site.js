$(function() {

  $('.date').hide(0);
  $('.genre').hide(0);
  $('.pays').hide(0);
  $('.profil_container').hide(0);
  $('#genre').click(function() {

    $('.genre').slideToggle(600);
  });
  $('#date').click(function() {

    $('.date').slideToggle(600);
  });
  $('#pays').click(function() {

    $('.pays').slideToggle(600);
  });
  $('.profil').click(function() {

    $('.profil_container').slideToggle(600);
  });
  $('#head_container').click(function() {

    $('.profil_container').slideUp(600);
  });
  $('article').click(function() {

    $('.profil_container').slideUp(600);
  });
});
