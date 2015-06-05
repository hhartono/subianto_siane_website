		</div>
        <!-- Main end -->
        <script type="text/javascript" src="/assets/public/js/jquery.min.js"></script>
        <!--=============== scripts  ===============-->
       
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  
        <script type="text/javascript" src="/assets/public/js/plugins.js"></script>
        <script type="text/javascript" src="/assets/public/js/core.js"></script>
        <script type="text/javascript" src="/assets/public/js/scripts.js"></script>
        <script type="text/javascript" src="/assets/public/js/modernizr.2.5.3.min.js"></script>
        
        <script type="text/javascript">
        function loadApp() {
            // Create the flipbook
            $('.flipbook').turn({
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
        // Load the HTML4 version if there's not CSS transform
        yepnope({
            test : Modernizr.csstransforms,
            yep: ['/assets/public/js/turnjs_lib/turn.js'],
            nope: ['/assets/public/js/turnjs_lib/turn.html4.min.js'],
            both: ['/assets/public/css/turnjs/basic.css'],
            complete: loadApp
        });
        </script>
    </body>
</html>