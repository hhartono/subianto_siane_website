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
	                                  <th>Rendering engine</th>
	                                  <th>Browser</th>
	                                  <th>Platform(s)</th>
	                                  <th class="hidden-phone">Engine version</th>
	                                  <th class="hidden-phone">CSS grade</th>
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
	                                  <th>Rendering engine</th>
	                                  <th>Browser</th>
	                                  <th>Platform(s)</th>
	                                  <th>Engine version</th>
	                                  <th>CSS grade</th>
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