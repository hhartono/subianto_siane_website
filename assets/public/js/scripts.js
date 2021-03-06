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
    var galleryLength;
    var filterActiveLength;
    function setGalleryLength(a){
        galleryLength = a;
    }
    function getGalleryLength(){
        return galleryLength;
    }
    function setFilterActiveLength(b){
        filterActiveLength = b;
    }
    function getFilterActiveLength(){
        return filterActiveLength;
    }

    var firstRow = 1 , lastRow, rowPosition = 1, cSize;
    function getFirstRow(){
        return firstRow;
    }
    function setLastRow(lr){
        lastRow = lr;
    }
    function getLastRow(){
        return lastRow;
    }
    function setRowPosition(rp){
        rowPosition = rp;
    }
    function getRowPosition(){
        return rowPosition;
    }
    function setCSize(c){
        cSize = c;
    }
    function getCSize(){
        return cSize;
    }

    function checkFilter(){
        $(".gallery-filter").each(function(){
            var fa = $(this).attr("data-filteractive");
            if(fa != ""){
                $(this).addClass("gallery-filter-active");
            }
        })
    }

    function getFilterActive(){
        var active;
        $(".gallery-filter").each(function(){
            var fa = $(this).attr("data-filteractive");
            if(fa != ""){
                active = fa;
                return false;
            }
        })
        return active;
    }

    function setHeightGallery(row){
        var ratio = 0.6640625; // ratio for get height of gallery item
        $(".gallery-item").css("height", parseInt(ratio * $(".gallery-item").width()) +"px");
        $(".container-gallery").css("height", row * parseInt($(".gallery-item").height()) +"px"); 
    }

    function setOrientation(){
        var top = 0;
        var mapboxWidth = $(".container").width()/2; // map box width

        if($(window).width() < 768){
            if($(window).innerHeight() > $(window).innerWidth()){
                // mobile portrait
                // project grid
                var movePost = -2;
                setHeightGallery(2);
                console.log("orientation: portrait");
                console.log("gallery height: "+$(".container-gallery").height());
                if(getRowPosition() == 1){
                    top = 0;
                    console.log("rowPosition is :" + getRowPosition());
                }else{
                    console.log("rowPosition: " + getRowPosition());
                    top = ((getRowPosition()-1) * (movePost * parseInt($(".gallery-item").height())));
                }
                //$(".gallery-items").css("top", top +"px");
                $(".gallery-items").animate({
                    'top': top
                },{
                    duration: 'fast',
                    easing: 'easeInCirc'
                });
                console.log("move from: " + top + " to: " +(movePost * parseInt($(".gallery-item").height())));
                console.log(getRowPosition()-1)

                // contact page -> map box
                $(".map-box").css('width', 2 * mapboxWidth +"px");
                $(".map-box").css('height', $(".map-box").width()+"px");
                // $(".map-box").css('margin-bottom', 20+"px");
                $("#map_addresses").css('height', $(".map-box").width()+"px");

                // loader center position
                $(".loader").css("top", ($(window).height()-$(".loader").height())/2+"px");
                $(".loader").css("left", ($(window).width()-$(".loader").width())/2+"px");
            }else{
                // mobile landscape
                // project grid
                var movePost = -1;
                setHeightGallery(1);
                console.log("orientation: landscape");
                console.log("gallery height: "+$(".container-gallery").height());
                if(getRowPosition() == 1){
                    top = 0;
                    console.log("rowPosition is :" + getRowPosition());
                }else{
                    console.log("rowPosition: " + getRowPosition());
                    top = ((getRowPosition()-1) * (movePost * parseInt($(".gallery-item").height())));
                }
                //$(".gallery-items").css("top", top +"px");
                $(".gallery-items").animate({ 
                    'top': top
                },{
                    duration: 'fast',
                    easing: 'easeInCirc'
                });
                console.log("move from: " + top + " to: " +(movePost * parseInt($(".gallery-item").height())));
                console.log(getRowPosition()-1)

                // contact page -> map box
                $(".map-box").css('width', 2 * mapboxWidth +"px");
                $(".map-box").css('height', $(".map-box").width()+"px");
                $("#map_addresses").css('height', $(".map-box").width()+"px");

                // loader center position
                $(".loader").css("top", ($(window).height()-$(".loader").height())/2+"px");
                $(".loader").css("left", ($(window).width()-$(".loader").width())/2+"px");
            }
        }else{
            // large screen
            // project grid
            setHeightGallery(2);
            console.log("gallery height: "+$(".container-gallery").height());
            $(".contentcenter").css("padding-top", 200+"px");

            // contact page -> map box
            $(".map-box").css('width', mapboxWidth +"px");
            $(".map-box").css('height', 400+"px");
            $("#map_addresses").css('height', $(".contact-details").height()+"px");

            // loader center position
            $(".loader").css("top", ($(window).height()-$(".loader").height())/2+"px");
            $(".loader").css("left", ($(window).width()-$(".loader").width())/2+"px");
        }    
        if($(window).width() <= 1023){
            if($(window).width() >= 768){
                setCSize(4);
                $("#portfolio-page-alert").css("display", "inherit");
                // $(".flipbook-viewport").show();
                $(".flipbook-viewport").css("display", "none");
                $("#openbooktext").css("display", "none");
            }else if($(window).width() < 768){
                if($(window).innerHeight() > $(window).innerWidth()){
                    // portrait
                    setCSize(1);
                    if($(window).width() <= 480){
                        $(".pagination-nav").css("display", "inherit");
                        $(".gallery-items ").css("display", "inherit");
                        $("#alert-bestview").css("display", "none");
                    }
                    $("#portfolio-page-alert").css("display", "inherit");
                    $(".flipbook-viewport").css("display", "none");
                    $("#openbooktext").css("display", "none");
                }else{
                    // landscape
                    setCSize(2);

                    if($(window).width() <= 480){
                        $(".pagination-nav").css("display", "none");
                        $(".gallery-items ").css("display", "none");
                        $("#alert-bestview").css("display", "inherit");
                    }
                    $("#portfolio-page-alert").css("display", "inherit");
                    // $(".flipbook-viewport").show();
                    $(".flipbook-viewport").css("display", "none");
                    $("#openbooktext").css("display", "none");
                }
            }
            
        }else{
            if($(window).width() <= 1170){
                $("#portfolio-page-alert").css("display", "inherit");
                $("#portfolio-page-alert").css("padding-top", 300+"px");
                $(".flipbook-viewport").css("display", "none");
                $("#openbooktext").css("display", "none");
            }else{
                $("#portfolio-page-alert").css("display", "none");
                $(".flipbook-viewport").show();
                $("#openbooktext").show();
            }
            setCSize(8);
        }
    }

    setOrientation();
    $(window).resize(function(){
        setOrientation();
    });

    function n() {
        if ($(".gallery-items").length) {
            checkFilter(); // check filter active

            var a;
            var dataFilterActive = getFilterActive();
            var faLength = $(".gallery-filter-active").length;
            setFilterActiveLength(faLength);

            console.log("filter active:" + dataFilterActive);
            console.log("filter length:" + faLength);

            var ratio = 0.6640625; // ratio for get height of gallery item
            var length;
            var gLength;

            if($(window).width() <= 1023){
                if($(window).width() >= 768){
                    gLength = 4;
                    setCSize(4);
                }else if($(window).width() < 768){
                    if($(window).innerHeight() > $(window).innerWidth()){
                        // portrait
                        gLength = 2;
                        setCSize(1);
                    }else{
                        // landscape
                        gLength = 2;
                        setCSize(2);
                    }
                }
            }else{
                gLength = 8;
                setCSize(8);
            }

            // setHeightGallery();
        
            if(faLength == 1){
                // one filter selected
                a = $(".gallery-items").isotope({
                    singleMode: true,
                    columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                    itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                    filter: dataFilterActive, 
                    transitionDuration: '0.8s'
                });
                a.imagesLoaded(function() {
                    a.isotope("layout");
                });
                length = a.data('isotope');
                setGalleryLength(length.filteredItems.length)
                console.log("[with filter page] length: " +length.filteredItems.length);
                
                if((getGalleryLength() < gLength) || (getGalleryLength() == gLength)){
                    $(".pagination-nav a.prev").addClass("not-active");
                    $(".pagination-nav a.next").addClass("not-active");
                    setLastRow(1);
                }else{
                    if(getRowPosition() == getFirstRow()){
                        $(".pagination-nav a.prev").addClass("not-active");
                        $(".pagination-nav a.next").removeClass("not-active");
                    }
                }
            }else{
                // all filter selected
                a = $(".gallery-items").isotope({
                    singleMode: true,
                    columnWidth: ".grid-sizer, .grid-sizer-second, .grid-sizer-three",
                    itemSelector: ".gallery-item, .gallery-item-second, .gallery-item-three",
                    // filter: fa
                    transitionDuration: '0.8s'
                });
                a.imagesLoaded(function() {
                    a.isotope("layout");
                });
                length = a.data('isotope');
                setGalleryLength(length.filteredItems.length);
                console.log("[without filter / all] length: "+length.filteredItems.length);
                console.log("getGalleryLength() : " + getGalleryLength());
                console.log("gLength : " + gLength);
                if((getGalleryLength() < gLength) || (getGalleryLength() == gLength)){
                    $(".pagination-nav a.prev").addClass("not-active");
                    $(".pagination-nav a.next").addClass("not-active");
                    setLastRow(1);
                }else{
                    if(getRowPosition() == getFirstRow()){
                        $(".pagination-nav a.prev").addClass("not-active");
                        $(".pagination-nav a.next").removeClass("not-active");
                    }
                    console.log("getFirstRow: " + getFirstRow());
                    console.log("getLastRow: " + getLastRow());
                }
            }
            // filter click!
            $(".gallery-filters").on("click", "a.gallery-filter", function(b) {
                $(".gallery-items").animate({ 'top': 0});
                b.preventDefault();
                var c = $(this).attr("data-filter");
                a.isotope({
                    filter: c,
                    transitionDuration: '0.8s'
                });
                $(".gallery-filters a.gallery-filter").removeClass("gallery-filter-active");
                $(this).addClass("gallery-filter-active");
                setGalleryLength(length.filteredItems.length);
                console.log("[with filter click] length : " +length.filteredItems.length);
                
                if((getGalleryLength() < gLength) || (getGalleryLength() == gLength)){
                    $(".pagination-nav a.prev").addClass("not-active");
                    $(".pagination-nav a.next").addClass("not-active");
                    setLastRow(1);
                }else{
                    setRowPosition(1);
                    if(getRowPosition() == getFirstRow()){
                        $(".pagination-nav a.prev").addClass("not-active");
                        $(".pagination-nav a.next").removeClass("not-active");
                    }
                }
				return false;
            });
        }
    }
    n();
    $(window).load(function() {
        // n();
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
    // $(".team-box").hover(function() {
    //     $(this).find("ul.team-social").fadeIn();
    //     // $(this).find(".team-social a").each(function(a) {
    //     //     var b = $(this);
    //     //     setTimeout(function() {
    //     //         b.animate({
    //     //             opacity: 1,
    //     //             top: "0"
    //     //         }, 400);
    //     //     }, 150 * a);
    //     // });
    // }, function() {
    //     // $(this).find(".team-social a").each(function(a) {
    //     //     var b = $(this);
    //     //     setTimeout(function() {
    //     //         b.animate({
    //     //             opacity: 0,
    //     //             top: "50px"
    //     //         }, 400);
    //     //     }, 150 * a);
    //     // });
    //     setTimeout(function() {
    //         $(this).find("ul.team-social").fadeOut();
    //     }, 150);
    // });
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
        zoom: 16,
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

    /*
     * function homeintro
     * show intro 
     */
    function homeintro(){
        homeIntroSizing();
        $(".introword").animate({opacity:0})
        $(".introword").eq(0).delay(1000).animate({
            opacity:1,
            //paddingTop: "155px"
        }, 900 );
        $(".introword").eq(1).delay(2200).animate({
            opacity:1
        }, 900 );
        $(".introword").eq(2).delay(3400).animate({
            opacity:1
        }, 900 );
        $(".introword").eq(3).delay(4600).animate({
            opacity:1
        }, 900, function(){
            $("a#explore").click(function(){
                $(".introword").eq(3).delay(50).animate({opacity:0},900, function(){
                    $("#hometoplayer").fadeOut();
                });
                $(".introword").eq(2).delay(75).animate({opacity:0});
                $(".introword").eq(1).delay(100).animate({opacity:0});
                $(".introword").eq(0).delay(125).animate({opacity:0}, 900, function(){
                    $("#masklayer").fadeOut();
                });
                return false;
            })
        });
    }
    /*
     * function homeIntroSizing
     * resize home intro logo
     */
    function homeIntroSizing(){
        $(".introword").css("width", 50+"%");
        if($(window).width()<1024){
            $(".introword img").css("width", $(".introword").width()+"px");   
            $("#masklayer").css('width', $(document).width()+"px").animate({opacity:1});
            $("#masklayer").css('height', $(window).height()+"px").animate({opacity:1});
            $(".introword").css('margin-left', ($(document).width()-$('.introword').width())/2 +"px");
            if($(window).width()<$(window).height()){ // portrait
                $(".introword").eq(0).css('padding-top', 40+"%");
                $(".introword").eq(3).css('margin-top', 30+"%");
                $(".introword:eq(3) div").css("width", ($(".introword img").width()/2-2) +"px");
                $(".introword:eq(3)").css('margin-left', ($(document).width()-$('.introword img').width())/2 +"px");
            }else{ // landscape
                $(".introword").eq(0).css('padding-top', 5+"%");
                $(".introword").eq(3).css('margin-top', 10+"%");
                $(".introword:eq(3) div").css("width", ($(".introword img").width()/2-2) +"px");
            }
        }else{
            $(".introword img").css("width", 57+"%");   
            $("#masklayer").css('width', $(document).width()+"px").css('height', $(document).height()+"px").animate({opacity:1});
            $(".introword").css('margin-left', ($(document).width()-$('.introword').width())/2 +"px");
            $(".introword").eq(0).css('padding-top', 155+"px");
            $(".introword").eq(3).css('margin-top', 165+"px");
            $(".introword:eq(3) div").css("width", ($(".introword img").width()/2-2 )+"px");
            $(".introword:eq(3)").css('margin-left', ($(document).width()-$('.introword img').width())/2 +"px");
        }
    }

    /*
     * function dipindahkan ke footer.
     */
    // function categorybox(){
    //     var categorybox = $(".category-box-item");
    //     var categoryBoxImg = $(".category-box-item a img");
    //     var heightImg = categoryBoxImg.height();
    //     var categoryBoxHeight = categorybox.height();
    //     console.log("margin-top: " +  (categoryBoxHeight-heightImg)/2 );
    //     /*categoryBoxImg.animate({
    //         marginTop: (categoryBoxHeight-heightImg)/2+'px'
    //     }, 100);*/
    //     categoryBoxImg.css("margin-top", (categoryBoxHeight-heightImg)/2 +"px");
    // }
    // categorybox();

    homeintro();
    $(window).resize(function(){
        homeIntroSizing();
        // categorybox();
    })
    /*
     * function simcarousel
     * simple vertical carousel in project page
     */
    function simcarousel(){
        console.log("[carousel] length: " + getGalleryLength());
        // var rSize = 4;
        var cSize = getCSize();
    
        $(".pagination-nav a.next").click(function(){
            //rowPosition = 1;
            var gl =  getGalleryLength(); // gallery length
            console.log("gl: " + getGalleryLength());
            if(cSize == 1){
                var nRow = parseInt(gl / (2 * cSize)); // row
                console.log("nRow: " + gl / (2 * cSize));
                console.log("parseInt nRow: " + nRow);
                var modRow = gl % (2* cSize);
                console.log("modRow: " + modRow);
            }else{
                var nRow = parseInt(gl / cSize); // row
                console.log("nRow: " + gl / cSize);
                console.log("parseInt nRow: " + nRow);
                var modRow = gl % cSize;
                console.log("modRow: " + modRow);
            }
            if(modRow == 0){
                setLastRow(nRow);
            }else{
                setLastRow(nRow+1);
            }
            $(".gallery-items").animate({ 
                'top': (-(getRowPosition() * parseInt($(".container-gallery").height())) )
                },{
                    duration: 'slow',
                    easing: 'easeOutCubic'
                });
            console.log("[next click] row position before: "+getRowPosition());
            console.log("[next click] gallery position top:" +(-(getRowPosition() * parseInt($(".container-gallery").height()))));
            setRowPosition(getRowPosition()+1)
            console.log("[next click] row position after: "+getRowPosition());
            if(getRowPosition() == getLastRow()){
                $(".pagination-nav a.next").addClass("not-active");
                $(".pagination-nav a.prev").removeClass("not-active");
            }
            if((getRowPosition() != getFirstRow())&&(getRowPosition() != getLastRow())){
                $(".pagination-nav a.prev").removeClass("not-active");
                $(".pagination-nav a.next").removeClass("not-active");
            }
            console.log("[next click] gallery length: " + getGalleryLength());
            return false;
        })

        $(".pagination-nav a.prev").click(function(){
            // rowPosition = 1;
            var gl =  getGalleryLength();
            var nRow = parseInt(gl/getCSize()); 
            var modRow = gl % getCSize();
            if(modRow == 0){
                setLastRow(nRow);
            }else{
                setLastRow(nRow+1);
            }
            var top = parseInt($(".gallery-items").css("top"));
            var nextTop = top + $(".container-gallery").height();
            $(".gallery-items").animate({
                'top': nextTop
                }, {
                    duration: 'slow',
                    easing: 'easeOutCubic'
                });
            console.log("[prev click] row position before: "+getRowPosition());
            console.log("[prev click] gallery position top:" + nextTop);
            setRowPosition(getRowPosition()-1);
            console.log("[prev click] row position after: "+ getRowPosition());
            if(getRowPosition() == getFirstRow()){
                $(".pagination-nav a.prev").addClass("not-active");
                $(".pagination-nav a.next").removeClass("not-active");
            }
            if((getRowPosition() != getFirstRow())&&(getRowPosition()!= getLastRow())){
                $(".pagination-nav a.prev").removeClass("not-active");
                $(".pagination-nav a.next").removeClass("not-active");
            }
            console.log("[prev click] gallery length: " +getGalleryLength());
            return false;
        })

        
    }
    simcarousel();

    /*
     * function scrollTopPage
     * show & hide scroll top arrow
     */
    function scrollTopPage(){
        /*
         * show / hide scroll top arrow
         */
        $(".to-top").hide();
        $(window).scroll(function(){
            if($(window).scrollTop() > 120){
                $(".to-top").fadeIn();
            }else{
                $(".to-top").fadeOut();
            } 
        })
        /* end scroll top */
    }
    scrollTopPage();


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

