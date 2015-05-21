<?php $this->load->view('public/templates/header'); ?>
    <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <div class="content-holder elem scale-bg2 transition3" >
                    <div class="content">
                        <!-- background animation  -->		
                        <div class="bg-animate"><img src="images/body-bg.png"  class="respimg" alt=""></div>
                        <!-- wrapper inner -->	
                        <div class="wrapper-inner">
                            <section class="no-padding no-border">
                                <!-- page title -->		
                                <div class="container">
                                    <div class="page-title no-border">
                                        <h2><?php echo $loadoneproject->title;?></h2>
                                        <h3><span><?php echo $loadoneproject->description;?></span></h3>
                                    </div>
                                </div>
                            </section>
                            <div class="clearfix"></div>
                            <div class="container">
                                <section>
                                    <div class="gallery-items three-coulms grid-small-pad popup-gallery">
                                  	<?php
                                  	if(isset($loadallphotosdetailproject)){
                                  		foreach ($loadallphotosdetailproject as $lad) {
                                  	?>
										<div class="gallery-item">
                                            <div class="grid-item-holder">
                                                <div class="box-item">
                                                    <a href="/uploads/project/<?php echo $lad->photo;?>" title="">
                                                    <span class="overlay"></span> 
                                                    <img  src="/uploads/project/<?php echo $lad->photo;?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                  	<?php
                                  		}
                                  	?>

                                  	<?php
                                  	}else{
                                  		// echo nothing
                                  		echo '';
                                  	}
                                  	?>
                                        
                                    </div>
                                    <!-- end gallery items -->	
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="project-details">
												<!-- <h3><span>Internet tend to repeat predefined chunks as necessary, making this the first true</span></h3> -->
                                                <p><?php echo $loadoneproject->project_story;?></p>
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
                                        <li><a href="portfolio-single2.html" class="ajax"><i class="fa fa-long-arrow-left"></i></a></li>
                                        <li><span>/</span></li>
                                        <li><a href="portfolio-single3.html" class="ajax"><i class="fa fa-long-arrow-right"></i></a></li>
                                    </ul>
                                    <div class="p-all">
                                        <a href="/project" class="ajax"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- wrapper inner end   -->
                        
                    <?php 
                        $sidebar = array(
                            'sidebarphoto' => $loadoneproject->sidebarphoto,
                            'statussidebar' => $loadoneproject->statussidebar
                        );
                        $this->load->view('public/templates/parallax_column', $sidebar);
                   ?>

                    <?php $this->load->view('public/templates/footer_block');?>
	

                    </div>
                    <!-- content  end  -->
                </div>
                <!-- content-holder  end  -->
            </div>
            <!-- wrapper end -->
<?php $this->load->view('public/templates/footer'); ?>    