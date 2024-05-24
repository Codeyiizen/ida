$(document).ready(function () {
  if (/Edge\/\d./i.test(navigator.userAgent)) {
    $('html').addClass('ie');
  };

  // Main-menu
  $('#main-menu').meanmenu({
    meanScreenWidth: "991",
    meanMenuContainer: '.mobile-menu',
  });

  // when the modal is opened autoplay it  
  $('#myModal').on('shown.bs.modal', function (e) {
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
  })


  // stop playing the youtube video when I close the modal
  $('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src', '');
  });
  // hide #back-top first
  $("#back-to-top").hide();

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 500) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }

    //        var scroll = $(window).scrollTop();
    //        if (scroll >= 50) {
    //            $("body").addClass("scroll")
    //        } else {
    //            $("body").removeClass("scroll");
    //        }
  });

  $('#back-to-top').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});







    





