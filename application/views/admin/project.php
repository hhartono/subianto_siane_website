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
	                        <div class="adv-table">
	                            <table  class="display table table-bordered table-striped" id="dataproject">
	                              <thead>
	                              <tr>
	                                  <th>No</th>
                                      <th>Title</th>
                                      <th>Category</th>
                                      <th>Description</th>
                                      <th>Project Story</th>
                                      <th>Action</th> 
	                              </tr>
	                              </thead>
	                              <tbody>
	                            <?php
	                            if(isset($loadallproject)){
	                            	$no=1;
	                            	foreach ($loadallproject as $lap) {
	                            ?>
		                              <tr class="">
		                                  <td><?php echo $no;?></td>
		                                  <td><?php echo $lap->title;?> </td>
		                                  <td><?php echo $lap->category_name;?></td>
		                                  <td><?php echo $lap->description;?></td>
		                                  <td><?php echo $lap->project_story;?></td>
		                                  <td>                                          </td>
		                              </tr>
	                            <?php
	                            		$no++;	
	                            	}
	                            }else{
	                            	// echo nothingf
	                            	echo '';
	                            }
	                            ?>
	                              	</tbody>
	                              <tfoot>
	                              <tr>
	                                  <th>No</th>
                                      <th>Title</th>
                                      <th>Category</th>
                                      <th>Description</th>
                                      <th>Project Story</th>
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