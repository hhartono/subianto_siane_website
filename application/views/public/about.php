<?php $this->load->view('public/templates/header'); ?>
    
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content">
                <!-- background animation  -->      
                <!-- <div class="bg-animate"><img src="/assets/public/images/body-bg.png"  class="respimg" alt=""></div> -->
                <!-- wrapper inner -->  
                <div class="contentcenter mm"  style="">
                    
                    <div class="container">
                        <section style="padding:10px 0 10px 0;">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8" id="about-text">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                    <p>  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </section>
                        <!-- about text end -->

                        <!-- team -->
                        <section id="sec2"  style="padding:0 0 30px 0; background:#fff;">
                            <div class="section-title row" style="margin:0 0 -20px 0;">
                                <!-- <div class="col-md-2"></div> -->
                                <div class="col-md-12">
                                    <h3 style="width:100%; margin:0 auto;">team</h3>    
                                </div>
                                <!-- <div class="col-md-2"></div> -->
                            </div>
                            <ul class="team-holder">
                                <!-- 1 -->
                                <li>
                                    <div class="team-box">
                                        <div class="team-photo">
                                            <div class="overlay"></div>
                                            <!-- <ul class="team-social">
                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul> -->
                                            <img src="/assets/public/images/team/small/1.jpg" alt="" class="respimg">
                                            <!-- <span>Find on</span>                                       -->
                                        </div>
                                        <div class="team-info">
                                            <h3>David Gray</h3>
                                            <h4>Co-manager associated</h4>
                                        </div>
                                    </div>
                                </li>
                                <!-- 2 -->
                                <li>
                                    <div class="team-box">
                                        <div class="team-photo">
                                            <div class="overlay"></div>
                                            <!-- <ul class="team-social">
                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul> -->
                                            <img src="/assets/public/images/team/small/1.jpg" alt="" class="respimg">
                                            <!-- <span>Find on</span>                                       -->
                                        </div>
                                        <div class="team-info">
                                            <h3>Austin Evon</h3>
                                            <h4>Co-manager associated</h4>
                                        </div>
                                    </div>
                                </li>
                                <!-- 3 -->
                                <li>
                                    <div class="team-box">
                                        <div class="team-photo">
                                            <div class="overlay"></div>
                                            <!-- <ul class="team-social">
                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul> -->
                                            <img src="/assets/public/images/team/small/1.jpg" alt="" class="respimg">
                                            <!-- <span>Find on</span>                                       -->
                                        </div>
                                        <div class="team-info">
                                            <h3>Taylor Roberts</h3>
                                            <h4>Co-manager associated</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <!-- team end   -->

                        <!-- story / resume   -->
                        
                        <!-- resume / story end -->
                        
                        
                    </div>
                </div>
                <!-- contentcenter end   -->
                
                <?php 
                // if(isset($loadrandomphoto)){
                //     $sidebar = array(
                //         'sidebarphoto' => $loadrandomphoto->photo,
                //         'statussidebar' => $loadrandomphoto->status_sidebar_random
                //     );   
                // }else{
                //     $sidebar = array(
                //         'sidebarphoto' => '',
                //         'statussidebar' => ''
                //         );
                // }
                // $this->load->view('public/templates/parallax_column', $sidebar);
                ?>

                <?php //$this->load->view('public/templates/footer_block');?>

            </div>
            <!-- content  end  -->
        </div>
        <!-- content-holder  end  -->
    </div>
    <!-- wrapper end -->

<?php $this->load->view('public/templates/footer'); ?>
        