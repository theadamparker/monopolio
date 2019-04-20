// global scripts

$('#over21').click(function() {
  $('.ageOverlay').fadeOut();
})

$('#under21').click(function() {
  window.location.href = 'http://tacombi.com/';
})

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
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
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
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('.mainNav a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });

    if(scrollPos > ourBeers.position().top) {
      $('.header').removeClass('transparent')
    } else {
      $('.header').addClass('transparent')
    }

}
