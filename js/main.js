const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 768px)").matches) {
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


$('.owl-carousel').owlCarousel({
    autoPlay: 1000, 
    autoplayHoverPause: true,
    items: 3,
    center: true,
    dots: true,
    loops: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        1000: {
            items: 3
        },
        2000: {
            items: 5
        }
    },
    navText: ['<i class = "fa fa-arrow-left"></i>', '<i class = "fa fa-arrow-right"></i>']
});

