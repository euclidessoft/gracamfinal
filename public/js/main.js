(function ($) {
    "use strict";
    // Sticky Navbar
    $(window).scroll(function () {
        // (document.documentElement.scrollHeight - window.innerHeight)

        if ($(this).scrollTop() > 150) {

            $('#cc-top-bar').addClass('cc-fixe');
        } else {
            $('#cc-top-bar').removeClass('cc-fixe');
        }
    });


})(jQuery);

/*let limitBottom = document.documentElement.offsetHeight- window.innerHeight
window.addEventListener("", function(){
    if(document.documentElement.scrollTop == 0){
        console.log("Window scroll  is at the top")

    }
    if(document.documentElement.scrollTop == limitBottom){
        console.log("Window scroll  is at the bottom")

    }
})*/

