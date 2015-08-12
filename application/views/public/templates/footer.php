		</div>
        <!-- Main end -->
        <?php
        $uri = $this->uri->segment(1);
        if($uri == 'contact'){
        ?>
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <?php    
        }
        ?>
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="/assets/public/js/jquery.min.js"></script>
        <?php 
        //if(isset($portfolioactlink)){
        ?>
            <script type="text/javascript" src="/assets/public/js/turnjs_lib/turn.js"></script>
        <?php
        //}
        ?>
        
        <script type="text/javascript" src="/assets/public/js/core.js"></script>
        <script type="text/javascript" src="/assets/public/js/plugins.js"></script>
        <script type="text/javascript" src="/assets/public/js/scripts.js"></script>
        <script type="text/javascript" src="/assets/public/js/fotorama.js"></script>
        <script type="text/javascript" src="/assets/public/js/modernizr.2.5.3.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){

                $(".category-box-text").css('margin-top', ($(".category-box-item").height()-$(".category-title").height())/2 + "px");
                $(".category-box-text").css('margin-left', ($(".category-box-item").height()-$(".category-title").height())/2 + "px");
                $(".category-box-text").css('margin-right', ($(".category-box-item").height()-$(".category-title").height())/2 + "px");
                $(".category-box-text").css('width', $(".category-box-item").width()-($(".category-box-item").height()-$(".category-title").height()) +"px");

                $(".gallery-filters").css('margin-left', parseInt((($(".fixed-filter").width()-$(".gallery-filter").eq(1).width())/2)-(30 + $(".gallery-filter").eq(0).width()))  +"px");
                //console.log("gallery filter margin left" + parseInt((($(".fixed-filter").width() - $(".gallery-filter").eq(1).width())/2) - 30 + $(".gallery-filter").eq(0).width()));
                //contactResponsive();
            });

            $(window).resize(function(){
                $(".category-box-text").css('margin-top', ($(".category-box-item").height()-$(".category-title").height())/2 + "px");
                $(".category-box-text").css('margin-left', ($(".category-box-item").height()-$(".category-title").height())/2 + "px");
                $(".category-box-text").css('margin-right', ($(".category-box-item").height()-$(".category-title").height())/2 + "px");
                $(".category-box-text").css('width', $(".category-box-item").width()-($(".category-box-item").height()-$(".category-title").height()) +"px");
                $(".gallery-filters").css('margin-left', (($(".fixed-filter").width()-$(".gallery-filter").eq(1).width())/2)-(30 + $(".gallery-filter").eq(0).width()) +"px");
           
                //contactResponsive();
            })
            function contactResponsive(){
                if($(window).width() < 768){
                    if($(window).innerHeight() > $(window).innerWidth()){
                        console.log("orientation: portrait");
                        $(".map-box").css("width", 100 +"%");
                        $(".map-box").css("height", 280 +"px");
                        $(".map").css("height", 250 +"px");
                        $(".map").css("width", 100 +"%");
                        $(".contact-details").css("width", 100 +"%");  
                    }else{
                        console.log("orientation: landscape");
                        $(".map-box").css("width", 100 +"%");
                        $(".map-box").css("height", 280 +"px");
                        $(".map").css("height", 250 +"px");
                        $(".map").css("width", 100 +"%");
                        $(".contact-details").css("width", 100 +"%"); 
                    }
                }else{
                    console.log("normal view");
                    $(".map-box").css("width", $(".map-box").width() +"px");
                    $(".map").css("height", 440 +"px");
                }    
            }
        </script>

         <?php 
        // load fotorama
        $uri = $this->uri->segment(2);
        if($uri == 'detail'){

        ?>
        <script type="text/javascript">
            /*
             * fotorama gallery (project detail page)
             */
            $(function () {
                // 1. Initialize fotorama manually.
                var $fotoramaDiv = $('.fotorama').fotorama();
                // 2. Get the API object.
                var fotorama = $fotoramaDiv.data('fotorama');
                fotorama.startAutoplay(2700);
                /*$("#playpause #play").click(function(){
                    fotorama.startAutoplay(1500);    
                    return false;
                })*/
                /*$("#playpause #pause").click(function(){
                    fotorama.stopAutoplay();
                    return false;
                })*/
                fotorama.setOptions({
                    arrows: false,
                    transitionduration:2000, // images transition
                })
            });

            function setFotoramaHeight(){
                var $fotoramaDiv = $('.fotorama').fotorama();
                var fotorama = $fotoramaDiv.data('fotorama');
                var heightFotorama;
                if($(window).width() < 768){
                    if($(window).innerHeight() > $(window).innerWidth()){
                        // orientation portrait
                        console.log("orientation: portrait");
                        heightFotorama = 245;
                    }else{
                        // orientation landscape
                        console.log("orientation: landscape");
                        heightFotorama = $(window).height()-parseInt($(".contentcenter").css("padding-top"))-10;
                        console.log("fotorama height: " + heightFotorama );
                    }
                }else{
                    // orientation portrait & landscape, large screen, screen > 768
                    console.log("gallery height: "+$(".container-gallery").height());
                    heightFotorama = 400;
                }    
                fotorama.setOptions({
                    arrows: false,
                    height: heightFotorama
                })
            }

            $(document).ready(function(){
                $(".fotorama__wrap").css('margin-left', ($(".container").width()-$(".fotorama__wrap").width())/2 +"px");
                setFotoramaHeight();
            });

            $(window).resize(function(){
                setFotoramaHeight();
            });

        </script>
        <?php
        }else{
            // echo nothing
        }
        ?>

        <script type="text/javascript">
            /*
             * Turn.js responsive book
             */
            /* globals window, document, $*/

            (function () {
                'use strict';

                var module = {
                    // ratio: 1.38,
                    ratio: 3.1,
                    init: function (id) {
                        var me = this;

                        // if older browser then don't run javascript
                        if (document.addEventListener) {
                            this.el = document.getElementById(id);
                            this.resize();
                            this.plugins();
                            
                            // on window resize, update the plugin size
                            window.addEventListener('resize', function (e) {
                                var size = me.resize();
                                $(me.el).turn('size', size.width, size.height);
                                console.log(size.width);
                                // $(me.el).turn({
                                //     width: size.width, 
                                //     height: size.height,
                                //     // Elevation
                                //     elevation: 50,
                                //     // Enable gradients
                                //     gradients: true,
                                //     // Auto center this flipbook
                                //     autoCenter: true
                                // });
                            });
                        }

                    },
                    resize: function () {
                        // reset the width and height to the css defaults
                        this.el.style.width = '';
                        this.el.style.height = '';

                        var width = this.el.clientWidth,
                            height = Math.round(width / this.ratio),
                            padded = Math.round(document.body.clientHeight * 0.8),
                            ownHeight = parseInt(height * 0.96),
                            coverPadding = parseInt((height-ownHeight)/2),
                            ownWidth = parseInt((width/2)-coverPadding);
                        console.log(this.el.clientWidth);

                        /*console.log('clientWidth:' + this.el.clientWidth);
                        console.log('width: ' + width);
                        console.log('height:' + height);
                        console.log('padded:' + padded);
                        console.log('clientHeight:' + this.el.clientHeight);
                        console.log(ownWidth);
                        console.log(ownHeight);*/

                        // if the height is too big for the window, constrain it
                        if (height > padded) {
                            height = padded;
                            width = Math.round(height * this.ratio);
                            // console.log('height:' + height);
                            // console.log('width:' + width);
                            ownHeight = parseInt(height * 0.96);
                            coverPadding = parseInt((height-ownHeight)/2);
                            ownWidth = parseInt((width/2)-coverPadding);
                        }

                        // set the width and height matching the aspect ratio
                        this.el.style.width = width + 'px';
                        this.el.style.height = height + 'px';
                        
                        $('.flipbook .own-size').width(ownWidth);
                        $('.flipbook .own-size').height(ownHeight);
                        return {
                            width: width,
                            height: height,
                            ownWidth: ownWidth,
                            ownHeight: ownHeight
                        };
                    },
                    plugins: function () {
                        // run the plugin
                        $(this.el).turn({
                            // width:200,
                            // height:80,
                            gradients: true,
                            acceleration: true,
                            elevation: 50,
                            // autoCenter: true
                        });
                        // hide the body overflow
                        document.body.className = 'hide-overflow';
                    }
                };
                module.init('flipbook');
            }());
        </script>
    </body>
</html>