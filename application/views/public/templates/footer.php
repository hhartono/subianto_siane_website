		</div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
        
        <script type="text/javascript" src="/assets/public/js/modernizr.2.5.3.min.js"></script>
        
        <script type="text/javascript">
            // js / jquery 
            
            /*
             * Turn.js responsive book
             */

            /*globals window, document, $*/

            (function () {
                'use strict';

                var module = {
                    // ratio: 1.38,
                    ratio: 3.6,
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
                            });
                        }
                    },
                    resize: function () {
                        // reset the width and height to the css defaults
                        this.el.style.width = '';
                        this.el.style.height = '';

                        var width = this.el.clientWidth,
                            height = Math.round(width / this.ratio),
                            padded = Math.round(document.body.clientHeight * 0.8);

                        console.log('clientWidth:' + this.el.clientWidth);
                        console.log('width: ' + width);
                        console.log('height:' + height);
                        console.log('padded:' + padded);
                        console.log('clientHeight:' + this.el.clientHeight);

                        // if the height is too big for the window, constrain it
                        if (height > padded) {
                            height = padded;
                            width = Math.round(height * this.ratio);
                            console.log('height:' + height);
                            console.log('width:' + width);
                        }

                        // set the width and height matching the aspect ratio
                        this.el.style.width = width + 'px';
                        this.el.style.height = height + 'px';

                        return {
                            width: width,
                            height: height
                        };
                    },
                    plugins: function () {
                        // run the plugin
                        $(this.el).turn({
                            gradients: true,
                            acceleration: true
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