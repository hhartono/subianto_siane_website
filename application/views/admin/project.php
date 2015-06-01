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
	                            		//$prostory = htmlentities();
	                            		//echo htmlentities($lap->project_story);
	                            ?>		
		                              <tr class="">
		                                  <td><?php echo $no;?></td>
		                                  <td><a data-toggle="modal" data-target="#viewModal" data-title="<?php echo $lap->title;?>" data-category="<?php echo $lap->category_name;?>" data-description="<?php echo $lap->description;?>" data-projectstory="<?php echo htmlentities($lap->project_story);?>" ><?php echo $lap->title;?></a> </td>
		                                  <td><?php echo $lap->category_name;?></td>
		                                  <td><?php echo $lap->description;?></td>
		                                  <td><?php echo html_entity_decode($lap->project_story);?></td>
		                                  <td>
		                                  	<a href="/administrator/projectphotohomeview/<?php echo $lap->id; ?>" class="btn btn-danger">Feature Home</a>
		                                  	<a href="/administrator/projectupdate/<?php echo $lap->id; ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
		                                  	<button class="btn btn-warning" data-toggle="modal" data-target="#deleteModal" data-title="<?php echo $lap->title;?>" data-id="<?php echo $lap->id;?>">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
		                                  </td>
		                              </tr>
	                            <?php
	                            		$no++;	
	                            	}
	                            }else{
	                            	// echo nothing
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
					<!-- MODAL FOR VIEW -->
					<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="viewModalLabel">View Project...</h4>
                                </div>
                                <div class="modal-body">
                                    <table>
                                    	<tr class="tr-title">
                                    		<td>Title</td>
                                    		<td class="td-title"></td>
                                    	</tr>
                                    	<tr class="tr-category">
                                    		<td>Category</td>
                                    		<td class="td-category"></td>
                                    	</tr>
                                    	<tr class="tr-description">
                                    		<td>Description</td>
                                    		<td class="td-description"></td>
                                    	</tr>
                                    	<tr class="tr-projectstory">
                                    		<td>Project Story</td>
                                    		<td class="td-projectstory"></td>
                                    	</tr>
                                    </table>
                                    <div class="prostory"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a id="deletelink" href="" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- END MODAL FOR VIEW -->
	              	<!-- MODAL FOR DELETE -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="deleteModalLabel">Delete...</h4>
                                </div>
                                <div class="modal-body">
                                    <h2 id="h2alert"></h2>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a id="deletelink" href="" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- END MODAL FOR DELETE -->
	          </div>
	      </div>
	      <!-- page end-->
	  </section>
	</section>
	<!--main content end-->

    <script src="/assets/admin/js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        	/*
        	 * modal for view project
        	 */
        	$('#viewModal').on('show.bs.modal', function(event){
        		var button = $(event.relatedTarget);
        		var title = button.data('title');
        		var category = button.data('category');
        		var description = button.data('description');
        		var projectstory = button.data('projectstory');
        		var decode = $('</div>').html(projectstory).text();
        		var modal = $(this);
        		modal.find('.modal-title').text(title);
        		modal.find('.modal-body table tbody tr td.td-title').text(title);
        		modal.find('.modal-body table tbody tr td.td-category').text(category);
        		modal.find('.modal-body table tbody tr td.td-description').text(description);
        		modal.find('.modal-body table tbody tr td.td-projectstory').text(projectstory);
        		
        	});
	       	/*
	         * modal for delete project
	         */
	        $('#deleteModal').on('show.bs.modal', function (event) {
	            var button = $(event.relatedTarget)// Button that triggered the modal
	            var title = button.data('title')
	            var id = button.data('id')
	            var modal = $(this)
	            modal.find('.modal-title').text(title)
	            modal.find('.modal-body h2#h2alert').text('Hapus Project ' +title+'?')
	            modal.find('.modal-footer a#deletelink').attr("href", 'projectdelete/'+id)
	        });
        })
    </script>

<?php
    $this->load->view('admin/templates/footer_admin');
?>