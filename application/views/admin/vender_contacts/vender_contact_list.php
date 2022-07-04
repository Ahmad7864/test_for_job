<div class="row">
    <h3>All Vender Contacts</h3>
    <!-- <?php if ($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <?php echo $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>
    <?php if ($this->session->flashdata('err')){ ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <?php echo $this->session->flashdata('err'); ?>
        </div>
    <?php } ?> -->
    <hr>
    <table id="invi-requests" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Company Name</th>
            <th scope="col">Service Provided</th>
            <th scope="col">Country Used</th> 
           
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($data as $key => $row){ ?>
            <tr>
              <td><?php echo $key+1; ?></td>
              <td><?php echo $row['company_name']; ?></td>
              <td><?php echo $row['service_provided']; ?></td>
              <td><?php echo $row['country_used']; ?></td>
            
              <td>	
                  <a  href="<?php echo base_url('admin/vender_contacts/edit/'.$row['id']) ; ?>" title="edit" class="fa fa-edit btn btn-primary btn-sm" id="<?php echo $row['id']; ?>" value="edit" data-toggle="modal"  data-target="#exampleModalCenter"></a>
                  <!-- <button type="button" id="<?php echo $row['id']; ?>" value="edit" class="fa fa-edit btn btn-primary btn-sm" data-toggle="modal"  data-target="#exampleModalCenter" title="edit"></button> -->
                
                  <button title="delete" class="myBtn fa fa-trash-o btn btn-danger btn-sm" id="<?php echo $row['id']; ?>" ></button>
                  <button id="<?php echo $row['id']; ?>" value="" title="Contact Detail" class="myBtn fa fa-users btn btn-success btn-sm" ></button>
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add_contact">Add</button>
               </td>
            </tr>
          <?php } ?>
        </tbody>
		</table>
	</div>


  <!-- Modal for edit -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php base_url('admin/category/create') ?> " method="post"  enctype="multipart/form-data">
          <div class="form-group">
            <label for="email">Company Name:</label>
            <input type="text" class="form-control" name="company_name" id="company_name">
          </div>
          <div class="form-group">
            <label for="pwd">Service Provided:</label>
            <input type="text" class="form-control" name="service_provided" id="service_provided">
          </div>
          <div class="form-group">
            <label for="pwd">Country Used:</label>
            <input type="text" class="form-control" name="country_used" id="country_used">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="add_contact" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
  	$('#invi-requests').dataTable({
      'language': 
        {
          'zeroRecords': 'No records found'
        },
      'columnDefs': [
        {
          'orderable': false,
          'targets': [2]
        }
      ]
    });
</script>

<!-- <script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script> -->

<!-- <script type="text/javascript">
    // Get the modal
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    $("#invi-requests").on("click",".myBtn",function(){
        var idval = $(this).attr('id');
        var hbtn = $(this).attr('value');
        var title = $(this).attr('title');
        var urlll = "<?php echo base_url('/admin/admin_opportunity/get_team') ; ?>";
        var fletter = idval.charAt(0);
        if (fletter == 'a' || fletter == 'b') {
            $.ajax({
                type: "post",
                url: urlll,
                data: {
                  ids:hbtn
                },
                dataType: 'json',
                success: function (response) {
                    if (title == 'Team') {
                        $('#tha').text('Team Members');
                    } else {
                        $('#tha').text('Personal Invites');
                    }
                    if (response.status=="success") {
                        var profile_image = '';
                       $.each(response.user_data, function (index,txt) {
                            var profile_image = '';
                            if (txt.profile_img != '') {
                                profile_image = txt.profile_img;
                            } else {
                                profile_image = '/assets/build-default-profile.jpg';
                            }
                            $("#subModal").append('<div class="ufff profile clearfix"><div class="profile_pic" style="width: 90px;"><img style="max-width: 70px; height: 65px;" src="'+profile_image+'" alt="..." class="img-circle profile_img"></div><div class="profile_info"><h2 style="float: left; line-height: 85px; color: black;">'+txt.first_name+' '+txt.last_name+'</h2></div></div>');
                        });
                        modal.style.display = "block";
                        $("body").addClass("modal-open");
                    } else if (response.status=="nothing") {
                        $("#subModal").append('<div class="ufff" style="text-align: center";><hr><p>No records found</p><hr></div>');
                        modal.style.display = "block";
                        $("body").addClass("modal-open");
                    } else {
                        alert("else");
                    }
                }
            });
        }
    })

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        $("body").removeClass("modal-open")
        $('.ufff').remove();
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
        $("body").removeClass("modal-open")
        $('.ufff').remove();
      }
    }
</script> -->
