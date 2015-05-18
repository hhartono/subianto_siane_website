<?php 
    $this->load->view('admin/templates/header_admin');
    $this->load->view('admin/templates/sidebar_admin');
?>
      <section id="main-content">
          	<section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> All CAtegory</h3>
		  		
		  	<div class="row mt">
              <div class="col-lg-12">
                  <div class="content-panel">
                        <!-- <h4>
                            <i class="fa fa-angle-right"></i>Products
                        </h4> -->
                        <?php
                        $message = $this->session->flashdata('message');
                        if(isset($message)){
                        ?>
                            <?php echo $message;?>
                        <?php
                        }else{
                            //echo nothing
                            echo '';
                        }
                        ?>
                          <section id="no-more-tables">
                          <?php
                            if(isset($loadAllCategory)){
                          ?>
                              <table id="tablecategory" class="table table-striped cf display">
                                  <thead>
                                    <!-- <th>No.</th> -->
                                    <th>Category Name</th>
                                    <th>Action</th>
                                  </thead>
                                  <tbody>
                          <?php
                                // $no=1;
                                foreach ($loadAllCategory as $lab) {
                          ?>
                                    <tr>
                                        <!-- <td data-title="No"><?php// echo $no;?></td> -->
                                        <td data-title="Kategori"><?php echo $lab->category_name;?></td>
                                        <td data-title="Action">
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#viewModal" data-kategori="<?php echo $lab->category_name;?>">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#editModal"  data-kategori="<?php echo $lab->category_name;?>" data-id="<?php echo $lab->id;?>">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button class="btn btn-warning" data-toggle="modal" data-target="#deleteModal" data-kategori="<?php echo $lab->category_name;?>" data-id="<?php echo $lab->id;?>">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                        </td>
                                    </tr>
                          <?php
                                    // $no++;
                                }
                          ?>
                                  </tbody>
                              </table>
                          <?php
                            }else{
                          ?>
                              <table id="tablecategory" class="table table-striped cf display">
                                    <thead>
                                        <!-- <th>No.</th> -->
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                              </table>
                          <?php
                            }
                          ?>
                          </section>

                     <!-- MODAL FOR EDIT -->
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title" id="editModalLabel">Modal title</h4>
                                </div>

                                <form method="POST" class="form-horizontal style-form">
                                    <div class="modal-body">
                                    <div id="message_result_edit"></div>
                                        <input type="hidden" name="id" id="id" value="">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Category Name</label>
                                              <div class="col-sm-10">
                                                 <input type="text" name="nama" id="nama" class="form-control">
                                              </div>
                                        </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" id="submitupdatecategory" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                    <!-- END MODAL FOR EDIT ->

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

                  </div><!-- /content-panel -->
                </div><!-- /col-lg-12 -->
            </div><!-- /row -->

			</section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
        <!--main content end-->

        <script src="/assets/admin/js/jquery.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          
            $('#tablecategory').DataTable();

        });

        function submitUpdateCategory(){
            $('#submitupdatecategory').click(function(){
                var output = "";
                var id = $('input[name=id]').val();
                var nama = $('input[name=nama]').val();
                var proceed = true;
                if(nama == ""){
                    $('input[name=nama]').css('border-color', '#e41919').addClass('form-error-focus');
                    proceed = false;
                    output = '<div class="alert alert-danger">Form harus diisi, tidak boleh kosong!</div>';
                }
                $("input.form-error-focus:first").focus().removeClass('form-error-focus');
                $("#message_result_edit").hide().html(output).slideDown();
                if(proceed){
                    $.ajax({
                        type: "POST",
                        url: "categoryupdatesubmit",
                        data: {id:id, nama: nama},
                        dataType: "json",
                        success: function(response){
                            if(response.type=='error'){
                                //console.log(response.content_form); 
                                output = '<div class="alert alert-danger">' + response.validation_errors  + '</div>';  
                                $("input.form-error-focus:first").focus();
                                $("input.form-error-focus").removeClass('form-error-focus');
                                
                            }else{
                                //console.log(response.text);
                                output = '<div class="alert alert-success">'+ response.text +'</div>';
                            }
                            $("#message_result_edit").hide().html(output).slideDown();
                        }
                    });        
                }
                return false;
            })
            $("input#nama").keyup(function(){
                $("input#nama").css('border-color', '');
                $("#message_result_edit").slideUp();
            });
        }

        /*
         * modals for edit product
         */
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)// Button that triggered the modal
            var id = button.data('id')
            var nama = button.data('nama')
            var modal = $(this)
            modal.find('.modal-title').text('Edit ' + nama )
            modal.find('.modal-body input#id').val(id)
            modal.find('.modal-body div.form-group div input#nama').val(nama)
            submitUpdateCategory();
        });
        
        $('#editModal').on('hidden.bs.modal',function(){
            location.reload();
        })
      
        /*
         * modal for delete product
         */
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)// Button that triggered the modal
            var kode = button.data('kode')
            var barang = button.data('barang')
            var idbarang = button.data('idbarang')
            var modal = $(this)
            modal.find('.modal-title').text(kode + ' - ' +barang)
            modal.find('.modal-body h2#h2alert').text('Hapus  ' +barang+' ( kode: '+kode+' ) ?')
            modal.find('.modal-footer a#deletelink').attr("href", 'productdelete/'+idbarang)
        });
        </script>

<?php
    $this->load->view('admin/templates/footer_admin');
?>