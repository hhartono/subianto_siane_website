		</div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="/assets/public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/public/js/core.js"></script>
        <script type="text/javascript" src="/assets/public/js/plugins.js"></script>
        
        <?php 
        $porturi = $this->uri->segment(1);
        if($porturi=='portfolio'){
        ?>
            <script type="text/javascript" src="/assets/public/js/turnjs_lib/turn.js"></script>
        <?php
        }
        
        ?>
        <script type="text/javascript" src="/assets/public/js/scripts.js"></script>
        
        <script type="text/javascript" src="/assets/public/js/modernizr.2.5.3.min.js"></script>
        
        <script type="text/javascript">
            // js / jquery 
        </script>
    </body>
</html>