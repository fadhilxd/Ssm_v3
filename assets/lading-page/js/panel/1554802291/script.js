$(document).ready(function () {
    var letCollapseWidth = false,
        paddingValue = 30,
        sumWidth = $('.navbar-right-block').width() + $('.navbar-left-block').width() + $('.navbar-brand').width() + paddingValue;

    $(window).on('resize', function () {
        navbarResizerFunc();
    });

    var navbarResizerFunc = function navbarResizerFunc() {
        if (sumWidth <= $(window).width()) {
            if (letCollapseWidth && letCollapseWidth <= $(window).width()) {
                $('#navbar').addClass('navbar-collapse');
                $('#navbar').removeClass('navbar-collapsed');
                $('nav').removeClass('navbar-collapsed-before');
                letCollapseWidth = false;
            }
        } else {
            $('#navbar').removeClass('navbar-collapse');
            $('#navbar').addClass('navbar-collapsed');
            $('nav').addClass('navbar-collapsed-before');
            letCollapseWidth = $(window).width();
        }
    };

    if ($(window).width() >= 768) {
        navbarResizerFunc();
    }
});


<!-- ABs Custom Js -->
  $(window).scroll(function() {    
      var scroll = $(window).scrollTop();

      if (scroll >= 50) {
          $("nav.navbar").addClass("darkNav");
      } else {
          $("nav.navbar").removeClass("darkNav");
      }
  });

  $("#guest-nav-btn").click(function(){
      $("#navbar").toggleClass("nav-revealed");
  });

  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });


  $(".serNameButtons").find("a").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
      scrollTop: $(section).offset().top - 140
    }, 1500);
  });