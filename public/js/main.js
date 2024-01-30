
/*************Start Product image*************/
var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");

for (var i = 0; i < SmallImg.length; i++) {
    SmallImg[i].onclick= function(event) {
        ProductImg.src = event.target.src;
    };
}
/*************End Product image*************/

(function ($) {
    "use strict";

    //Loading
    /*jQuery(window).on("load", function () {
        jQuery(".loader").fadeOut(500);
    });*/

    // Initiate the wowjs
    new WOW().init();

    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
            $('.back-to-top').css('display','flex');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 150, 'easeInOutExpo');
        return false;
    });

    // Change lang
    var url = $(location).attr("href");
    var fr = url.indexOf("/fr/");
    var lang = $('#changelang');
    if (fr !== -1) {
        lang.html('EN');

    } else {
        lang.html('FR');
    }
    lang.click(function () {
        if (fr !== -1) {
            url = url.replace("/fr/", "/en/");
        } else {
            url = url.replace("/en/", "/fr/");
        }
        document.location.href = url;
    });

    $('#gallery').photobox('a', {thumbs: true}, callback);
    // using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
    setTimeout(window._photobox.history.load, 1000);

    function callback() {
        console.log('callback for loaded content:', this);
    }

})(jQuery);

function upload() {
    $('#candidature_cv').trigger('click');
    return false;
}

/*function label_input() {
    $('#choice').html(document.getElementById('candidature_cv').value);
}*/

const myCarouselElement = document.getElementById('header-carousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 5000,
    pause: false
})