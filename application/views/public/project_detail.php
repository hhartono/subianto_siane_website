<?php $this->load->view('public/templates/header'); ?>
            <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <div class="content-holder elem scale-bg2 transition3" >
                    <div class="content">
                        <!-- background animation  -->		
                        <!-- <div class="bg-animate"><img src="/assets/public/images/body-bg.png"  class="respimg" alt=""></div> -->

                        <div class="contentcenter hid-port-info" style="">
                            
                            <!-- <section class="no-padding no-border"> -->
                                <!-- page title -->     
                                <!-- <div class="container"> -->
                                    <!-- <div class="page-title no-border">
                                        <h2><?php //echo $loadoneproject->title;?></h2>
                                        <h3><span><?php //echo $loadoneproject->description;?></span></h3>
                                    </div> -->
                                <!-- </div> -->
                            <!-- </section> -->
                            
                            <div class="clearfix"></div>
                            
                            <div class="container" style="background:#fff;">
                                <section style="padding:0;">
                                <!-- 2. Add images to <div class="fotorama"></div>. -->
                                <?php
                                    if(isset($loadallphotosdetailproject)){
                                ?>
                                    <div id="fotorama" class="fotorama"
                                        data-nav="thumbs" 
                                        data-height="400" 
                                        data-maxwidth="100%" 
                                        data-transition="crossfade" 
                                        data-keyboard="true"
                                        data-arrow="false">
                                <?php
                                        foreach ($loadallphotosdetailproject as $lad) {
                                ?>
                                        <img src="/uploads/project/<?php echo $lad->photo;?>">
                                <?php
                                        }
                                    ?>
                                    </div>
                                    <?php
                                    }else{
                                        // echo nothing
                                        echo '';
                                    }
                                    ?>
                                    
                                    <!-- <div id="playpause"> -->
                                        <!-- <a href="#" id="play">play</a> -->
                                        <!-- <a href="#" id="pause">pause</a> -->
                                    <!-- </div> -->
                                    <!-- end gallery items -->  

                                    <div class="row" style="background:#fff;">
                                        <div class="col-md-10">
                                            <div class="project-details">
                                                <p>Project: <?php echo $loadoneproject->title;?></p>
                                                <!-- <h3><span>Internet tend to repeat predefined chunks as necessary, making this the first true</span></h3> -->
                                                <p><?php echo html_entity_decode($loadoneproject->project_story);?></p>
                                                <ul class="descr">
                                                    <li><span>Date :</span> <?php echo $loadoneproject->project_detail_date;?> </li>
                                                    <?php
                                                        if($loadoneproject->project_detail_client!=''){
                                                    ?>
                                                            <li><span>Client :</span> <?php echo ucwords($loadoneproject->project_detail_client);?> </li>       
                                                    <?php
                                                        }else{
                                                            // echo nothing
                                                            echo '';
                                                        }
                                                    ?>
                                                    <li><span>Status :</span> <?php echo ucwords($loadoneproject->project_detail_status);?> </li>
                                                    <li><span>Location : </span> <?php echo ucwords($loadoneproject->project_detail_location);?>  </li>
                                                    <!-- <li><span>Location : </span>  <a href="https://goo.gl/maps/UzN5m" target="_blank"> Kharkiv Ukraine  </a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- about text end -->
                                <div class="content-nav">
                                    <ul>
                                    <?php
                                        if($prev==''){
                                    ?>
                                        <li><a href="/project/detail/<?php echo $next;?>" class="ajax"><i class="fa fa-long-arrow-right"></i></a></li>
                                    <?php
                                        }elseif($next==''){
                                    ?>
                                        <li><a href="/project/detail/<?php echo $prev;?>" class="ajax"><i class="fa fa-long-arrow-left"></i></a></li>
                                    <?php
                                        }else{
                                    ?>
                                        <li><a href="/project/detail/<?php echo $prev;?>" class="ajax"><i class="fa fa-long-arrow-left"></i></a></li>
                                        <li><span>/</span></li>
                                        <li><a href="/project/detail/<?php echo $next;?>" class="ajax"><i class="fa fa-long-arrow-right"></i></a></li>
                                    <?php
                                        }
                                    ?>
                                        
                                    </ul>
                                    <div class="p-all">
                                        <a href="/project" class="ajax"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            
                            </div>


                        </div>
                        
                        
                    <?php 
                        // $sidebar = array(
                        //     'sidebarphoto' => $loadoneproject->sidebarphoto,
                        //     'statussidebar' => $loadoneproject->statussidebar
                        // );
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