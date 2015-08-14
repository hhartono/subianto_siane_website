<?php $this->load->view('public/templates/header'); ?>
    
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content full-height" style="">
                <div id="content-home" class="contentcenter hid-port-info" style="padding-top:221px; height:100%">
                <?php 
                if(isset($loadcategorycount)){
                    $c = 1;
                    foreach ($loadcategorycount as $category) {
                        if($c==1){
                            $bp = 'box-left';
                        }
                        if($c==2){
                            $bp = 'box-center';
                        }
                        if($c==3){
                            $bp = 'box-right';
                        }
                ?>   
                        <div class="category-intro-item " >
                            <div class="category-item-holder ">
                                <div class="category-box-item ">
                                    <a href="/project/filter/<?php echo strtolower($category->category_name);?>" class="ajax">
                                    <span class="category-box-text">
                                        <span class="category-title"><?php echo $category->category_name;?></span>
                                        <span class="category-arrow"> > </span>
                                    </span>
                                    <span class="overlay"></span>    
                                    
                                    <?php
                                    if($c==1){
                                    ?>
                                        <img  src="/assets/public/images/categories_bar/category_11_.jpg" alt="">
                                    <?php
                                    }
                                    if($c==2){
                                    ?>
                                        <img  src="/assets/public/images/categories_bar/category_13_.jpg" alt="">
                                    <?php      
                                    }
                                    if($c==3){
                                    ?>
                                        <img  src="/assets/public/images/categories_bar/category_4.jpg" alt="">
                                    <?php
                                    }
                                    ?>
                                    </a>
                                </div>
                                <!-- <div class="category-item grid-item ">
                                    <h3>
                                        <a href="" class=""><?php // echo $category->category_name;?></a>
                                    </h3>
                                </div> -->
                            </div>
                        </div>


                <?php     
                        $c++;
                    }
                }else{
                    // echo nothing
                }
                ?>
                    <!-- <div class="category-intro-item box-left">
                        <div class="category-item-holder ">
                            <div class="category-box-item ">
                                <a href="" class="ajax">
                                <span class="overlay"></span> 
                                <img  src="/assets/public/images_example/011903-8R.jpg"   alt="">
                                </a>
                            </div>
                            <div class="category-item grid-item ">
                                <h3>
                                    <a href="" class="">Houses</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category-intro-item box-center">
                        <div class="category-item-holder ">
                            <div class="category-box-item ">
                                <a href="" class="ajax">
                                <span class="overlay"></span> 
                                <img  src="/assets/public/images_example/045189-8R.jpg"   alt="">
                                </a>
                            </div>
                            <div class="category-item grid-item ">
                                <h3>
                                    <a href="" class="">Interior</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    
                    <div class="category-intro-item box-right">
                        <div class="category-item-holder ">
                            <div class="category-box-item ">
                                <a href="" class="ajax">
                                <span class="overlay"></span> 
                                <img  src="/assets/public/images_example/015512-8R.jpg"   alt="">
                                </a>
                            </div>
                            <div class="category-item grid-item ">
                                <h3>
                                    <a href="" class="">Industrial</a>
                                </h3>
                            </div>
                        </div>
                    </div> -->

                    <!-- 
                    <a href="">
                        <div class="longbox box-left">
                            
                        </div>
                    </a>
                    <a href="">
                        <div class="longbox box-center">
                            
                        </div>
                    </a>
                    <a href="">
                        <div class="longbox box-right">
                            
                        </div>
                    </a> -->
                </div>
                
                <!-- <div class="swiper-container" id="horizontal-slider" data-mwc="1"> -->
                    <!-- <div class="swiper-wrapper"> -->
                    <?php
                    // if(isset($loadfeaturedhome)){
                        // foreach ($loadfeaturedhome as $lfh){
                    ?>
                        <!-- <div class="swiper-slide"> -->
                            <!-- <div class="bg" style="background-image:url(/uploads/project/<?php echo $lfh->photo;?>)"></div> -->
                            <!-- <div class="overlay"></div> -->
                            <!--
                            <div class="slide-title-holder">
                                <div class="slide-title">
                                    <h3 class="transition">  <a class="ajax transition2" href="project/detail/<?php echo $lfh->project_uri;?>"><?php echo ucwords($lfh->title);?></a>  </h3>
                                </div>

                                
                            </div>
                            -->
                        </div>
                    <?php        
                        // }
                    // }else{
                    ?>
                        <!-- <div class="swiper-slide">
                            <div class="bg" style="background-image:url(/assets/public/images/bg/1.jpg)"></div>
                            <div class="overlay"></div>
                            <div class="slide-title-holder">
                                <div class="slide-title">
                                    <h3 class="transition">  <a class="ajax transition2" href="">Default Feature</a>  </h3>
                                    <h4>Ut wisi enim ad minim veniam, quis nostrud exerci</h4>
                                </div>
                            </div>
                        </div> -->
                    <?php
                    // }
                    ?>
                        
                    <!-- </div> -->
                    <!-- <div class="swiper-nav-holder hor">
                        <a class="swiper-nav arrow-left transition " href="#"><i class="fa fa-long-arrow-left"></i></a>
                        <a class="swiper-nav  arrow-right transition" href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div> -->
                <!-- </div> -->
                <!-- <div class="pagination"></div> -->

            </div>
        </div>
    </div>
    <!-- wrapper end -->

<?php $this->load->view('public/templates/footer'); ?>
        