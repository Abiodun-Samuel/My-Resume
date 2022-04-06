// Animate on scroll Init
AOS.init({
    once: false,
    mirror: true,
    duration: 500,
});
(function ($) {
    ("use strict");

    // display year at footer
    var get_year = document.getElementById("get-year");
    get_year.innerHTML = new Date().getFullYear();

    var mainWindow = $(window),
        mainHeader = $("header"),
        mainBody = $("body"),
        scrollUp = $(".scrollup"),
        mainPreloader = $("#preloader"),
        mainStatus = $("#centerdiv");

    mainWindow.on("load", function () {
        // Preloader
        mainStatus.fadeOut();
        mainPreloader.delay(350).fadeOut("slow");
        mainBody.delay(350).css({
            overflow: "hidden",
        });

        // Scroll to Top
        mainWindow.on("scroll", function () {
            if ($(this).scrollTop() > 98) {
                mainHeader.addClass("sticky");
                mainBody.addClass("sticky");
                scrollUp.show();
            } else {
                mainHeader.removeClass("sticky");
                mainBody.removeClass("sticky");
                scrollUp.hide();
            }
        });

        // Click event to scroll to top
        scrollUp.on("click", function () {
            $("html, body").animate(
                {
                    scrollTop: 0,
                },
                800
            );
            return false;
        });
    });

    //  counterUp
    const el = document.querySelectorAll(".counter");
    if (el) {
        const counterUp = window.counterUp.default;
        const callback = (entries) => {
            entries.forEach((entry) => {
                const el = entry.target;
                counterUp(el, {
                    duration: 500,
                    delay: 10,
                });
            });
        };
        const IO = new IntersectionObserver(callback, { threshold: 1 });
        el.forEach(function (element) {
            IO.observe(element);
        });
    }

    $(".about-skill").slick({
        slidesToShow: 8,
        slidesToScroll: 2,
        arrows: false,
        dots: false,
        centerMode: true,
        autoplay: true,
        centerPadding: "10px",
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 2,
                    centerPadding: "10px",
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 4.5,
                    slidesToScroll: 1,
                    centerPadding: "10px",
                },
            },
        ],
    });

    $(".counter-skill").slick({
        slidesToShow: 6,
        slidesToScroll: 2,
        arrows: false,
        dots: false,
        centerMode: true,
        autoplay: true,
        centerPadding: "10px",
        pauseOnFocus: false,
        pauseOnHover: false,
        autoplaySpeed: 1000,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 2,
                    centerPadding: "10px",
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                    centerPadding: "10px",
                },
            },
        ],
    });

    var base_url = $("#base_url").val();

    // let message = $("#message").val();
    // let email = $("#email").val();
    // let name = $("#name").val();
    // let subject = $("#subject").val();

    // $.ajax({
    //     url: `${base_url}/blog/blog_api`,
    //     type: "GET",
    //     success: function (response) {
    //         // console.log(response[0]["likes"]);
    //         // $(".test").html(response[0]["likes"]);
    //     },
    //     error: function (err) {
    //         // console.log(err);
    //         // var note = "<p>" + response.responseJSON.errors.subject[0] + "</p>";
    //         // $("#errors").html(note);
    //     },
    // });

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

    // Portfolio details gallery display
    // venobox
    var veno = document.querySelector(".venobox");
    if (veno) {
        $(".venobox").venobox({
            numeratio: true,
            autoplay: true,
            arrowsColor: "#d58943",
            numerationPosition: "bottom",
            spinner: "cube-grid",
            spinColor: "#d58943",
            closeColor: "#d58943",
        });
    }
})(jQuery);

// (function () {
//     // make console color white
//     console._log = console.log;
//     console.log = function (log) {
//         return console._log(`%c ${log}`, "color:rgba(255,255,255,0)");
//     };

//     //prevent console script
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
