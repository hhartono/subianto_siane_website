<?php $this->load->view('public/templates/header'); ?>
    
    <!--=============== wrapper ===============-->	
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content ">
                <div id="project-page" class=" contentcenter hid-port-info" style="padding-top:170px;">
                    <div class="pagination-nav" style="right:0;">
                        <a href="#" class="prev">
                            <img src="/assets/public/images/arrow_prev.png" alt="">
                        </a>
                    </div>
                    <div class="container-gallery" style="width:100%; overflow:hidden;">
                        <div id="alert-bestview" style="display:none;">
                            best view on portrait orientation or larger devices <br>
                            <img src="/assets/public/images/ltop-200.png" alt="">
                        </div>

                        <!-- gallery items -->
                        <div class="gallery-items hid-port-info">
                        <?php
                            if(isset($loadallproject)){
                                foreach ($loadallproject as $lap) {
                        ?>
                                    <div class="gallery-item <?php echo $lap->category_name;?>">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <a href="/project/detail/<?php echo $lap->project_uri;?>" class="ajax">
                                                <span class="overlay"></span> 
                                            <?php
                                                if($lap->photo == "" || $lap->photo == '0'){
                                            ?>
                                                    <img  src="/assets/public/images/default.jpg"   alt="">
                                            <?php
                                                }else{
                                            ?>
                                                    <img  src="/uploads/project/<?php echo $lap->photo;?>"   alt="">    
                                            <?php
                                                }
                                            ?>                                                        
                                                </a>
                                            </div>
                                            <div class="grid-item ">
                                                <h3><a href="project/detail/<?php echo $lap->project_uri;?>" class="ajax portfolio-link"><?php echo $lap->title;?></a></h3>
                                                <!-- <span>Hoses Design</span> -->
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
                    </div>

                    <div class="pagination-nav" style="right:0;">
                        <a href="#" class="next">
                            <img src="/assets/public/images/arrow_next.png" alt="">
                        </a>
                    </div>

                </div>
                <div class="filter-holder fixed-filter">
                    <div class="gallery-filters vis-filter">
                        <!-- <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All</a>        -->
                    <?php 
                        if(isset($loadcategorycount)){
                            foreach($loadcategorycount as $lcc){
                                if($lcc->count_category > 0){

                                    if(isset($filter)){
                                        $f = ucwords($filter);
                                        if($f == $lcc->category_name){
                        ?>
                                            <a href="#" class="gallery-filter " data-url="<?php echo $lcc->category_name;?>" data-filteractive=".<?php echo $f;?>" data-filter=".<?php echo $lcc->category_name;?>"><?php echo ucwords($lcc->category_name);?></a>    
                        <?php                
                                        }else{
                        ?>
                                            <a href="#" class="gallery-filter " data-url="<?php echo $lcc->category_name;?>" data-filteractive="" data-filter=".<?php echo $lcc->category_name;?>"><?php echo ucwords($lcc->category_name);?></a>    
                        <?php
                                        }
                                    }else{
                        ?>
                                <a href="#" class="gallery-filter " data-filter=".<?php echo $lcc->category_name;?>"><?php echo ucwords($lcc->category_name);?></a>
                        <?php
                                    }
                                }else{
                                    echo '';
                                }
                            }
                        }else{
                            // echo nothing
                            echo '';
                        }
                    ?>
                    </div>
                </div>
                <!-- <div class="wrapper-inner no-padding full-width-wrap"> -->
                    <!-- <section class="no-padding no-border"> -->
                        <!-- <div class="gallery-items   hid-port-info"> -->
                        <!-- <div class="contentcenter hid-port-info" style="padding-top:221px; margin:0px auto;width:100%; max-width:1024px; height:100%"> -->
                        <?php
                            // if(isset($loadallproject)){
                                // foreach ($loadallproject as $lap) {
                        ?>
                                    <!-- <div class="gallery-item <?php // echo $lap->category_name;?>">
                                        <div class="grid-item-holder">
                                            <div class="box-item">
                                                <a href="project/detail/<?php //echo $lap->project_uri;?>" class="ajax">
                                                <span class="overlay"></span>  -->
                                            <?php
                                                // if($lap->photo == "" || $lap->photo == '0'){
                                            ?>
                                                    <!-- <img  src="/assets/public/images/default.jpg"   alt=""> -->
                                            <?php
                                                // }else{
                                            ?>
                                                    <!-- <img  src="/uploads/project/<?php //echo $lap->photo;?>"   alt="">     -->
                                            <?php
                                                //}
                                            ?>    <!--                                                     
                                                </a>
                                            </div> -->
                                            <!-- <div class="grid-item "> -->
                                                <!-- <h3><a href="project/detail/<?php //echo $lap->project_uri;?>" class="ajax portfolio-link"><?php// echo $lap->title;?></a></h3> -->
                                                <!-- <span>Hoses Design</span> -->
                                            <!-- </div>
                                        </div>
                                    </div> -->
                        <?php   
                            //     }
                            // }else{
                            //     // echo nothing
                            //     echo '';
                            // }
                        ?>
                        <!-- </div> -->
                        <!-- end gallery items -->                  
                    <!-- </section> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- wrapper end -->

<?php $this->load->view('public/templates/footer'); ?>