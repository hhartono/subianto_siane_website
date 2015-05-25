<?php 
    $this->load->view('admin/templates/header_admin');
    $this->load->view('admin/templates/sidebar_admin');
?>
	<!--main content start-->
	<section id="main-content">
	  <section class="wrapper site-min-height">
	      <!-- page start-->
	      <div class="row">
	          <div class="col-lg-12">
	              <section class="panel">
	                  <header class="panel-heading">
	                      Dynamic Table
	                  </header>
	                  <div class="panel-body">
	                   <p><?=$this->session->flashdata('message')?> </p>
	                        <div class="adv-table">
	                            <table  class="display table table-bordered table-striped" id="dataproject">
	                              <thead>
	                              <tr>
	                                  <th>Project</th>
                                      <th>Action</th> 
	                              </tr>
	                              </thead>
	                              <tbody>
	                            <?php
	                            if(isset($projecthome)){
	                            	foreach ($projecthome as $project) {
	                            ?>
		                              <tr class="">
		                                  <td><?php echo $project->title;?></td>
		                                  <td><a href="/administrator/projectphotohomeview/<?php echo $project->id_project; ?>" class="btn btn-danger">Pilih Photo</a>                                          </td>
		                              </tr>
	                            <?php	                            	
	                            	}
	                            }else{
	                            	// echo nothing
	                            	echo '';
	                            }
	                            ?>
	                              	</tbody>
	                              <tfoot>
	                              <tr>
	                                  <th>Project</th>
                                      <th>Action</th> 
	                              </tr>
	                              </tfoot>
	                  			</table>
	                        </div>
	                  </div>
	              </section>
	          </div>
	      </div>
	      <!-- page end-->
	  </section>
	</section>
	<!--main content end-->

    <!--script src="/assets/admin/js/jquery.js"></script-->

<?php
    $this->load->view('admin/templates/footer_admin');
?>