<?php $this->load->view('public/templates/header'); ?>
 
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content">
             <!-- background animation  -->		
            <!-- <div class="bg-animate"><img src="/assets/public/images/body-bg.png"  class="respimg" alt=""></div> -->
            	<div id="portfolio-page-alert" class="contentcenter" style="padding-top:221px; display:none;">
        			<div id="alert-bestview-portfolio">
			            best view on landscape orientation or larger devices
			        </div>
            	</div>
            	<div id="openbooktext" class="" style="">
            		open this virtual book
            	</div>

            
            <div class="flipbook-viewport">
        		<div class="book-container rel">

        			<div class="flipbook" id="flipbook" style="margin-top:100px;">
        				<!-- <div class="hard"> Subianto & Siane </div> -->
						<div class="" style="background:#ccc;"> 
							<div class="side"></div> 
							<img src="assets/public/book/SS Cover.jpg" alt="">
						</div>
						<div class="hard front-side" style="background:#000;">
							
						</div>
						<div class="page own-size" depth="5">
							<img src="assets/public/images_example/turnjs_example/1.jpg" alt="">
						</div>
						<div class="page own-size" depth="5">
							<img src="assets/public/images_example/turnjs_example/2.jpg" alt="">
						</div>
						<div class="page own-size">
							<img src="assets/public/images_example/turnjs_example/3.jpg" alt="">
						</div>
						<div class="page own-size">
							<img src="assets/public/images_example/turnjs_example/4.jpg" alt="">
						</div>
						<div class="page own-size">
							<img src="assets/public/images_example/turnjs_example/5.jpg" alt="">
						</div>
						<div class="page own-size">
							<img src="assets/public/images_example/turnjs_example/6.jpg" alt="">
						</div>
						<div class="hard back-side" style="background:#fff;"> </div>
						<div class="page hard" style="background: #ccc;"></div>
					</div>
            	</div>
        	</div>

			<?php //$this->load->view('public/templates/footer_block');?>
                
            </div>
        </div>
    </div>
    <!-- wrapper end -->

 <?php $this->load->view('public/templates/footer'); ?>


