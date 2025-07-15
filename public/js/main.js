(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner(0);

    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 55) {
                $(".fixed-top").addClass("shadow");
            } else {
                $(".fixed-top").removeClass("shadow");
            }
        } else {
            if ($(this).scrollTop() > 55) {
                $(".fixed-top").addClass("shadow").css("top", -55);
            } else {
                $(".fixed-top").removeClass("shadow").css("top", 0);
            }
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // vegetable carousel
    $(".vegetable-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        dots: false,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>',
        ],
        responsive: {
            0: { items: 1 },
            576: { items: 1 },
            768: { items: 2 },
            992: { items: 3 },
            1200: { items: 4 },
        },
    });

    // coutdown konser
    function startCountdown(element, targetTime) {
        function updateCountdown() {
            const now = new Date().getTime();
            const distance = new Date(targetTime).getTime() - now;

            if (distance <= 0) {
                element.innerHTML = "Sedang berlangsung!";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const minutes = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            element.innerHTML = `${days}h ${hours}j ${minutes}m ${seconds}d`;
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    document.addEventListener("DOMContentLoaded", function () {
        const countdowns = document.querySelectorAll(".countdown");
        countdowns.forEach(function (element) {
            const datetime = element.getAttribute("data-datetime");
            startCountdown(element, datetime);
        });
    });

    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 2,
            },
        },
    });

    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $(".btn-play").click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $("#videoModal").on("shown.bs.modal", function (e) {
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
        });

        $("#videoModal").on("hide.bs.modal", function (e) {
            $("#video").attr("src", $videoSrc);
        });
    });

    // Product Quantity
    $(".quantity button").on("click", function () {
        var button = $(this);
        var oldValue = button.parent().parent().find("input").val();
        if (button.hasClass("btn-plus")) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find("input").val(newVal);
    });
})(jQuery);
