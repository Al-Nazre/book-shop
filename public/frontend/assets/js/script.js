$(function () {
    "use strict";

    //**  Carousel Functions Here **//
    function carousel() {
        $(".carousel").not(".slick-initialized").each(function () {
            var $this = $(this);

            var slidesPerViewXs = $this.data("xs-items");
            var slidesPerViewSm = $this.data("sm-items");
            var slidesPerViewMd = $this.data("md-items");
            var slidesPerViewLg = $this.data("lg-items");
            var slidesPerViewXl = $this.data("xl-items");
            var slidesPerView = $this.data("items");

            var slidesCenterMode = $this.data("center");
            var slidesArrows = $this.data("arrows");
            var slidesDots = $this.data("dots");
            var slidesRows = $this.data("rows");
            var slidesAutoplay = $this.data("autoplay");
            var slidesFade = $this.data("fade");
            var asNavFor = $this.data("nav-for");
            var infinite = $this.data("infinite");
            var focusOnSelect = $this.data("focus-select");
            var adaptiveHeight = $this.data("auto-height");
            var centerPadding = $this.data("center-padding");


            var vertical = $this.data("vertical");
            var verticalXs = $this.data("vertical-xs");
            var verticalSm = $this.data("vertical-sm");
            var verticalMd = $this.data("vertical-md");
            var verticalLg = $this.data("vertical-lg");
            var verticalXl = $this.data("vertical-xl");

            slidesPerView = !slidesPerView ? 1 : slidesPerView;
            slidesPerViewXl = !slidesPerViewXl ? slidesPerView : slidesPerViewXl;
            slidesPerViewLg = !slidesPerViewLg ? slidesPerViewXl : slidesPerViewLg;
            slidesPerViewMd = !slidesPerViewMd ? slidesPerViewLg : slidesPerViewMd;
            slidesPerViewSm = !slidesPerViewSm ? slidesPerViewMd : slidesPerViewSm;
            slidesPerViewXs = !slidesPerViewXs ? slidesPerViewSm : slidesPerViewXs;


            vertical = !vertical ? false : vertical;
            verticalXl = (typeof verticalXl == 'undefined') ? vertical : verticalXl;
            verticalLg = (typeof verticalLg == 'undefined') ? verticalXl : verticalLg;
            verticalMd = (typeof verticalMd == 'undefined') ? verticalLg : verticalMd;
            verticalSm = (typeof verticalSm == 'undefined') ? verticalMd : verticalSm;
            verticalXs = (typeof verticalXs == 'undefined') ? verticalSm : verticalXs;


            slidesCenterMode = !slidesCenterMode ? false : slidesCenterMode;
            slidesArrows = !slidesArrows ? false : slidesArrows;
            slidesDots = !slidesDots ? false : slidesDots;
            slidesRows = !slidesRows ? 1 : slidesRows;
            slidesAutoplay = !slidesAutoplay ? false : slidesAutoplay;
            slidesFade = !slidesFade ? false : slidesFade;
            asNavFor = !asNavFor ? null : asNavFor;
            infinite = !infinite ? false : infinite;
            focusOnSelect = !focusOnSelect ? false : focusOnSelect;
            adaptiveHeight = !adaptiveHeight ? false : adaptiveHeight;


            var slidesRtl = ($("html").attr("dir") === "rtl" && !vertical) ? true : false;
            var slidesRtlXL = ($("html").attr("dir") === "rtl" && !verticalXl) ? true : false;
            var slidesRtlLg = ($("html").attr("dir") === "rtl" && !verticalLg) ? true : false;
            var slidesRtlMd = ($("html").attr("dir") === "rtl" && !verticalMd) ? true : false;
            var slidesRtlSm = ($("html").attr("dir") === "rtl" && !verticalSm) ? true : false;
            var slidesRtlXs = ($("html").attr("dir") === "rtl" && !verticalXs) ? true : false;

            $this.slick({
                slidesToShow: slidesPerView,
                autoplay: slidesAutoplay,
                dots: slidesDots,
                arrows: slidesArrows,
                infinite: infinite,
                vertical: vertical,
                rtl: slidesRtl,
                rows: slidesRows,
                centerPadding: centerPadding,
                centerMode: slidesCenterMode,
                fade: slidesFade,
                asNavFor: asNavFor,
                focusOnSelect: focusOnSelect,
                adaptiveHeight: adaptiveHeight,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
                responsive: [{
                        breakpoint: 1500,
                        settings: {
                            slidesToShow: slidesPerViewXl,
                            vertical: verticalXl,
                            rtl: slidesRtlXL,
                        },
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: slidesPerViewLg,
                            vertical: verticalLg,
                            rtl: slidesRtlLg,
                        },
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: slidesPerViewMd,
                            vertical: verticalMd,
                            rtl: slidesRtlMd,
                        },
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: slidesPerViewSm,
                            vertical: verticalSm,
                            rtl: slidesRtlSm,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: slidesPerViewXs,
                            vertical: verticalXs,
                            rtl: slidesRtlXs,
                        },
                    },
                ],
            });
        });
    }

    //**  On Click Functions Here **//
    function onClicks() {

        $(window).on("scroll", function () {
            /*---------------------------------------
                sticky-active
            -----------------------------------------*/
            var scroll = $(window).scrollTop();
            if (scroll < 200) {
                $(".header").removeClass("sticky");
            } else {
                $(".header").addClass("sticky");
            }

        });

        $(window).on('scroll', function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 20) {
                $(".scrollTop").fadeIn("100");
            } else {
                $(".scrollTop").fadeOut("100");
            }
        });

        $(".scrollTop").click(function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });

        var menu = new MmenuLight(document.querySelector("#menu"), "all");

        var navigator = menu.navigation({
            // selectedClass: 'Selected',
            // slidingSubmenus: true,
            // theme: 'dark',
            title: 'Bangla Student Books'
        });

        var drawer = menu.offcanvas({
            // position: 'left'
        });

        //	Open the menu.
        $('.menu-trigger').click(function () {
            drawer.open();
            return false;
        });


        if ($('.welcome-popup').length) {
            $('.welcome-popup').delay(1000).fadeIn(500);
        }
        if ($('.close-pop').length) {
            $('.close-pop').click(function () {
                $('.welcome-popup').fadeOut(500);
            });
        }

        $('.search-trigger').on('click', () => {
            $('.mobile-search').toggleClass('active');
            return false;
        });
    }

    carousel();
    onClicks();
});