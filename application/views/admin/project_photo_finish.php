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
                        Project Photo Finish
                    </header>
                    <div class="panel-body">
	                  	<div class="stepy-tab">
	                        <ul id="default-titles" class="stepy-titles clearfix">
	                            <li id="default-title-0">
	                                <div>Add Project</div>
	                            </li>
	                            <li id="default-title-1" class="">
	                                <div>Upload</div>
	                            </li>
	                            <li id="default-title-2" class="current-step">
	                                <div>Finish</div>
	                            </li>
	                        </ul>
	                    </div>
	                   
	                    <fieldset title="Step: finish photos of project" class="step" id="default-step-0">
	                   			
	                        <form action="/administrator/projectphotofinishsubmit" method="POST">
	                        	<input type="hidden" name="idproject" value="<?php echo $idproject;?>">
	                        	<?php 
	                        	if(isset($projectalbum)){
	                        		foreach ($projectalbum as $project){ 
	                        	?>
	                        		<div class="col-lg-3">
	                        		<section class="panel">
	                        			<img src="/uploads/project/<?php echo $project->photo; ?>" width="250" ></br>
	                        			<input type="radio" name="cover" value="<?php echo $project->id;?>" checked> Cover<br/>
	                        			<input type="radio" name="sidebar" value="<?php echo $project->id;?>" checked> Sidebar<br/>  
	                        		</section>
	                        		</div>
	                        		
	                        	<?php
	                        		}
	                        	}else{
	                        		echo "";
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