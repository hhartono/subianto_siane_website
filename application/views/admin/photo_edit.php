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
	                   			
	                        <form action="/administrator/photodeletesubmit" method="POST">
	                        	<?php 
	                        		if(isset($projecthome)){ 
	                        		foreach ($projecthome as $project){ 
	                        	?>
	                        		<div class="col-lg-3">
	                        		<section class="panel">
	                        			<img src="/uploads/project/<?php echo $project->photo; ?>" width="250" ></br>
	                        			<input type="checkbox" name="photo[]" value="<?php echo $project->id;?>"> Pilih Untuk Dihapus<br/>
	                        			<input type="hidden" name="id" value="<?php echo $project->id;?>">
	                        			<input type="hidden" name="idproject" value="<?php echo $project->id_project;?>">
	                        			<input type="hidden" name="title" value="<?php echo $project->title;?>">
	                        		</section>
	                        		</div>
	                        		<?php
	                        		}
	                        		?>
	                        	<div class="col-lg-11">
	         	               		<input type="submit" class="finish btn btn-danger" value="Hapus">
	         	               	</div>
	         	               	<?php
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