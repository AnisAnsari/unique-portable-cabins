<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admission</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
	
	
    <div class="content">
      <div class="container-fluid">
       
		<div class="row">
          
		  <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admission List</h3>
				<button style="float:right;" class="btn btn-info" id="add_modal_btn"><i class="fas fa-plus"></i> Add Admission</button>
				
				<h5 id="delete_msg" style="text-align:center;"></h5>
				
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No</th>
                   
					<th>Title</th>
                    <th>Discription</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="show_data">
                  <?php 
				  if(!empty($admission)){ 
				  $i = 1;
				  foreach($admission as $ser){
					  
				  ?>
                  <tr>
                    <td><?php echo $i;?></td>
					
                    <td><?php echo $ser->name;?></td>
                    <td><?php echo $ser->description;?></td>
                    <td> 
						
						<a class="btn btn-info btn-sm edit_admission" data-src="<?php echo $ser->id;?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                        </a>
						
						<a class="btn btn-danger btn-sm delete_admission" data-src="<?php echo $ser->id;?>" onclick="return confirm('Do You Want To Delete')">
                              <i class="fas fa-trash-alt">
                              </i>
                              Delete
                        </a>
						
					</td>
                  </tr>
				  <?php $i++;}} ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
	   
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
	
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
 
	<!-- Add admission Modal Start -->
	<div class="modal fade" id="add_admission_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-body">
					<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Add Admission</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="add_admission_form" name="add_admission_form" enctype="multipart/form-data">
			  
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Title">
                  </div>
                  
				  <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control"  rows="2" id="description" name="description" placeholder="description"></textarea>
						 </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button"  id="add_btn" class="btn btn-primary">Submit</button>
				  <span id="add_admission_msg"></span>
                </div>
              </form>
            </div>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Add admission Modal End -->
	  
	  <!-- Edit admission Modal Start -->
	  <div class="modal fade" id="edit_admission_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-body">
					<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Admission</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="edit_admission_form" name="edit_admission_form" enctype="multipart/form-data">
			  
                <div class="card-body">
                  <div class="form-group">
                    <label for="edit_title">Title</label>
                    <input type="text" class="form-control" id="edit_name" name="name" placeholder="Title">
                  </div>
                  <input type="hidden" name="hidden_id" id="hidden_id" value="">
				  <div class="form-group">
                        <label for="edit_description">Description</label>
                        <textarea class="form-control" rows="2" id="edit_description" name="description" placeholder="Description"></textarea>
                      </div>
				  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="edit_btn" class="btn btn-primary">Edit</button>
				  <span id="edit_admission_msg"></span>
                </div>
              </form>
            </div>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Edit Banner Modal End -->
 
 
 <!-- DataTables  & Plugins -->
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>assets/js/responsive.bootstrap4.min.js"></script>
 
<!-- Bootstrap Switch -->
<script src="<?php echo base_url();?>assets/js/bootstrap-switch.min.js"></script>
 
<!-- bs-custom-file-input -->
<script src="<?php echo base_url();?>assets/js/bs-custom-file-input.min.js"></script> 
 
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/js/summernote-bs4.min.js"></script>  
 
 <script>
 
  // A $( document ).ready() block.
$( document ).ready(function() {
	
	// Summernote
    $('#description').summernote({
	height: 150,   //set editable area's height
	  codemirror: { // codemirror options
		theme: 'monokai'
	  }
  });
  
  $('#edit_description').summernote({
	height: 150,   //set editable area's height
	  codemirror: { // codemirror options
		theme: 'monokai'
	  }
  });
	
	
	var table = $("#example1").DataTable();
	// For custom input file 
	bsCustomFileInput.init();
	$("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
	
// Show Popup modal
$("#add_modal_btn").click(function(){
	$("#add_admission_modal").modal("show");
	$("#name").val("");
	$("#description").val("");
	$("#image").val("");
	$("#image_label").html("Please choose image");
});

// Adding admission

$("#add_btn").click(function(){
    $("#add_btn").hide();
	var name,description;
	name = $("#name").val();
	description = $("#description").val();
	
	
	if(name.length <= 0){
		$("#add_admission_msg").html("<sapn style='color:red;font-weight:bold'>Please enter title</span>");
		$("#name").focus();
		setTimeout(function(){ $("#add_admission_msg").html("<sapn style='color:white;'>Add admission</span>"); }, 3500);
	}else if(description.length <= 0){
		$("#add_admission_msg").html("<sapn style='color:red;font-weight:bold'>Please enter description</span>");
		$("#description").focus();
		setTimeout(function(){ $("#add_admission_msg").html("<sapn style='color:white;'>Add admission</span>"); }, 3500);
	}else{
		var fd = new FormData();
		
		$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>admission/add_admission',
			data: new FormData($('#add_admission_form')[0]),
			contentType: false,
            processData: false,
			success: function(result){
			
			
			
			if(result == 1){
				$("#add_admission_msg").html("<sapn style='color:green;font-weight:bold'>admission added successfully...</span>");
				$("#name").val("");
				$("#description").val("");
				$("#image").val("");
				$("#image_label").html("Please choose image");
				setTimeout(function(){ location.reload(); }, 3500);
			}else{
				$("#add_admission_msg").html("<sapn style='color:red;font-weight:bold'>Something went wrong, Please try again...</span>");
				setTimeout(function(){ $("#add_admission_msg").html("<sapn style='color:white;'>Add admission</span>"); }, 3500);
			}   
		  }
		 });
	}
});

// Call edit admission modal

$("#show_data").on('click','.edit_admission',function(){
	
	var id = $(this).attr("data-src");
	$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>admission/get_admission_data',
			data: {id:id},
			dataType: "json",
			success: function(result){
				$("#edit_name").val(result[0].name);	
				$("#edit_description").val(result[0].description);
				$(".note-editable").html(result[0].description);
				$("#hidden_id").val(result[0].id);
				$("#edit_admission_modal").modal("show");	
			}
		 });
	
});

// Editing admission

$("#edit_btn").click(function(){
	var name,description,image;
	name = $("#edit_name").val();
	description = $("#edit_description").val();
	
	
	if(name.length <= 0){
		$("#edit_admission_msg").html("<sapn style='color:red;font-weight:bold'>Please enter title</span>");
		$("#edit_name").focus();
		setTimeout(function(){ $("#edit_admission_msg").html("<sapn style='color:white;'>Edit admission</span>"); }, 3500);
	}else if(description.length <= 0){
		$("#edit_admission_msg").html("<sapn style='color:red;font-weight:bold'>Please enter description</span>");
		$("#edit_description").focus();
		setTimeout(function(){ $("#edit_admission_msg").html("<sapn style='color:white;'>Edit admission</span>"); }, 3500);
	}else{
		var fd = new FormData();
		
		$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>admission/edit_admission',
			data: new FormData($('#edit_admission_form')[0]),
			contentType: false,
            processData: false,
			success: function(result){
			if(result == 1){
				$("#edit_admission_msg").html("<sapn style='color:green;font-weight:bold'>admission updated successfully...</span>");
				$("#edit_name").val("");
				$("#edit_description").val("");
				$("#edit_image").val("");
				$("#edit_image_label").html("Please choose image");
				$("#edit_btn").hide();
				setTimeout(function(){ location.reload(); }, 3500);
			}else{
				$("#edit_admission_msg").html("<sapn style='color:red;font-weight:bold'>Something went wrong, Please try again...</span>");
				setTimeout(function(){ $("#edit_admission_msg").html("<sapn style='color:white;'>Edit admission</span>"); }, 3500);
			}
		  }
		 });
	}
	
});


$("#show_data").on('click','.delete_admission',function(){	
	var id = $(this).attr("data-src");
	
	
	$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>admission/delete_admission',
			data: {id:id},
			success: function(result){
				
				//alert(result);
				
				if(result == 1){
				$("#delete_msg").html("<sapn style='color:green;font-weight:bold'>admission Delete successfully...</span>");
				setTimeout(function(){ location.reload(); }, 3000);
				}else{
				$("#delete_msg").html("<sapn style='color:red;font-weight:bold'>Something went wrong, Please try again...</span>");
				setTimeout(function(){ location.reload(); }, 3000);
				}  
			}
			
		 });
		 
		 
	
});

	
});

function chk_ext(file_id){
	if(file_id == "image"){
		var admission_msg = "add_admission_msg";	
	}else{
		var admission_msg = "edit_admission_msg";
	}
	var input = document.getElementById(file_id);
	
	var validExtensions = ['jpg','png','jpeg'];
	var fileName = input.files[0].name.split(".").pop().toLowerCase();
	var size_bytes = input.files[0].size;
	var size_kb = parseFloat(size_bytes / 1024).toFixed(2);
	var size_mb = parseFloat(size_kb / 1024).toFixed(2);
	
	if($.inArray(fileName, validExtensions) == -1) {
		$("#"+admission_msg).html("<sapn style='color:red;font-weight:bold'>Only these file types are accepted : "+validExtensions.join(', ')+"</span>");
		$("#"+file_id).focus();
		setTimeout(function(){ $("#"+admission_msg).html("<sapn style='color:white;'>Add banner</span>"); }, 3500);
		$("#image_label").html("Please choose image");
		$("#"+file_id).val("");
	}else if(size_mb > 2){
		$("#"+admission_msg).html("<sapn style='color:red;font-weight:bold'>File size should less than 2 MB. Your file size is "+size_mb+"</span>");
		$("#"+file_id).val("");
		setTimeout(function(){ $("#"+admission_msg).html("<sapn style='color:white;'>Add banner</span>"); }, 3500);
		$("#"+file_id).focus();
	}
}
</script> 
