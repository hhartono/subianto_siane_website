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
                        Project Add
                    </header>
                    <div class="panel-body">
	                  	<div class="stepy-tab">
	                        <ul id="default-titles" class="stepy-titles clearfix">
	                            <li id="default-title-0" class="current-step">
	                                <div>Add Project</div>
	                            </li>
	                            <li id="default-title-1" class="">
	                                <div>Upload</div>
	                            </li>
	                            <li id="default-title-2" class="">
	                                <div>Finish</div>
	                            </li>
	                        </ul>
	                    </div>
                        <form class="form-horizontal " id="projectadd-form">
	                        <fieldset title="Step: add project" class="step" id="default-step-0">
	                            <legend> </legend>
	                            <div class="form-group">
	                                <label for="title" class="col-lg-2 control-label">Title</label>
	                                <div class="col-lg-10">
	                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label for="description" class="col-lg-2 control-label">Description</label>
	                                <div class="col-lg-10">
	                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description">
	                                </div>
	                            </div>
	                            <div class="form-group">
	                                <label for="category" class="col-lg-2 control-label">Category</label>
	                                <div class="col-lg-10">
	                                    <select name="category" id="category" class="form-control m-bot15">
	                                    	<?php 
	                                    	if(isset($categoryall)){
	                                    		foreach ($categoryall as $row){
	                                    	?>
												<option value="<?php echo $row->id;?>"><?php echo ucwords($row->category_name);?></option>
	                                    	<?php
	                                    		}
	                                    	}else{
	                                    	?>
												<option value="-">----------------</option>
	                                    	<?php
	                                    	}
	                                    	?>
                                        </select>
	                                </div>
	                            </div>
                                <div class="form-group">
	                                <label for="projectstory" class="col-sm-2 control-label col-sm-2">Project Story</label>
	                                <div class="col-sm-10">
                                		<textarea class="form-control ckeditor" name="projectstory" id="projectstory" rows="6"></textarea>
                                	</div>
                                </div>
                                
                                <div class="form-group">
                                	<label for="date" class="control-label col-md-2">Date</label>
                                	<div class="col-md-4 col-xs-12">
                                      	<input  name="date" id="date" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value=""/>
                                      	<span class="help-block">Select date</span>
                                  	</div>
                                </div>
                                <div class="form-group">
                                	<label for="client" class="col-sm-2 control-label col-sm-2">Client</label>
                                	<div class="col-md-4 col-xs-12">
	                                    <input type="text" name="client" id="client" class="form-control" placeholder="Client">
	                                </div>
                                </div>
                                <div class="form-group">
                                	<label for="status" class="col-sm-2 control-label col-sm-2">Status</label>
                                	<div class="col-md-4 col-xs-12">
	                                    <input type="text" name="status" id="status" class="form-control" placeholder="Status">
	                                </div>
                                </div>
                                <div class="form-group">
                                	<label for="location" class="col-sm-2 control-label col-sm-2">Location</label>
                                	<div class="col-md-4 col-xs-12">
	                                    <input type="text" name="location" id="location" class="form-control" placeholder="Location">
	                                </div>
                                </div>
	                        </fieldset>
	                        <input type="submit" class="finish btn btn-danger" value="Add Project"/>
                        </form>
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