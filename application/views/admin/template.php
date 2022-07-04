<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url();?>uploads/favicon.ico" rel="shortcut icon" type="image/x-icon" />


    <title><?php echo $page_title;?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets_admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets_admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
   
    <link href="<?php echo base_url();?>assets_admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets_admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets_admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets_admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>assets_admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
     <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets_user/tools/PhoneMask/css/intlTelInput.min.css"> -->
    <link href="<?php echo base_url();?>assets_admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_admin/vendors/datatables.net-select/css/select.dataTables.min.css" rel="stylesheet">
    
    
    <!-- Dropzone.js -->
    <link href="<?php echo base_url();?>assets_admin/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    
    
    <link href="<?php echo base_url();?>assets_admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<!--	<link rel="stylesheet" type="text/css" href="<?php // echo base_url(); ?>assets_admin/vendors/bootstrap-daterangepicker/daterangepicker.css"/>-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_admin/vendors/select2/dist/css/select2.css"/>
    <!-- Custom Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_admin/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_admin/css/oz_style_custome.css" />
    <link href="<?php echo base_url();?>assets_admin/sweetalert/dist/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_admin/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"> -->


 <!-- jQuery -->
    <script src="<?php echo base_url();?>assets_admin/vendors/jquery/dist/jquery.min.js"></script>
    
    <!-- <script src="<?php echo base_url();?>assets_user/tools/PhoneMask/js/jquery-latest.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>assets_user/tools/PhoneMask/js/intlTelInput-jquery.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>assets_user/tools/PhoneMask/js/utils.js"></script> -->
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets_admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
     <!-- FastClick -->
    <script src="<?php echo base_url();?>assets_admin/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
    <script src="<?php echo base_url();?>assets_admin/vendors/nprogress/nprogress.js"></script>

    <script src="<?php echo base_url();?>assets_admin/vendors/Chart.js/dist/Chart.min.js"></script>
    
    <!-- iCheck -->
	<!-- NProgress -->

    

	
    <script src="<?php echo base_url();?>assets_admin/vendors/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets_admin/vendors/select2/dist/js/select2.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/datatables.net-select/js/dataTables.select.min.js"></script>
       <script type="text/javascript" src="<?php echo base_url();?>assets_admin/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/deletesweetalert.js"></script>
    
    <!-- Dropzone.js -->
    <script src="<?php echo base_url();?>assets_admin/vendors/dropzone/dist/dropzone.js"></script>
	 <script src="<?php echo base_url();?>assets_admin/vendors/moment/min/moment.min.js"></script>

    
    <script src="<?php echo base_url();?>assets_admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- DateTimePicker.js -->
    <script src="<?php echo base_url();?>assets_admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <!-- validator -->
    <script src="<?php echo base_url();?>assets_admin/vendors/validator/validator.js"></script>
    <script src="<?php echo base_url();?>assets_admin/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    

    <script src="<?php echo base_url();?>assets_admin/js/parsley.js"></script>
    
    <script src="<?php echo base_url();?>assets_admin/js/ozCustom.js"></script>

    <script src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets_admin/tinymce_4.7.3/tinymce.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url();?>assets_admin/tinymce_4.7.3/langs/ar.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url();?>assets_admin/tinymce_4.7.3/langs/en_GB.js"></script>
   

    <style type="text/css">
      .custom-btn{
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        float: left;
      }
      .logo_img{
        width: 55%;
        margin-left: 13px;
        margin-top: 15px;
      }
    
      .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
          z-index: 0;
          color: #fff;
          cursor: default;
          background-color: #337ab7;
          border-color: #337ab7;
      }

      /* The Close Button */
      .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }
      .dataTables_processing {
        height: 50px;
      }

    </style>
     
  </head>
  

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="margin-top: 10px; margin-bottom: 20px !important;">
              <h4 style="color:white; text-align:center; font-family:'Times New Roman', Times, serif"><b>Sukut Real Properties</b></h4>
              <!-- <img class="logo_img" src="/assets/Sukut_Real_Pro_LOGO.jpg"> -->
            </div>
           
            <div style="width: 100% !important; float: none !important; ">
            <?php 
            $user_session = $this->session->userdata('logged_in');
            // print_r($user_session);
            // die;
            $logged_in = $this->db->get_where('users', ['id' => $this->loginUser['id']])->row_array();
            if(isset($logged_in['picture']) && $logged_in['picture'] != '')
            {
                ?> 

                     <div id="temp" class="profile clearfix">
                      <div class="profile_pic" style="width: 40%;">
                        <img style="max-width: 70px; height: 65px;" src="<?php echo base_url('uploads/profile_picture/').$logged_in['id'].'/'.$logged_in['picture'];?>" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span style="float: left; line-height: 65px">Welcome</span>
                        <h2 style="margin: 25px 7px 7px 6px; float: left;"><?php echo (isset($logged_in['fname']) && !empty($logged_in['fname'])) ? ucfirst($logged_in['fname']) : '';?></h2>
                      </div>
                    </div>

            <?php }else{ ?>
               

                 <!-- <div class="profile clearfix">
                      <div class="profile_pic" style="width: 40%;">
                        <img style="max-width: 70px; height: 65px;" src="<?php echo $user_session->profile_img ; ?>" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span style="float: left; line-height: 65px">Welcome,</span>
                        <h2 style="margin: 25px 7px 7px 6px; float: left;"><?php echo (isset($logged_in['first_name']) && !empty($logged_in['first_name'])) ? ucfirst($logged_in['first_name']) : '';?></h2>
                      </div>
                    </div> -->

                    <div id="temp" class="profile clearfix" style="padding-left: 14px;display: flex;align-items: center;">
                      <div class="" style="height: 56.34px;width: 56.34px;border-radius: 50%;overflow: hidden;position: relative;">
                        <img style="background: #fff;padding: 4px;border-radius: 50%; position: absolute;left: 0;top: 0;max-width: 100%;max-height: 100%;" src="/assets/build-default-profile.jpg" alt="..." class="">
                      </div>
                      <div class="profile_info" style="margin-left: 20px;">
                        <span style="">Welcome</span>
                        <h2 style=""><?php echo (isset($logged_in['first_name']) && !empty($logged_in['first_name'])) ? ucfirst($logged_in['first_name']) : '';?></h2>
                      </div>
                    </div>
                    
 <?php }?>                
              </div>
            <div class="clearfix"></div>
            <br />

			<?php $this->load->view('admin/template_sidebar');?>
            
            
          </div>
        </div>

		<?php $this->load->view('admin/template_topnavigation');?>
        <div class="right_col" role="main">
          <div class="">
            <?php echo $main_content; ?>
          </div>

        </div>

          

		<?php $this->load->view('admin/template_footer');?>
      </div>
    </div>


<script  src="<?php echo base_url();?>assets_admin/js/custom.js"></script>

<script>
$(document).ready(function() {
var oTable = $('#datatable-responsive').dataTable();
   
  // Re-draw the table - you wouldn't want to do it here, but it's an example :-)
  oTable.fnDraw();
});
  window.setTimeout(function() 
  {
    $(".alert").fadeTo(500, 0).slideUp(500, function()
    {
        $(this).remove(); 
    });
  }, 3000);
</script>

  </body>
</html>


