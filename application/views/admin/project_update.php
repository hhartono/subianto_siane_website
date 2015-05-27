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
                        Project Update
                    </header>
                    <div class="panel-body">
                    <p><?=$this->session->flashdata('message')?> </p>
	                  	<div class="stepy-tab">
	                        <ul id="default-titles" class="stepy-titles clearfix">
	                            <li id="default-title-0" class="current-step">
	                                <div>Update Project</div>
	                            </li>
	                        </ul>
	                    </div>
                        <form class="form-horizontal " id="projectadd-form" method="POST" action="/administrator/projectupdatesubmit">
                        	
	                        <fieldset title="Step: update project" class="step" id="default-step-0">
	                        	<div id="message_result"></div>
	                            <legend> </legend>
	                            <input type="hidden" name="id" id="id" value="<?php echo $idproject; ?>">
	                            <?php 
	                            	foreach ($loadallproject as $lap) {
	                            ?>
	                            <div class="form-group">
	                                <label for="title" class="col-lg-2 control-label">Title</label>
	                                <div class="col-lg-10">
	                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="<?php echo $lap->title; ?>">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label for="description" class="col-lg-2 control-label">Description</label>
	                                <div class="col-lg-10">
	                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description" value="<?php echo $lap->description; ?>">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label for="category" class="col-lg-2 control-label">Category</label>
	                                <div class="col-lg-10">
	                                    <select name="category" id="category" class="form-control m-bot15">
											
	                                    	<?php 
	                                    	if(isset($categoryall)){
	                                    	?>
												<option value="<?php echo $lap->idcat; ?>"><?php echo $lap->category_name; ?></option>	   
	                                    	<?php
	                                    		foreach ($categoryall as $row){
	                                    	?>
												<option value="<?php echo $row->id;?>"><?php echo ucwords($row->category_name);?></option>
	                                    	<?php
	                                    		}
	                                    	}else{
	                                    	?>
												<option value="">----------------</option>
	                                    	<?php
	                                    	}
	                                    	?>
                                        </select>
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label for="projectstory" class="col-sm-2 control-label col-sm-2">Project Story</label>
	                                <div class="col-sm-10">
                                		<textarea class="form-control ckeditor" name="projectstory" id="projectstory" rows="6"><?php echo $lap->project_story; ?></textarea>
                                	</div>
                                </div>
                                
                                <div class="form-group">
                                	<label for="date" class="control-label col-md-2">Date</label>
                                	<div class="col-md-4 col-xs-12">
                                      	<!-- <input name="date" id="date" class="form-control form-control-inline input-medium dateform-date-picker"  size="16" type="text" placeholder="Date" value=""/>
                                      	<span class="help-block">Select date</span> -->
                                      	<div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?php echo date('Y-m-d');?>"  class="input-append date dpYears">
                                            <input name="date" id="date" type="text" value="<?php echo $lap->project_detail_date; ?>" size="16" class="form-control">
                                            <span class="input-group-btn add-on">
                                            	<button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                        <!-- <span class="help-block">Select date</span> -->
                                  	</div>
                                </div>
                                <div class="form-group">
                                	<label for="client" class="col-sm-2 control-label col-sm-2">Client</label>
                                	<div class="col-md-4 col-xs-12">
	                                    <input type="text" name="client" id="client" class="form-control" placeholder="Client" value="<?php echo $lap->project_detail_client; ?>">
	                                </div>
                                </div>
                                <div class="form-group">
                                	<label for="status" class="col-sm-2 control-label col-sm-2">Status</label>
                                	<div class="col-md-4 col-xs-12">
	                                    <input type="text" name="status" id="status" class="form-control" placeholder="Status" value="<?php echo $lap->project_detail_status; ?>">
	                                </div>
                                </div>
                                <div class="form-group">
                                	<label for="location" class="col-sm-2 control-label col-sm-2">Location</label>
                                	<div class="col-md-4 col-xs-12">
	                                    <input type="text" name="location" id="location" class="form-control" placeholder="Location" value="<?php echo $lap->project_detail_location; ?>">
	                                </div>
                                </div>
                            <?php
                            	} 
                            ?>
	                        </fieldset>
	                        <!-- <button id="submitproject" class="finish btn btn-danger"/>Add Project</button> -->
	                        <input type="submit" id="submitproject" class="finish btn btn-danger" value="Update Project">
                        </form>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->

 <script src="/assets/admin/js/jquery.js"></script>
<script type="text/javascript" src="/assets/admin/assets/ckeditor/ckeditor.js"></script>
<!--<script type="text/javascript">
	$(document).ready(function(){
		submitProject();
	});

	function submitProject(){
		$('#submitproject').click(function(){
			var output = "";
			var proceed = true;
			var id = $('input[name=id]').val();
			var title = $('input[name=title]').val();
			var description = $('input[name=description]').val();
			var category = $('select[name=category]').val();
			//var projectstory = $('textarea#projectstory').val();
			var projectstory = CKEDITOR.instances.projectstory.getData();
			var date = $('input[name=date]').val();
			var client = $('input[name=client]').val();
			var status = $('input[name=status]').val();
			var location = $('input[name=location]').val();

			if(title == ""){
                $('input[name=title]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                proceed = false;
            }
            if(description == ""){
                $('input[name=description]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                proceed = false;
            }
            if(category == ""){
                $('select#category').css('border-color', '#8A6D3B !important').addClass('form-error-focus');
                proceed = false;
            }
            if(date == ""){
                $('input[name=date]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                proceed = false;
            }
            if(status == ""){
                $('input[name=status]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                proceed = false;
            }
            if(location == ""){
                $('input[name=location]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                proceed = false;
            }
            $("input.form-error-focus:first").focus()
            $("input.form-error-focus").removeClass('form-error-focus');
            $("#message_result").hide().html(output).slideDown();
			if(proceed){
				$.ajax({
					type: "POST",
					url: "projecteditsubmit",
					data: {id: id, title: title, description: description, category: category, projectstory:projectstory, date:date, client:client, status:status, location:location},
					dataType: "JSON",
					success: function(response){
						if(response.type == 'error'){
							output = '<div class="alert alert-block alert-danger fade in">' + response.validation_errors + '</div>';
							if(response.formerror.title != ""){
                                $('input[name=title]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                            }
                            if(response.formerror.description != ""){
                                $('input[name=description]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                            }
                            if(response.formerror.date != ""){
                                $('input[name=date]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                            }
                            if(response.formerror.client != ""){
                                $('input[name=client]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                            }
                            if(response.formerror.location != ""){
                                $('input[name=location]').css('border-color', '#8A6D3B').addClass('form-error-focus');
                            }
                            $("input.form-error-focus:first").focus();
                            $("input.form-error-focus").removeClass('form-error-focus');
						}else{
							output = '<div class="alert alert-block alert-success fade in">'+ response.text +'</div>';
							$('#id').val('');
							$('#title').val('');
							$('#description').val('');
							$('#category').val('');
							$('#projectstory').val('');
							$('#date').val('');
							$('#client').val('');
							$('#status').val('');
							$('#location').val('');
							$('#title').focus();
							//$('html, body').animate({ scrollTop: $('#message_result').offset().top }, 'slow');
						}					
						$("#message_result").hide().html(output).slideDown();
					}
				});
			}
			return false;
		})
		/*$("input#title, input#description, input#projectstory, input#date, input#client, input#status, input#location").keyup(function(){
            $("input#title, input#description, select#category, input#projectstory, input#date, input#client, input#status, input#location").css('border-color', '');
            $("#message_result").slideUp();
        });*/
	}

</script> -->

<?php
    $this->load->view('admin/templates/footer_admin');
?>