<script src="js/app.js"></script>
<script src="js/script.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });


$('.slider_div').owlCarousel({
        margin: 90,
        loop: true,
        dots: true,
        nav: true,
        center: true,
        autoWidth: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items:1,
                nav: false
            },
            600:{
                items:2,
                nav: false
            },
            1000:{
                items:3,
                nav: false
            }
        }
    });

$(".carousel").owlCarousel({
    // autoWidth:true,
    margin:10,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
    0:{
        items:1,
        nav: false
    },
    600:{
        items:2,
        nav: false
    },
    1000:{
        items:3,
        nav: false
    }
    }
});


$(".on_the_air").owlCarousel({
    items: 3,
    margin: 50,
    loop: true,
    responsive: {
    0:{
        items:1,
        nav: false
    },
    600:{
        items:2,
        nav: false
    },
    1000:{
        items:3,
        nav: false
    }
    }
});

$(".kopi88_app").owlCarousel({
    items: 3,
    margin: 10,
    loop: true,
    center:true,
    responsive: {
    0:{
        items:1,
        nav: false
    },
    600:{
        items:2,
        nav: false
    },
    1000:{
        items:3,
        nav: false
    }
    }
});

$(".features").owlCarousel({
    items: 3,
    autoWidth:true,
    loop: false,
    responsive: {
    0:{
        items:1,
        nav: false
    },
    600:{
        items:2,
        nav: false
    },
    1000:{
        items:3,
        nav: false
    }
    }
});

</script>

