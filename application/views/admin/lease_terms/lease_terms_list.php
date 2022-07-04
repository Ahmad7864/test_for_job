<div class="row">
    <h3>All Lease Terms</h3>
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
            <th scope="col">Tenant</th>
            <th scope="col">Source</th>
            <th scope="col">Status</th> 
            <th scope="col">Start Lease</th>
            <th scope="col">End Lease</th>
            <th scope="col">Month Rent</th>
            <th scope="col">Num Of Mths</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
			<?php foreach($data as $row){ ?>
				<tr>
					<?php static $a=0; ?>
					<?php $a++ ; ?>
					<td><?php echo $a ; ?></td>
					<td><?php echo $row['tenant']; ?></td>
					<td><?php echo $row['source']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['start_lease']; ?></td>
                    <td><?php echo $row['end_lease']; ?></td>
                    <td><?php echo $row['month_rent']; ?></td>
                    <td><?php echo $row['num_of_mths']; ?></td>
					<td>	
                        <a  href="<?php echo base_url('admin/category/edit/'.$row['id']) ; ?>" title="edit" class="fa fa-edit btn btn-primary btn-sm" id="<?php echo $row['id']; ?>" value="edit" ></a>

                        <!-- <a  href="<?php echo base_url('admin/category/delete/'.$row['id']) ; ?>" title="delete" class="myBtn fa fa-trash-o btn btn-danger btn-sm" id="<?php echo $row['id']; ?>" value="delete" ></a> -->
                        <button title="delete" class="myBtn fa fa-trash-o btn btn-danger btn-sm" id="<?php echo $row['id']; ?>" ></button>
                        <button id="<?php echo $row['id']; ?>" value="<?php  ?>" title="Contact Detail" class="myBtn fa fa-users btn btn-success btn-sm" ></button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"  data-target="#exampleModalCenter">
                          Add
                        </button>
                    </td>
				</tr>
			<?php } ?>
        </tbody>
		</table>
	</div>


  <!-- Button trigger modal -->


<!-- Modal -->
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
     kkkkkkkk
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
  	$('#invi-requests').dataTable({
      'language': 
        {
          'zeroRecords': 'No records found'
        },
      'columnDefs': [
        {
          'orderable': false,
          'targets': [6]
        }
      ]
    });
</script>

<script type="text/javascript">
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
</script>