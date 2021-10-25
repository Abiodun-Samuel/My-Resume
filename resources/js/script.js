// Animate on scroll Init
AOS.init({
    once: false,
    mirror: true,
    duration: 500,
});
(function ($) {
    ("use strict");

    // Typejs
    var typejs = document.getElementById("typed");
    var p_quote = document.getElementById("p-quote");
    if (typejs) {
        var typed = new Typed("#typed", {
            strings: ["Developer", "Designer", "Specialist"],
            smartBackspace: true,
            typeSpeed: 60,
            backSpeed: 30,
            loop: true,
            loopCount: Infinity,
        });
        var p_quote = new Typed("#p-quote", {
            strings: ["Work", "Right", "Fast"],
            smartBackspace: false,
            typeSpeed: 60,
            backSpeed: 0,
            showCursor: false,
            loop: true,
            loopCount: Infinity,
        });
    }

    //  counterUp
    const el = document.querySelectorAll(".counter");
    if (el) {
        const counterUp = window.counterUp.default;
        const callback = (entries) => {
            entries.forEach((entry) => {
                const el = entry.target;
                counterUp(el, {
                    duration: 2000,
                    delay: 16,
                });
            });
        };
        const IO = new IntersectionObserver(callback, { threshold: 1 });
        el.forEach(function (element) {
            IO.observe(element);
        });
    }

    // load gsap
    // var anim_img = document.querySelector(".anim_img");
    // if (anim_img) {
    //     var rule = CSSRulePlugin.getRule("#hero .hero-text:after");
    //     var tl = gsap.timeline({
    //         defaults: {
    //             duration: 0.6,
    //         },
    //     });
    //     tl.to(rule, {
    //         cssRule: {
    //             scaleY: 0,
    //         },
    //     })
    //         .from(".anim", {
    //             y: 50,
    //             stagger: 0.3,
    //             opacity: 0,
    //         })
    //         .from(".anim_img", {
    //             x: 50,
    //             opacity: 0,
    //         });
    // }

    var portfolioIsotope = $(".portfolio-container").isotope({
        itemSelector: ".portfolio-item",
    });

    $("#portfolio-flters li").on("click", function () {
        $("#portfolio-flters li").removeClass("filter-active");
        $(this).addClass("filter-active");

        portfolioIsotope.isotope({
            filter: $(this).data("filter"),
        });
        aos_init();
    });
    // Smooth scrolling on the navbar links
    $(".btn_one").on("click", function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            $("html, body").animate(
                {
                    scrollTop: $(this.hash).offset().top,
                },
                1000,
                "linear"
            );

            // if ($(this).parents(".navbar-nav").length) {
            //     $(".navbar-nav .active").removeClass("active");
            //     $(this).closest("a").addClass("active");
            // }
        }
    });

    // Porfolio isotope and filter
    // var portfolioIsotope = $('.portfolio-container').isotope({
    //     itemSelector: '.portfolio-item',
    //     layoutMode: 'fitRows'
    // });

    // $('#portfolio-flters li').on('click', function () {
    //     $("#portfolio-flters li").removeClass('filter-active');
    //     $(this).addClass('filter-active');

    //     portfolioIsotope.isotope({filter: $(this).data('filter')});
    // });

    // Review slider
    // $('.review-slider').slick({
    //     autoplay: true,
    //     dots: false,
    //     infinite: true,
    //     slidesToShow: 1,
    //     slidesToScroll: 1
    // });

    // Back to top button
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 1000, "linear");
        return false;
    });
})(jQuery);

// make console color white
// console._log = console.log;
// console.log = function (log) {
//     return console._log(`%c ${log}`, "color:rgba(255,255,255,0)");
// };

//prevent console script
// (function () {
//     if (!$("body").hasClass("debug_mode")) {
//         var _z = console;
//         Object.defineProperty(window, "console", {
//             get: function () {
//                 if ((window && window._z && window._z._commandLineAPI) || {}) {
//                     throw "Go away motherfucker!";
//                 }
//                 return _z;
//             },
//             set: function (val) {
//                 _z = val;
//             },
//         });
//     }
// })();

// Navbar scroll effects
window.onscroll = function () {
    myFunction();
};
var nav = document.getElementById("navbar");
var nav_links = document.querySelectorAll(".nav-link");
console.log(nav_links);
var sticky = nav.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        nav.classList.add("sticky");
        nav_links.forEach(function (nav) {
            nav.classList.add("sticky-nav");
        });
    } else {
        nav.classList.remove("sticky");
        nav_links.forEach(function (nav) {
            nav.classList.remove("sticky-nav");
        });
    }
}

// $("#contact_form").on("submit", function (e) {
//     e.preventDefault();

//     let url = $("#form_route").val();
//     let message = $("#message").val();
//     let email = $("#email").val();
//     let name = $("#name").val();
//     let subject = $("#subject").val();

//     $.ajax({
//         url: url,
//         type: "POST",
//         data: {
//             _token: "{{ csrf_token() }}",
//             message: message,
//             email: email,
//             name: name,
//             subject: subject,
//         },
//         success: function (response) {
//             console.log(response);
//         },
//         error: function (response) {
//             var note = "<p>" + response.responseJSON.errors.subject[0] + "</p>";
//             $("#errors").html(note);
//         },
//     });
// });
