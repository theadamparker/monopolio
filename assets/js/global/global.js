// global scripts

// mobile nav

$('#mobileNavButton').click(function() {
  $(this).toggleClass('active');
  $('.mainNav').toggleClass('open')
})

// Age overlay scripts

$(document).ready(function () {
  if($('.ageOverlay')) {
    $('body').addClass('locked')
  }
})

$('#over21').click(function() {
  $('body').removeClass('locked');
  $('.ageOverlay').fadeOut();
})

$('#under21').click(function() {
  window.location.href = 'http://tacombi.com/';
})

// end age overlay scripts

$('.logo').click(function() {
  $('html, body').stop().animate({
      'scrollTop': '0'
  }, 500, 'swing')
})

var offset = -40; // for jump links

$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('.mainNav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('.mainNav a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+offset
        }, 500, 'swing', function () {
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    var ourBeers = $('#cerveza-de-verdad');
    $('.mainNav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= (scrollPos - offset) && (refElement.position().top + refElement.height() + offset) > scrollPos) {
            $('.mainNav a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });

    if(scrollPos > (ourBeers.position().top + offset - 1)) {
      $('.header').removeClass('transparent')
    } else {
      $('.header').addClass('transparent')
    }

}
