<?php 
    $this->load->view('admin/templates/header_admin');
    $this->load->view('admin/templates/sidebar_admin');
?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $title_page;?></h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                    <div class="form-panel">
                        <!-- action="/administrator/productaddsubmit"-->
                        <form class="form-horizontal style-form" method="POST" >
                        
                            <div id="message_result"></div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" id="nama" name="nama" class="form-control">
                                </div>
                            </div>
                          	<div class="form-group">
                          		<div class="showback">
								<input id="submitcategory" type="submit" value="Add Category" class="btn btn-primary">
								</div>
                          	</div>

                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->

    <script src="/assets/admin/js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        submitCategory();
        
    });
    function submitCategory(){
        
        $('#submitcategory').click(function(){
            var output = "";
            var nama = $('input[name=nama]').val();
            var proceed = true;
            if(nama == ""){
                $('input[name=nama]').css('border-color', '#e41919').addClass('form-error-focus');
                proceed = false;
                output = '<div class="alert alert-danger">Form harus diisi, tidak boleh kosong!</div>';
            }
            $("input.form-error-focus:first").focus().removeClass('form-error-focus');
            $("#message_result").hide().html(output).slideDown();

            if(proceed){
                $.ajax({
                    type: "POST",
                    url: "categoryaddsubmit",
                    data: {nama: nama},
                    dataType: "json",
                    success: function(response){
                        if(response.type=='error'){
                            //console.log(response.validation_errors);   
                            output = '<div class="alert alert-danger">' + response.validation_errors + '</div>';
                            
                            $("input.form-error-focus:first").focus();
                            $("input.form-error-focus").removeClass('form-error-focus');

                        }else{
                            //console.log(response.text);
                            output = '<div class="alert alert-success">'+ response.text +' Lihat pada <a href="category">Table Category</a></div>';
                            $('#nama').val('');
                            $('#nama').focus();
                        }
                        $("#message_result").hide().html(output).slideDown();
                    }
                });        
            }
            return false;
        });
        $("input#nama").keyup(function(){
            $("input#nama").css('border-color', '');
            $("#message_result").slideUp();
        });
    }
    </script>

<?php
    $this->load->view('admin/templates/footer_admin');
?>