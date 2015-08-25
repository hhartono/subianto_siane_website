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
                    <header class="panel-heading" style="font-weight:bold;">
                        <a href="/administrator/project" class="btn">Back to Project</a>| Project: <?php echo $loadproject->title;?>
                    </header>                
                    <div class="panel-body">
                    <p><?php $this->session->flashdata('message')?> </p>
                    	<table>
                    		<tr>
                    			<td>Description</td>
                    			<td>&nbsp;&nbsp;</td>
                    			<td><?php echo $loadproject->description;?></td>
                    		</tr>
                    		<tr>
                    			<td>Category</td>
                    			<td>&nbsp;&nbsp;</td>
                    			<td><?php echo $loadproject->category_name;?></td>
                    		</tr>
                    		<tr>
                    			<td>Project Story</td>
                    			<td>&nbsp;&nbsp;</td>
                    			<td><?php echo html_entity_decode($loadproject->project_story);?></td>
                    		</tr>
                    		<tr>
                    			<td>Project Date</td>
                    			<td>&nbsp;&nbsp;</td>
                    			<td><?php echo $loadproject->project_detail_date;?></td>
                    		</tr>
                    		<tr>
                    			<td>Client</td>
                    			<td>&nbsp;&nbsp;</td>
                    			<td><?php echo $loadproject->project_detail_client;?></td>
                    		</tr>
                    		<tr>
                    			<td>Project Status</td>
                    			<td>&nbsp;&nbsp;</td>
                    			<td><?php echo $loadproject->project_detail_status;?></td>
                    		</tr>
                    		<tr>
                    			<td>Project Location</td>
                    			<td>&nbsp;&nbsp;</td>
                    			<td><?php echo $loadproject->project_detail_location;?></td>
                    		</tr>
                    	</table>
                    	<hr style="border-color:#2A3542;">
						
						<?php
							if(isset($loadphotos)){
						?>
						<ul class="grid cs-style-3">
							

						<?php
								foreach ($loadphotos as $lp) {
							?>
								<li>
									<figure>
										<img src="/uploads/project/<?php echo $lp->photo;?>" >
										
										<a style="cursor:pointer;" data-toggle="modal" 
											data-target="#deleteModal" 
											data-foto="<?php echo $lp->photo;?>"
											data-id="<?php echo $lp->id;?>"
											data-idproject="<?php echo $loadproject->id;?>" >
											delete
										</a>
									</figure>
								</li>
									
									
							<?php
								}
							?>
						</ul>
							<?php
							}else{
							?>
								<div class="alert alert-warning">
									No Project Photo(s)
								</div>
						<?php
							}
						?>

                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
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
</section>
<!--main content end-->
 <script src="/assets/admin/js/jquery.js"></script>
 <script type="text/javascript">
    $(document).ready(function(){
		
   		/*
         * modal for delete project
         */
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)// Button that triggered the modal
            var foto = button.data('foto')
            var id = button.data('id')
            var idproject = button.data('idproject')
            var modal = $(this)
            modal.find('.modal-title').text(foto)
            modal.find('.modal-body h2#h2alert').text('Hapus Foto ' +foto+'?')
            modal.find('.modal-footer a#deletelink').attr("href", '/administrator/projectphotodelete/'+id+'/'+idproject)
        });
   	})
</script>
<?php
    $this->load->view('admin/templates/footer_admin');
?>