		<!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright © <b>BUILD</b> 2022. All rights reserved.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

        <!-- users popup -->
        <div class="modal" id="users" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
              
                    <div class="modal-body" id="data_table">
                        <h4 class="heading"></h4>
                        <p> </p>
                        <div class="button-row">
                            <div class="button-row text-success"></div>
                            <!-- <div class="button-row text-success" id="error-msg_email_success" ></div> -->
                           <!-- <a href="javascript:void(0)" id="confirm-email"   class="btn btn-default"></a> -->
                        </div>
                        <!-- <div class="note">
                            <p>Note: If you did not receive a link, <a href="javascript:void(0)">Request new link</a></p>
                        </div> -->
                    </div>
                    <div class="modal-footer">
                <a id="okbtn" class="btn btn-success btnid">Ok</a></div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready( function(){

                $(document).on("click", "#userdatatable tr.selected", function() {
                    var text = $(this).find("td:nth-child(2)").text();
                    var id = $(this).find("td:nth-child(1)").text();
                    console.log(text);

                    $("#selected_seller option:selected").text(text);
                    $("#selected_seller option:selected").val(id);
                });

                $(document).on("click", "#usertableid tr.selected", function() {
                    var text = $(this).find("td:nth-child(2)").text();
                    var user_id = $(this).find("td:nth-child(1)").text();
                    // console.log(text);

                    $("#username").val(text);
                    $("#user_id").val(user_id);
                });

                $(document).on("click", "#buyertable tr.selected", function() {
                    // var text = $(this).find("td:nth-child(2)").text();
                    var user_id = $(this).find("td:nth-child(1)").text();
                    console.log(user_id);
                    $.ajax({   
                        type: "post", //create an ajax request to display.php
                        url: '<?= base_url(); ?>' + "auction/buyer_details",    
                        data:{user_id:user_id},
                        success: function(data) {
                            objdata = $.parseJSON(data);
                            if(objdata.msg == 'success')
                            {
                                $('#B_code').val(objdata.data['user_row'][0]['code']);
                                $('#B_name').val(objdata.data['user_row'][0]['fname']+' '+objdata.data['user_row'][0]['lname']);
                                $('#buyer_id').val(objdata.data['user_row'][0]['id']);
                                $('#buyer_T_balance').val(objdata.data['balance']['amount']);
                                $('#buyer_tblrows').empty();
                                $('#buyer_tblrows').append(objdata.tr);

                            }else{
                                // $('.make_case').hide();
                                console.log('Database error occured.');
                            }
                        }
                    });
                });
            });

            $("#okbtn").on('click', function(){
                $("#users").modal("hide");
            });

            
        </script>