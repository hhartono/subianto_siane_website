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
                        Project Photo Edit
                    </header>                
                    <div class="panel-body">
                    <p><?=$this->session->flashdata('message')?> </p>

                    	<fieldset title="Step: finish photos of project" class="step" id="default-step-0">
	                   		<div class="col-lg-11">
		                    	<button class="btn btn-success btn-primary col-md-offset-12" data-toggle="modal" data-target="#viewModal">
		      	                    <i class="fa fa-plus"></i> Tambah Photo
		                        </button>
                    		</div>

	                        <form action="/administrator/photodeletesubmit" method="POST">
	                        	<?php 
	                        		if(isset($projecthome)){ 
	                        		foreach ($projecthome as $project){ 
	                        	?>
	                        		<div class="col-lg-3">
	                        		<section class="panel">
	                        			</br>
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
	                        	<div class="col-lg-12">
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


                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="viewModalLabel">Tambah Photo</h4>
                            </div>
                            <div class="modal-body">
                                <fieldset title="Step: upload photos of project" class="step" id="default-step-0">
			                        <form action="/administrator/projectphotouploadsubmit" class="dropzone" id="projectphotoupload">
			                        	<input type="hidden" name="idproject" name="idproject" value="<?php echo $idproject;?>">
			                        </form>	
			                    </fieldset>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                      </div>
                    </div>
                </div>  
                    <!-- END MODAL FOR VIEW DETAIL -->

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
		$('#viewModal').on('show.bs.modal', function (event) {
    	});

    	$('#viewModal').on('hidden.bs.modal',function(){
        	location.reload();
   		});
   	})
</script>
<?php
    $this->load->view('admin/templates/footer_admin');
?>