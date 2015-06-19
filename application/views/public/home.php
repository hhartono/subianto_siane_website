<?php $this->load->view('public/templates/header'); ?>
    
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content full-height">
                <div class="swiper-container" id="horizontal-slider" data-mwc="1">
                    <div class="swiper-wrapper">
                    <?php
                    if(isset($loadfeaturedhome)){
                        foreach ($loadfeaturedhome as $lfh){
                    ?>
                        <div class="swiper-slide">
                            <div class="bg" style="background-image:url(/uploads/project/<?php echo $lfh->photo;?>)"></div>
                            <div class="overlay"></div>
                            <div class="slide-title-holder">
                                <!-- <div class="slide-title"> -->
                                    <h3 class="transition">  <a class="ajax transition2" href="project/detail/<?php echo $lfh->project_uri;?>"><?php echo ucwords($lfh->title);?></a>  </h3>
                                    <!-- <h4>Ut wisi enim ad minim veniam, quis nostrud exerci</h4> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    <?php        
                        }
                    }else{
                    ?>
                        <div class="swiper-slide">
                            <div class="bg" style="background-image:url(/assets/public/images/bg/1.jpg)"></div>
                            <div class="overlay"></div>
                            <div class="slide-title-holder">
                                <div class="slide-title">
                                    <h3 class="transition">  <a class="ajax transition2" href="">Default Feature</a>  </h3>
                                    <h4>Ut wisi enim ad minim veniam, quis nostrud exerci</h4>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                        
                    </div>
                    <div class="swiper-nav-holder hor">
                        <a class="swiper-nav arrow-left transition " href="#"><i class="fa fa-long-arrow-left"></i></a>
                        <a class="swiper-nav  arrow-right transition" href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="pagination"></div>
            </div>
        </div>
    </div>
    <!-- wrapper end -->

<?php $this->load->view('public/templates/footer'); ?>
        