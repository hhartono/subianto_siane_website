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
                <!-- parallax column   -->
                <div class="img-wrap">
                    <div class="bg" style="background-image: url(/assets/public/images/bg/long/1.jpg)"  data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                </div>
                <!-- parallax column end   -->
                <!--to top    -->
                <div class="to-top">
                    <i class="fa fa-long-arrow-up"></i>
                </div>
                <!-- to top  end -->
                <!--=============== footer ===============-->
                <div class="height-emulator"></div>
                <footer>
                    <div class="footer-inner">
                        <div class="row">
                            <div class="col-md-5">
                                <a class="footer-logo ajax" href="index.html"><img src="/assets/public/images/footer-logo.png" alt=""></a>
                            </div>
                            <div class="col-md-3">
                                <div class="footer-adress">
                                    <span>USA 27TH BROOKLYN NY</span>
                                    <a href="" target="_blank">View on map</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <ul class="footer-contact">
                                    <li>+7(111)123456789</li>
                                    <li><a href="#">yourmail@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <p> &#169; Domik   2015.  All rights reserved.  </p>
                            </div>
                        </div>
                    </div>
                    <span class="footer-decor"></span>
                </footer>
                <!-- footer end    -->
            </div>
            <!-- content  end  -->
        </div>
        <!-- content-holder  end  -->
    </div>
    <!-- wrapper end -->

<?php $this->load->view('public/templates/footer'); ?>
        