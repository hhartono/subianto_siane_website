<?php $this->load->view('public/templates/header'); ?>
    
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content">
                <!-- background animation  -->      
                <div class="bg-animate"><img src="/assets/public/images/body-bg.png"  class="respimg" alt=""></div>
                <!-- wrapper-inner -->
                <div class="wrapper-inner">
                    <div class="container">
                        <div class="page-title no-border">
                            <h2>Want to order a project ? Contact with us</h2>
                            <h3><span>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true .</span></h3>
                        </div>
                        <!-- map  -->
                        <section class="no-border">
                            <div class="map-box">
                                <div id="map_addresses" class="map" data-latitude="40.7688628" data-longitude="-73.9688209" data-location="27th Brooklyn New York, NY 10065">
                                </div>
                            </div>
                        </section>
                        <!-- map  end-->
                        <!-- contact info  -->
                        <section class="no-border">
                            <div class="contact-details">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Contact  details : </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Office in New York</h4>
                                        <ul>
                                            <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                                            <li><a href="#">+7(111)123456789</a></li>
                                            <li><a href="#">yourmail@domain.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Find Us On : </h4>
                                        <ul>
                                            <li><a href="#">Facebook</a></li>
                                            <li><a href="#">Twitter </a></li>
                                            <li><a href="#">Instagram</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- contact info  end-->
                        <!-- contact form -->
                        <section>
                            <div class="contact-form-holder">
                                <div id="contact-form">
                                    <div id="message"></div>
                                    <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                        <input name="name" type="text" id="name"  onClick="this.select()" value="Name" >
                                        <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >            
                                        <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>  
                                        <button type="submit"  id="submit"><span>Send </span> <i class="fa fa-long-arrow-right"></i></button>                                                                                                   
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!-- contact form  end-->
                    </div>
                </div>
                <!-- wrapper inner end   -->
                
                <?php 
                $sidebar = array(
                    'sidebarphoto' => $loadrandomphoto->photo,
                    'statussidebar' => $loadrandomphoto->status_sidebar_random
                );
                $this->load->view('public/templates/parallax_column', $sidebar);?>

                <?php $this->load->view('public/templates/footer_block');?>
            </div>
            <!-- content  end  -->
        </div>
        <!-- content-holder  end  -->
    </div>
    <!-- wrapper end -->

<?php $this->load->view('public/templates/footer'); ?>
        