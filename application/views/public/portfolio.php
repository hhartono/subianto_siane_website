<?php $this->load->view('public/templates/header'); ?>
 
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content">
             <!-- background animation  -->		
            <!-- <div class="bg-animate"><img src="/assets/public/images/body-bg.png"  class="respimg" alt=""></div> -->
            	<div id="portfolio-page-alert" class="contentcenter" style="padding-top:221px; display:none;">
        			<div id="alert-bestview-portfolio">
			            <!-- best view on landscape orientation or larger devices -->
			            <img src="/assets/public/images/desktop_128.png" alt=""><br>
			            portfolio can be viewed on the desktop device	
			            
			        </div>
            	</div>
            	<div id="openbooktext" class="" style="">
            		<img src="/assets/public/images/papercurl_landscape_large.png" alt=""><br><br>
            		open this virtual book

            	</div>

            
            <div class="flipbook-viewport">
        		<div class="book-container rel">

        			<div class="flipbook" id="flipbook" style="margin-top:100px;">
        				<!-- <div class="hard"> Subianto & Siane </div> -->
						<div class="hard" style="background:#ccc;"> 
							<img src="assets/public/book/SS Cover.jpg" alt="">
						</div>
						<div class="hard front-side" style="background:#000;">
						</div>
						<!-- <div class="page own-size" depth="">
							<img src="assets/public/book/SS kalkir.jpg" alt="">
						</div>
						<div class="page own-size" depth="" style="background:#fff;">
						</div> -->


					</div>
            	</div>
        	</div>

			<?php //$this->load->view('public/templates/footer_block');?>
                
            </div>
        </div>
    </div>
    <!-- wrapper end -->

 <?php $this->load->view('public/templates/footer'); ?>


