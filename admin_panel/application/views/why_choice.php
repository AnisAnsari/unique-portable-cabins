<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
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
                <h3 class="card-name">Why Choice</h3>
                <?php if(empty($event)){  ?>
				<button id="add_modal_btn" style="float:right;" class="btn btn-info"><i class="fas fa-plus"></i> Add Why choice</button>
				<?php } ?>
				<h5 id="delete_msg" style="text-align:center;"></h5>
				
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr.No</th>
					<th>Image</th>
                    <th>Name</th>
                   
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				  if(!empty($event)){ 
				  $i = 1;
				  foreach($event as $catg){
					  
				  ?>
                  <tr>
                    <td><?php echo $i;?></td>
					<td><img src="<?php echo base_url();?>/assets/images/why_choice/<?php echo $catg->image;?>" width="100" height="100" alt="<?php echo $catg->name;?>"></td>
                    <td><?php echo $catg->name;?></td>
                    <td><?php echo $catg->description;?></td>
                    <td> 
						
						
						<a class="btn btn-info btn-sm edit_event" data-src="<?php echo $catg->id;?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                        </a>
						<a class="btn btn-danger btn-sm delete_event" data-src="<?php echo $catg->id;?>" onclick="return confirm('Do You Want To Delete')">
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
 
	<!-- Add event Modal Start -->
	<div class="modal fade" id="add_event_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-body">
					<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title" id="add_event_msg">Add Why choice</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="add_event_form" name="add_event_form" enctype="multipart/form-data">
			  
                <div class="card-body">
				
				<div class="row">
					<div class="col-6">
					  <div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="name">
					  </div>
					</div>
					
					<div class="col-6">
						<div class="form-group">
						<label for="image">Image</label>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" class="custom-file-input" name="image" id="image" onchange='chk_ext("image")' accept="image/*">
							<label class="custom-file-label" id="image_label" for="image">Select Image</label>
						  </div>
						</div>
						</div>
				  </div>
                 </div>

				
				<div class="row">
					<div class="col-12">	
						<div class="form-group">
                        <label for="description">Description</label>
						<textarea class="form-control" rows="2" id="description" name="description" placeholder="Description"></textarea>
						</div>
					</div>
				</div>
				  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="add_btn" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Add event Modal End -->
	  
	  <!-- Edit event Modal Start -->
	  <div class="modal fade" id="edit_event_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            
            <div class="modal-body">
					<div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title" id="edit_event_msg">Edit Why choice</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="edit_event_form" name="edit_event_form" enctype="multipart/form-data">
			  
                <div class="card-body">
				<div class="row">
					<div class="col-sm-5">
					  <div class="form-group">
						<label for="edit_name">Name</label>
						<input type="hidden" name="hidden_id" id="hidden_id" value="">
						<input type="text" class="form-control" id="edit_name" name="name" placeholder="name">
					  </div>
					</div> 
					
					<div class="col-sm-5">
						<div class="form-group">
							<label for="edit_image">Image</label>
							<div class="input-group">
							  <div class="custom-file">
								<input type="file" class="custom-file-input" name="image" id="edit_image" onchange='chk_ext("edit_image")' accept="image/*">
								<label class="custom-file-label" id="edit_image_label">Select Image</label>
							  </div>
							</div>
						 </div>
					</div>
					
					<div class="col-sm-2">
						
						  <img id="display_img" src="" width="100" height="100" class="elevation-2" alt="">
						
					</div>
					
					
					
				</div>

				
				<div class="row">
					<div class="col-12">
						<div class="form-group">
                        <label for="edit_description">Description</label>
                        <textarea class="form-control" rows="2" id="edit_description" name="description"></textarea>
						</div>
					</div>
				</div>
				  
				  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="edit_btn" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- Edit event Modal End -->
 
 
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
	var table = $("#example1").DataTable();
	// For custom input file 
	bsCustomFileInput.init();
	
	// Summernote
    $('#description').summernote({
	height: 150,   //set editable area's height
	  codemirror: { // codemirror options
		theme: 'monokai'
	  }
  });
  
  // Summernote
    $('#edit_description').summernote({
	height: 150,   //set editable area's height
	  codemirror: { // codemirror options
		theme: 'monokai'
	  }
  });

	  
// Show Popup modal
$("#add_modal_btn").click(function(){
	$("#add_event_modal").modal("show");
	$("#name").val("");
	$("#date_time").val("");
	$(".note-editable").html("");
	$("#image").val("");
	$("#image_label").html("Please choose image");
	$("option:selected").prop("selected", false);
}); 
	
// Adding event

$("#add_btn").click(function(){
	var name,description,image;
	name = $("#name").val();
	description = $("#description").val();
	image = $("#image").val();
	
	
	if(name.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter name</span>");
		$("#name").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Why choice</span>"); }, 3500);
	}else if(image.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please select choice thumbnail image</span>");
		$("#image").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Why choice</span>"); }, 3500);
	}else if(description.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter description</span>");
		$("#description").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Why choice</span>"); }, 3500);
	}else{
		var fd = new FormData();
		
		$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>why_choice/add_choice',
			data: new FormData($('#add_event_form')[0]),
			contentType: false,
            processData: false,
			success: function(result){
				$("#add_btn").hide();
			if(result == 1){
				$("#add_event_msg").html("<sapn style='color:white;font-weight:bold'>Choice added successfully...</span>");
				$("#name").val("");
				$("#description").val("");
				$("#image").val("");
				$("#image_label").html("Please choose image");
				setTimeout(function(){ location.reload(); }, 3500);
			}else{
				$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Something went wrong, Please try again...</span>");
				setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Why choice</span>"); }, 3500);
			}
		  }
		 });
	}
});

// Call edit event modal
$(".edit_event").click(function(){
	var id = $(this).attr("data-src");
	
	$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>why_choice/get_choice_data',
			data: {id:id},
			dataType: "json",
			success: function(result){
				
				$("#edit_name").val(result[0].name);	
				
				$(".note-editable").html(result[0].description);
				$("#edit_description").html(result[0].description);
				$("#hidden_id").val(result[0].id);
				$("#display_img").attr("src",'<?php echo base_url();?>/assets/images/why_choice/'+result[0].image);
				$("#edit_event_modal").modal("show");	
			}
		 });
	
});


// Adding event

$("#edit_btn").click(function(){
	var name,description,image;
	name = $("#edit_name").val();
	
	description = $("#edit_description").val();
	
	
	if(name.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter name</span>");
		$("#edit_name").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Why choice</span>"); }, 3500);
	}else if(description.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter description</span>");
		$("#edit_description").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Why choice</span>"); }, 3500);
	}else{
		var fd = new FormData();
		
		$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>why_choice/edit_choice',
			data: new FormData($('#edit_event_form')[0]),
			contentType: false,
            processData: false,
			success: function(result){
				console.log(result);
			if(result == 1){
				$("#edit_event_msg").html("<sapn style='color:white;font-weight:bold'>Choice updated successfully...</span>");
				$("#edit_name").val("");
				$("#edit_date_time").val("");
				$("#edit_description").val("");
				$("#edit_image").val("");
				$("#edit_image_label").html("Please choose image");
				$("#edit_btn").hide();
				setTimeout(function(){ location.reload(); }, 3500);
			}else{
				$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Something went wrong, Please try again...</span>");
				setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Why choice</span>"); }, 3500);
			}
		  }
		 });
	}
	
});


// Team event

$(".delete_event").click(function(){
	
	var id = $(this).attr("data-src");
	
	$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>why_choice/delete_choice',
			data: {id:id},
			success: function(result){
				
				if(result == 1){
				$("#delete_msg").html("<sapn style='color:green;font-weight:bold'>Choice Delete successfully...</span>");
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
		var event_msg = "add_event_msg";	
	}else{
		var event_msg = "edit_event_msg";
	}
	var input = document.getElementById(file_id);
	
	var validExtensions = ['jpg','png','jpeg'];
	var fileName = input.files[0].name.split(".").pop().toLowerCase();
	var size_bytes = input.files[0].size;
	var size_kb = parseFloat(size_bytes / 1024).toFixed(2);
	var size_mb = parseFloat(size_kb / 1024).toFixed(2);
	
	if($.inArray(fileName, validExtensions) == -1) {
		$("#"+event_msg).html("<sapn style='color:red;font-weight:bold'>Only these file types are accepted : "+validExtensions.join(', ')+"</span>");
		$("#"+file_id).focus();
		setTimeout(function(){ $("#"+event_msg).html("<sapn style='color:white;'>Add Why choice</span>"); }, 3500);
		$("#image_label").html("Please choose image");
		$("#"+file_id).val("");
	}else if(size_mb > 2){
		$("#"+event_msg).html("<sapn style='color:red;font-weight:bold'>File size should less than 2 MB. Your file size is "+size_mb+"</span>");
		$("#"+file_id).val("");
		setTimeout(function(){ $("#"+event_msg).html("<sapn style='color:white;'>Add Why choice</span>"); }, 3500);
		$("#"+file_id).focus();
	}
}

</script> 
