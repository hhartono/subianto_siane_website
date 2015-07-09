<?php $this->load->view('public/templates/header'); ?>
    
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content">
            <!-- background animation  -->      
            <!-- <div class="bg-animate"><img src="assets/public/images/body-bg.png"  class="respimg" alt=""></div> -->
            <div class="contentcenter hid-port-info" style="padding-top:221px; height:100%">
                <!-- wrapper-inner -->
                <div class="contact-inner">
                    <div class="container">
                        <section class="no-border">
                            <div class="map-box">
                                <div id="map_addresses" style="height:440px;" class="map" data-latitude="-6.887796" data-longitude="107.580303" data-location="Subianto & Siane <br> <a href='https://www.google.co.id/maps/place/INERRE+Interior/@-6.900453,107.603322,17z/data=!3m1!4b1!4m2!3m1!1s0x2e68e64383f4eda3:0x420267de73972b84'><font style=color:#808000;>View on google maps</font></a> " >
                                </div>
                            </div>
                        
                            <div class="contact-details">
                                <div class="row">
                                    <!-- <div class="col-md-6">
                                        <h3>Contact  details : </h3>
                                    </div> -->
                                    <div class="col-md-12">
                                       <div class="col-md-8">
                                           <h4>Main Office</h4>
                                           <ul>
                                               <li><a href="https://www.google.co.id/maps/place/6%C2%B053%2716.1%22S+107%C2%B034%2749.1%22E/@-6.887796,107.580303,17z/data=!4m2!3m1!1s0x0:0x0" target="_blank">Jl. Suka Mekar III No. 7, Bandung, Indonesia</a></li>
                                               <li><a href="#">+62 22 2013973</a></li>
                                               <li><a href="mailto:contact@subiantosiane.com">contact@subiantosiane.com</a></li>
                                           </ul>
                                       </div>
                                       <div class="col-md-4"></div>
                                   </div>
                                   <div class="col-md-12" style="padding-top:20px;">
                                       <div class="col-md-8">
                                           <h4>Find Us On </h4>
                                           <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/inerre.interior" target="_blank">Facebook</a> |
                                                    <a href="https://twitter.com/inerre_interior" target="_blank">Twitter</a> |
                                                    <a href="https://instagram.com/inerre_interior" target="_blank">Instagram</a>
                                                </li>
                                           </ul>
                                       </div>
                                       <div class="col-md-4"></div>
                                   </div>
                                   <div class="col-md-12" style="padding-top:20px;">
                                       <div class="col-md-8">
                                       <h4>Send Us Message  </h4>
                                           <div class="contact-form-holder">
                                                <div id="contact-form">
                                                    <div id="message"></div>
                                                    <form method="post" action="contact/submitmessage2" name="contactform" id="contactform">
                                                        <input name="name" type="text" id="name" onClick="this.select()" placeholder="Name" autocomplete="off">
                                                        <input name="email" type="text" id="email" onClick="this.select()"  placeholder="E-mail" autocomplete="off">            
                                                        <textarea name="comments"  id="comments" onClick="this.select()" placeholder="Message"></textarea>  
                                                        <button id="submit"><span>SEND</span></button>                                                                                                   
                                                    </form>
                                                </div>
                                            </div>
                                       </div>
                                       <div class="col-md-4"></div>
                                   </div>  
                                </div>
                            </div>
                        </section>
                        <!-- contact info  end-->
                        <!-- contact form -->
                        <!-- contact form  end-->
                    </div>
                </div>
                <!-- wrapper inner end   -->
                
                <?php 
               /* if(isset($loadrandomphoto)){
                    $sidebar = array(
                        'sidebarphoto' => $loadrandomphoto->photo,
                        'statussidebar' => $loadrandomphoto->status_sidebar_random
                    );   
                }else{
                    $sidebar = array(
                        'sidebarphoto' => '',
                        'statussidebar' => ''
                        );
                }
                $this->load->view('public/templates/parallax_column', $sidebar);*/?>
                </div>
                <?php //$this->load->view('public/templates/footer_block');?>
            </div>
            <!-- content  end  -->
        </div>
        <!-- content-holder  end  -->
    </div>
    <!-- wrapper end -->

<?php $this->load->view('public/templates/footer'); ?>