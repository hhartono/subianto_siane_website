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
                        Project Photo Home
                    </header>
                    <div class="panel-body">
                    <p><?=$this->session->flashdata('message')?> </p>
	                    <fieldset title="Step: finish photos of project" class="step" id="default-step-0">
	                   			
	                        <form action="/administrator/projectphotohomesubmit" method="POST">
	                        	<?php
	                        	if(isset($projecthome)){ 
	                        		foreach ($projecthome as $project){ 
	                        	?>
	                        		<div class="col-lg-3">
	                        		<section class="panel">
	                        			<img src="/uploads/project/<?php echo $project->photo; ?>" width="250" ></br>
	                        			<?php if($project->status_feature_home == 0) { ?>
	                        			<input type="radio" name="home" value="<?php echo $project->id;?>"> Pilih Untuk Tampilan Home<br/>
	                        			<?php }else{ ?>
	                        			<input type="radio" name="home" value="<?php echo $project->id;?>" checked> Pilih Untuk Tampilan Home<br/>
	                        			<?php } ?>
	                        			<input type="hidden" name="id" value="<?php echo $project->id;?>">
	                        			<input type="hidden" name="idproject" value="<?php echo $project->id_project;?>">
	                        			<input type="hidden" name="title" value="<?php echo $project->title;?>">
	                        		</section>
	                        		</div>	                        	
	                        	<?php
	                        		}
	                        	}
	                        	?>
	                        	<div class="col-lg-11">
	         	               		<input type="submit" class="finish btn btn-danger" value="Finish">
	         	               	</div>
	                        </form>
	                        <form action="/administrator/projectphotohomereset" method="post">
	                        	<?php
	                        	if(isset($projecthome)){ 
	                        		foreach ($projecthome as $projects){ 
	                        	?>
	                        		<input type="hidden" name="idproject" value="<?php echo $projects->id_project;?>">
	                        		<input type="hidden" name="title" value="<?php echo $projects->title;?>">
	                        	<?php
	                        		}
	                        	}
	                        	?>
	                        	<div class="col-lg-1">
	         	               		<input type="submit" class="finish btn btn-warning" value="Reset">
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