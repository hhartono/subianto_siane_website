<?php 
    $this->load->view('admin/templates/header_admin');
    $this->load->view('admin/templates/sidebar_admin');
?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Photo Home
                    </header>
                    <div class="panel-body">
                    <p><?=$this->session->flashdata('message')?> </p>
	                    <fieldset title="Step: photo home" class="step" id="default-step-0">
	                   			
	                       	<?php
	                        	if(isset($projecthome)){ 
	                        		foreach ($projecthome as $project){ 
	                        	?>
	                        		<div class="col-lg-3">
	                        		<section class="panel">
	                        			<img src="/uploads/project/<?php echo $project->photo; ?>" width="250" ></br>
	                        			Project : <?php echo $project->title;?>
	                        		</section>
	                        		</div>
	                        		
	                        	<?php
	                        		}
	                        	}else{
	                        	?>
	                        		<div class="col-lg-3">
	                        		<section class="panel">
	                        			Tidak Ada Data
	                        		</section>
	                        		</div>
	                        	<?php
	                        	}
	                        	?>
	                    </fieldset>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<?php
    $this->load->view('admin/templates/footer_admin');
?>