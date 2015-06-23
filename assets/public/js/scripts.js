$(window).load(function() {
	"use strict";
    $(".loader").fadeOut(500, function() {
        $("#main").animate({
            opacity: "1"
        }, 500);
        contanimshow();

    });
});

$("body").append('<div class="l-line"><span></span></div>');
function initDomik() {
    "use strict";

	// center content ------------------
    function a() {
        $(" .fullheight-carousel .item").css({
            height: $(".fullheight-carousel").outerHeight(true)
        });
        $(".height-emulator").css({
            height: $("footer").outerHeight(true)
        });
        $(".team-social").css({
            "margin-top": -1 * $(".team-social").height() / 2 + "px"
        });
        $(".minus-wrap").css({
            "margin-top": -$("footer").outerHeight(true)
        });
        $(".srtp ul").css({
            "margin-top": -1 * $(".srtp ul").height() / 2 + "px"
        });
        $(".pagination").css({
            "margin-top": -1 * $(".pagination").height() / 2 + "px"
        });
        $(".slide-title").css({
            "margin-top": -1 * $(".slide-title").height() / 2 + "px"
        });
        $(".mm").css({
            "padding-top": $("header").outerHeight(true)
        });
    }
    a();
    $(window).resize(function() {
        a();
        var b = $(window).width();
        if (b > 1024) $(".nav-holder").css({
            display: "block"
        });
    });
    $(".show-hidden-info").on("click", function() {
        $(this).toggleClass("vhi");
        $(this).closest(".resume-box").find(".hidden-info").slideToggle(500);
    });
    var b = $(".full-width");
    b.owlCarousel({
        navigation: false,
        slideSpeed: 500,
        singleItem: true,
        pagination: true
    });
    $(".fullwidth-slider-holder a.next-slide").on("click", function() {
        $(this).closest(".fullwidth-slider-holder").find(b).trigger("owl.next");
    });
    $(".fullwidth-slider-holder  a.prev-slide").on("click", function() {
        $(this).closest(".fullwidth-slider-holder").find(b).trigger("owl.prev");
    });
    var c = $(".fullscreen-slider");
    c.owlCarousel({
        navigation: false,
        slideSpeed: 500,
        singleItem: true,
        pagination: true
    });
    $(".fullscreen-slider-holder a.next-slide").on("click", function() {
        $(this).closest(".fullscreen-slider-holder").find(c).trigger("owl.next");
    });
    $(".fullscreen-slider-holder a.prev-slide").on("click", function() {
        $(this).closest(".fullscreen-slider-holder").find(c).trigger("owl.prev");
    });
    function d() {
        var a = document.querySelectorAll(".intense");
        Intense(a);
    }
    d();
	// swiper ------------------
    var e = $("#horizontal-slider").data("mwc");
    var f = new Swiper("#horizontal-slider", {
        speed: 1200,
        loop: false,
        preventLinks: true,
        grabCursor: true,
        mousewheelControl: e,
        mode: "horizontal",
        pagination: ".pagination",
        paginationClickable: true
    });
    $(".hor a.arrow-left").on("click", function(a) {
        a.preventDefault();
        f.swipePrev();
    });
    $(".hor a.arrow-right").on("click", function(a) {
        a.preventDefault();
        f.swipeNext();
    });
	// magnificPopup ------------------
    $(".image-popup").magnificPopup({
        type: "image",
        closeOnContentClick: false,
        removalDelay: 600,
        mainClass: "my-mfp-slide-bottom",
        image: {
            verticalFit: false
        }
    });
    $(".popup-youtube, .popup-vimeo , .show-map").magnificPopup({
        disableOn: 700,
        type: "iframe",
        removalDelay: 600,
        mainClass: "my-mfp-slide-bottom"
    });
    $(".popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        fixedContentPos: true,
        fixedBgPos: true,
        tLoading: "Loading image #%curr%...",
        removalDelay: 600,
        closeBtnInside: true,
        zoom: {
            enabled: true,
            duration: 700
        },
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [ 0, 1 ]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        }
    });
    $(".hide-column").bind("click", function() {
        $(".not-vis-column").animate({
            right: "-100%"
        }, 500);
    });
    $(".show-info").bind("click", function() {
        $(".not-vis-column").animate({
            right: "0"
        }, 500);
    });
	// owl carousel ------------------
    var g = $(".fullheight-carousel");
    g.owlCarousel({
        navigation: false,
        slideSpeed: 500,
        items: 4,
        pagination: false
    });
    $(".fullheight-carousel-holder a.next-slide").on("click", function() {
        $(this).closest(".fullheight-carousel-holder").find(g).trigger("owl.next");
    });
    $(".fullheight-carousel-holder a.prev-slide").on("click", function() {
        $(this).closest(".fullheight-carousel-holder").find(g).trigger("owl.prev");
    });
    $(".carousel-link-holder").hover(function() {
        $(this).parent(".carousel-item").addClass("vis-decor");
    }, function() {
        $(this).parent(".carousel-item").removeClass("vis-decor");
    });
    var h = $(".single-slider");
    h.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        navigation: false,
        pagination: true,
        responsiveRefreshRate: 200,
        autoHeight: true
    });
    $(".single-slider-holder a.next-slide").on("click", function() {
        $(this).closest(".portfolio-slider-holder").find(h).trigger("owl.next");
    });
    $(".single-slider-holder a.prev-slide").on("click", function() {
        $(this).closest(".single-slider-holder").find(h).trigger("owl.prev");
    });
	//counter ------------------
    var i = 1;
    $(document.body).on("appear", ".stats", function(a) {
        if (1 === i) k(2600);
        i++;
    });
    function j(a, b, c, d) {
        if (d) {
            var e = 0;
            var f = parseInt(d / a);
            var g = setInterval(function() {
                if (e - 1 < a) c.html(e); else {
                    c.html(b);
                    clearInterval(g);
                }
                e++;
            }, f);
        } else c.html(b);
    }
    function k(a) {
        $(".stats .num").each(function() {
            var b = $(this);
            var c = b.attr("data-num");
            var d = b.attr("data-content");
            j(c, d, b, a);
        });
    }
    $(".animaper").appear();
	// video  ------------------
    var l = $(".background-video").data("vid");
    var m = $(".background-video").data("mv");
    $(".background-video").YTPlayer({
        fitToBackground: true,
        videoId: l,
        pauseOnScroll: true,
        mute: m,
        callback: function() {
            var a = $(".background-video").data("ytPlayer").player;
        }
    });
	// isotope ------------------
    function n() {
        if ($(".gallery-items").length) {
            var a = $(".gallery-items").isotope({
                singleMode: true,
                columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                //filter: '.Interior'
            });
            a.imagesLoaded(function() {
                a.isotope("layout");
            });
            $(".gallery-filters").on("click", "a.gallery-filter", function(b) {
                b.preventDefault();
                var c = $(this).attr("data-filter");
                a.isotope({
                    filter: c
                });
                $(".gallery-filters a.gallery-filter").removeClass("gallery-filter-active");
                $(this).addClass("gallery-filter-active");
				return false;
            });
        }
    }
    n();
    $(window).load(function() {
        n();
    });
	$('.slide-title a , .box-item a.ajax , .carousel-link-holder').on('click',function(){
		$('nav a').removeClass('act-link');
		$('.pp').addClass('act-link');
	});
	$('.single-title a').on('click',function(){
		$('nav a').removeClass('act-link');
		$('.pa').addClass('act-link');
	});
	// content functions ------------------
    $(".team-box").hover(function() {
        $(this).find("ul.team-social").fadeIn();
        $(this).find(".team-social a").each(function(a) {
            var b = $(this);
            setTimeout(function() {
                b.animate({
                    opacity: 1,
                    top: "0"
                }, 400);
            }, 150 * a);
        });
    }, function() {
        $(this).find(".team-social a").each(function(a) {
            var b = $(this);
            setTimeout(function() {
                b.animate({
                    opacity: 0,
                    top: "50px"
                }, 400);
            }, 150 * a);
        });
        setTimeout(function() {
            $(this).find("ul.team-social").fadeOut();
        }, 150);
    });
    $(".to-top").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    function o() {
        $(".gallery-filters").removeClass("vis-filter").fadeIn(10);
        setTimeout(function() {
            $(".gallery-filters a").each(function(a) {
                var b = $(this);
                setTimeout(function() {
                    b.animate({
                        opacity: 1,
                        top: 0
                    }, 600, "easeOutCubic");
                }, 150 * a);
            });
        }, 250);
    }
    function p() {
        $(".gallery-filters").addClass("vis-filter");
        $(".gallery-filters a").each(function(a) {
            var b = $(this);
            setTimeout(function() {
                b.animate({
                    opacity: 0,
                    top: "50px"
                }, 600, "easeOutCubic");
            }, 150 * a);
        });
        setTimeout(function() {
            $(".gallery-filters").fadeOut(100);
        }, 650);
    }
    $(".filter-button").on("click", function() {
        if ($(".gallery-filters").hasClass("vis-filter")) o(); else p();
        return false;
    });
    $.fn.duplicate = function(a, b) {
        var c = [];
        for (var d = 0; d < a; d++) $.merge(c, this.clone(b).get());
        return this.pushStack(c);
    };
    $("<div class='scale-callback'></div>").duplicate(12).appendTo(".img-wrap");
    $(".custom-scroll-link").on("click", function() {
        var a = 74;
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") || location.hostname == this.hostname) {
            var b = $(this.hash);
            b = b.length ? b : $("[name=" + this.hash.slice(1) + "]");
            if (b.length) {
                $("html,body").animate({
                    scrollTop: b.offset().top - a
                }, {
                    queue: false,
                    duration: 800,
                    easing: "easeInOutExpo"
                });
                return false;
            }
        }
    });
// map ------------------	
    var q = $(".map").attr("data-latitude"), r = $(".map").attr("data-longitude"), s = $(".map").attr("data-location");
    $("#map_addresses").gMap({
        latitude: q,
        longitude: r,
        zoom: 19,
        maptype: "ROADMAP",
        markers: [ {
            latitude: q,
            longitude: r,
            html: s,
            popup: false,
            icon: {
                image: "assets/public/images/marker_ss.png",
                iconsize: [ 40, 40 ],
                iconanchor: [ 40, 40 ]
            }
        } ]
    });
// contact form ------------------
    $("#contactform").submit(function() {
        var a = $(this).attr("action");
        $("#message").slideUp(750, function() {
            $("#message").hide();
            $("#submit").attr("disabled", "disabled");
            $.post(a, {
                name: $("#name").val(),
                email: $("#email").val(),
                comments: $("#comments").val()
            }, function(a) {
                document.getElementById("message").innerHTML = a;
                $("#message").slideDown("slow");
                $("#submit").removeAttr("disabled");
                if (null != a.match("success")) $("#contactform").slideDown("slow");
            });
        });
        return false;
    });
    $("#contactform input, #contactform textarea").keyup(function() {
        $("#message").slideUp(1500);
    });
	// IMPORTANT INIT YOUR FUNCTIONS HERE ------------------
    function projectfilter(){
        $(".gallery-filter").each(function(i){
            var fa = $(this).attr("data-filteractive");
            //console.log(i);
            if(fa != ""){
                var pf = $(".gallery-items").isotope({
                    singleMode: true,
                    columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                    itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                    filter: fa
                });
                console.log(fa);
                pf.imagesLoaded(function() {
                    pf.isotope("layout");
                });
                $(this).addClass("gallery-filter-active");
            }
        })
    }
    // projectfilter();
    $(window).load(function() {
       projectfilter();
    });

    /*var fb = $('.flipbook');
    function loadApp(){
        // console.log("loadApp() called");
        // Create the flipbook
        $('.flipbook').turn({
        // fb.turn({
                // Width
                width:940,
                // Height
                height:300,
                // Elevation
                elevation: 50,
                // Enable gradients
                gradients: true,
                // Auto center this flipbook
                autoCenter: true
        });
    }
    loadApp();*/
    //$(window).load(function() {
       // loadApp();  
    //});
}
// if mobile remove parallax and video  ------------------
function initparallax() {
    var a = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return a.Android() || a.BlackBerry() || a.iOS() || a.Opera() || a.Windows();
        }
    };
    trueMobile = a.any();
    if (null == trueMobile) {
        var b = $(".content");
        b.find("[data-top-bottom]").length > 0 && b.waitForImages(function() {
            s = skrollr.init();
            s.destroy();
            skrollr.init({
                forceHeight: !1,
                easing: "outCubic",
                mobileCheck: function() {
                    return !1;
                }
            });
        });
    }
    if (trueMobile) $(".background-video").remove();
}
// show hide content and init functions  ------------------
function contanimshow() {
    $(".elem").removeClass("scale-bg2");
    setTimeout(function() {
        $(".scale-callback").each(function(a) {
            var b = $(this);
            setTimeout(function() {
                b.addClass("scale-bg5");
            }, 80 * a);
        });
    }, 450);
    setTimeout(function() {
        $(".wrapper-inner").animate({
            opacity: 1
        }, 1500);
    }, 550);
    /*setTimeout(function(){
        $('.flipbook-viewport').animate({
            opacity: 1
        }, 1500);
    }, 550);*/
    setTimeout(function() {
        $("footer").animate({
            opacity: 1
        }, 1500);
		 $(".bg-animate ").animate({
            opacity: 0.6
        }, 1500);		
    }, 650);
    
}

function contanimhide() {
    setTimeout(function() {
        $(".elem").addClass("scale-bg2");
    }, 650);
}
// share ------------------
$(".shareSelector").socialShare({
    social: "facebook,twitter,tumblr,pinterest",
    whenSelect: true,
    selectContainer: ".shareSelector",
    blur: false
});
var shrcn = $(".share-container"), nb = $(".nav-button"), nh = $(".nav-holder"), an = $(".nav-holder ,.nav-button ");
function showShare() {
    shrcn.fadeIn();
    an.animate({
        opacity: 0
    }, 550);
    shrcn.removeClass("isShare");
    setTimeout(function() {
        $(".arthref").addClass("inshare");
        $(".arthref .icon-container ul li").each(function(a) {
            var b = $(this);
            setTimeout(function() {
                b.animate({
                    opacity: 1,
                    top: 0
                }, 500);
            }, 120 * a);
        });
    }, 400);
}
function hideShare() {
    shrcn.addClass("isShare");
    $(".arthrefSocialShare").find("ul").removeClass("active");
    $(".arthref .icon-container ul li").each(function(a) {
        var b = $(this);
        setTimeout(function() {
            b.animate({
                opacity: 0,
                top: "-150px"
            }, 500);
        }, 120 * a);
    });
    setTimeout(function() {
        $(".arthrefSocialShare").remove();
        an.animate({
            opacity: 1
        }, 550);
        shrcn.fadeOut();
    }, 500);
}
$(".selectMe").bind("click", function(a) {
    a.preventDefault();
    if ($(".share-container").hasClass("isShare")) showShare(); else hideShare();
});
$('nav li a').on('click',function(){
	$('nav li a').removeClass('act-link');
	$(this).addClass('act-link');
});
// mobile menu ------------------
function showMenu() {
    nb.removeClass("vis-m");
    nh.slideDown(500);
}
function hideMenu() {
    nb.addClass("vis-m");
    nh.slideUp(500);
}
nb.on("click", function() {
    if ($(this).hasClass("vis-m")) showMenu(); else hideMenu();
});

var fb = $('.flipbook');
function loadFlipbook(){
    // Create the flipbook
    fb.turnJS();
}
//=============== init ajax  ==============
$(function() {
    /*$.coretemp({
        reloadbox: "#wrapper",
		loadErrorMessage: "<h2>404</h2> <br> page not found.", // 404 error text 
        loadErrorBacklinkText: "Back to the last page", // 404 back button  text 
        outDuration: 250,
        inDuration: 150
    });*/
    readyFunctions();
    $(document).on({
        ksctbCallback: function() {
            readyFunctions();
        }
    });

});
//=============== init all functions  ==============
function readyFunctions() {
    //loadFlipbook();
    initDomik();
    initparallax();
}

