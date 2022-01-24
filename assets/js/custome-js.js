jQuery(document).ready(function($) {

    // Fancy Box
    $('[data-fancybox="general"]').fancybox({
        //slide effect- zoom-in-out
        transitionEffect: "slide",
        loop: true,

        buttons: [
            //'slideShow',
            //'share',
            'zoom',
            'fullScreen',
            'close'
            //'download'
        ],
        thumbs: {
            autoStart: false
        }
    });
    $('[data-fancybox="floor"]').fancybox({
        //slide effect- zoom-in-out
        transitionEffect: "slide",
        loop: true,

        buttons: [
            //'slideShow',
            //'share',
            'zoom',
            'fullScreen',
            'close'
            //'download'
        ],
        thumbs: {
            autoStart: false
        }
    });
    $('[data-fancybox="map2"]').fancybox({
        //slide effect- zoom-in-out
        transitionEffect: "slide",
        loop: true,

        buttons: [
            //'slideShow',
            //'share',
            'zoom',
            'fullScreen',
            'close'
            //'download'
        ],
        thumbs: {
            autoStart: false
        }
    });

    $('[data-fancybox="map"]').fancybox({
        //slide effect- zoom-in-out
        transitionEffect: "slide",
        loop: true,

        buttons: [
            //'slideShow',
            //'share',
            'zoom',
            'fullScreen',
            'close'
            //'download'
        ],
        thumbs: {
            autoStart: false
        }
    });

    // carousel
    $('.gall-carousel').owlCarousel({
        //animateOut: 'fadeOut',
        //animateIn: 'fadeIn',
        items: 3,
        loop: true,
        margin: 25,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        nav: true,
        dots: false,
        navText: ["<img src='assets/images/left.png'>", "<img src='assets/images/right.png'>"],
        responsive: {
            0: {
                items: 1,
                margin: 0,
            },
            768: {
                items: 3
            }
        }
    });

    $('.gall-carousel2').owlCarousel({
        //animateOut: 'fadeOut',
        //animateIn: 'fadeIn',
        items: 3,
        loop: true,
        margin: 25,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        nav: true,
        dots: false,
        navText: ["<img src='assets/images/left.png'>", "<img src='assets/images/right.png'>"],
        responsive: {
            0: {
                items: 1,
                margin: 0,
            },
            768: {
                items: 3
            }
        }
    });

    var owl = $('.view-carousel');
    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 25,
        autoplay: false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ["<img src='assets/images/left.png'>", "<img src='assets/images/right.png'>"],

        responsive: {
            0: {
                items: 1,
                margin: 0,
            },
            768: {
                items: 1
            }
        }
    });

    //Menu Smooth Scroll
    $(".m-link").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                // Add hash (#) to URL when done scrolling (default click behavior)
                // window.location.hash = hash;
            });
        } // End if
    });


});