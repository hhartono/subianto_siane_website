		</div>
        <!-- Main end -->
        
        <?php 
        $uri1 = $this->uri->segment(1);
        if($uri1=='contact'){
        ?>
        <!--=============== google map ===============-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>  
        <?php
        }
        ?>
        
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="/assets/public/js/jquery.min.js"></script>

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
            yep: ['assets/public/js/turnjs_lib/turn.js'],
            nope: ['assets/public/js/turnjs_lib/turn.html4.min.js'],
            both: ['assets/public/css/turnjs/basic.css'],
            complete: loadApp
        });

        </script>

        <script>
        $(document).ready(function(){
            // contact form

            // $("#submit").click(function(){
            //     //e.preventDefault();
            //     //get input field values
            //     var name = $('input[name=name]').val();
            //     var email = $('input[name=email]').val();
            //     var comments = $('textarea[name=comments]').val();
                
            //     //simple validation at client's end
            //     //we simply change border color to red if empty field using .css()
            //     var proceed = true;
            //     if (name == "") {
            //         $('input[name=name]').css('border-color', '#000');
            //         proceed = false;
            //     }
            //     if (email == "") {
            //         $('input[name=email]').css('border-color', '#000');
            //         proceed = false;
            //     }
                
            //     if (comments == "") {
            //         $('textarea[name=comments]').css('border-color', '#000');
            //         proceed = false;
            //     }
                
            //     //everything looks good! proceed...
            //     if (proceed) {  
            //         //data to be sent to server
            //         post_data = {
            //             'name': name,
            //             'email': email,
            //             'comments': comments
            //         };
                    
            //         //Ajax post data to server
            //         //$.post('contact_me.php', post_data, function(response){
            //         $.post('contact/submitmessage', post_data, function(response){
                    
            //             //load json data from server and output message     
            //             if (response.type == 'error') {
            //                 output = '<div class="error">' + response.text + '</div>';
            //             }
            //             else {
                        
            //                 output = '<div class="success">' + response.text + '</div>';
                            
            //                 //reset values in all input fields
            //                 $('#contactform input').val('');
            //                 $('#contactform textarea').val('');
            //             }
                        
            //             $("#message").hide().html(output).slideDown();
            //         }, 'json');
            //     }
            //     return false;
            // });
        
            // //reset previously set border colors and hide all message on .keyup()
            // $("#contactform input, #contactform textarea").keyup(function(){
            //     $("#contactform input, #contactform textarea").css('border-color', '');
            //     $("#message").slideUp();
            // });
        });
        </script>

        <script type="text/javascript" src="/assets/public/js/plugins.js"></script>
        <script type="text/javascript" src="/assets/public/js/core.js"></script>
        <script type="text/javascript" src="/assets/public/js/scripts.js"></script>
        
    </body>
</html>