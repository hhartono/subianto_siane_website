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
                        Project Photo Upload
                    </header>
                    <div class="panel-body">
	                  	<div class="stepy-tab">
	                        <ul id="default-titles" class="stepy-titles clearfix">
	                            <li id="default-title-0">
	                                <div>Add Project</div>
	                            </li>
	                            <li id="default-title-1" class="current-step">
	                                <div>Upload</div>
	                            </li>
	                            <li id="default-title-2" class="">
	                                <div>Finish</div>
	                            </li>
	                        </ul>
	                    </div>
                        	
	                    <fieldset title="Step: upload photos of project" class="step" id="default-step-0">
	                        <form action="/administrator/projectphotouploadsubmit" class="dropzone" id="projectphotoupload">
	                        	<input type="hidden" name="idproject" name="idproject" value="<?php echo $idproject;?>">
	                        </form>	
	                    </fieldset>
	                    <a href="/administrator/projectphotofinish/<?php echo $idproject;?>" class="finish btn btn-danger" >Next</a>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

<script src="/assets/admin/js/jquery.js"></script>
<script src="/assets/admin/assets/dropzone/dropzone.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	});
</script>

<?php
    $this->load->view('admin/templates/footer_admin');
?>