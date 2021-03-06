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
                        Photo About
                    </header>
                    <div class="panel-body">
                    <p><?=$this->session->flashdata('message')?> </p>
	                    <fieldset title="Step: finish photos of project" class="step" id="default-step-0">
	                   			
	                        <form action="/administrator/projectphotoaboutsubmit" method="POST">
	                        	<?php
	                        	if(isset($projectabout)){ 
	                        		foreach ($projectabout as $project){ 
	                        	?>
	                        		<div class="col-lg-3">
	                        		<section class="panel">
	                        			<img src="/uploads/project/<?php echo $project->photo; ?>" width="250" ></br>
	                        			<?php if($project->status_about == 0) { ?>
	                        			<input type="radio" id ="about" name="about" value="<?php echo $project->id;?>"> Pilih Untuk Tampilan About<br/>  
	                        			<?php }else{ ?>
	                        			<input type="radio" id ="about" name="about" value="<?php echo $project->id;?>" checked> Pilih Untuk Tampilan About<br/>
	                        			<?php } ?>
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
	                        	<div class="col-lg-12">
	         	               		<input type="submit" class="finish btn btn-danger" value="Finish">
	         	               	</div>
	                        </form>	
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