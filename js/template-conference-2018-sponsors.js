function scale() {
  if ($(window).width() > 568) {
      $('body > .header').height($('.banner').height());
  } else {
    $('body > .header').css('height', 'auto');
  }

}

$(document).ready(function() {
  scale();

  $(window).resize(function() {
    scale();
  })
});
