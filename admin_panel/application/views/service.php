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
                <h3 class="card-name">Service List</h3>
				<button id="add_modal_btn" style="float:right;" class="btn btn-info"><i class="fas fa-plus"></i> Add Service</button>
				
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
					<td><img src="<?php echo base_url();?>/assets/images/service/<?php echo $catg->image;?>" width="100" height="100" alt="<?php echo $catg->name;?>"></td>
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
                <h3 class="card-title" id="add_event_msg">Add Service</h3>
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
				
				<div class="row">
				    <div class="col-4">
					  <div class="form-group">
						<label for="size">Size</label>
						<input type="text" class="form-control" id="size" name="size" placeholder="Size">
					  </div>
					</div>
					
					<div class="col-4">
					  <div class="form-group">
						<label for="shape">Shape</label>
						<input type="text" class="form-control" id="shape" name="shape" placeholder="Shape">
					  </div>
					</div>
					
					<div class="col-4">
					  <div class="form-group">
						<label for="feature">Feature</label>
						<input type="text" class="form-control" id="feature" name="feature" placeholder="Feature">
					  </div>
					</div>
					
				</div>
				
				<div class="row">
				    
				    <div class="col-4">
					  <div class="form-group">
						<label for="built_type">Type</label>
						<input type="text" class="form-control" id="built_type" name="built_type" placeholder="Type">
					  </div>
					</div>
					
					<div class="col-4">
					  <div class="form-group">
						<label for="material">Material</label>
						<input type="text" class="form-control" id="material" name="material" placeholder="Material">
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
                <h3 class="card-title" id="edit_event_msg">Edit Service</h3>
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
				
				<div class="row">
				    <div class="col-4">
					  <div class="form-group">
						<label for="size">Size</label>
						<input type="text" class="form-control" id="edit_size" name="size" placeholder="Size">
					  </div>
					</div>
					
					<div class="col-4">
					  <div class="form-group">
						<label for="shape">Shape</label>
						<input type="text" class="form-control" id="edit_shape" name="shape" placeholder="Shape">
					  </div>
					</div>
					
					<div class="col-4">
					  <div class="form-group">
						<label for="feature">Feature</label>
						<input type="text" class="form-control" id="edit_feature" name="feature" placeholder="Feature">
					  </div>
					</div>
					
				</div>
				
				<div class="row">
				    
				    <div class="col-4">
					  <div class="form-group">
						<label for="built_type">Type</label>
						<input type="text" class="form-control" id="edit_built_type" name="built_type" placeholder="Type">
					  </div>
					</div>
					
					<div class="col-4">
					  <div class="form-group">
						<label for="material">Material</label>
						<input type="text" class="form-control" id="edit_material" name="material" placeholder="Material">
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
	$("#size").val("");
	$("#shape").val("");
	$("#feature").val("");
	$("#built_type").val("");
	$("#material").val("");
	$("#date_time").val("");
	$(".note-editable").html("");
	$("#image").val("");
	$("#image_label").html("Please choose image");
	$("option:selected").prop("selected", false);
}); 
	
// Adding event

$("#add_btn").click(function(){
	var name,description,image,size,shape,feature,built_type,material;
	name = $("#name").val();
	description = $("#description").val();
	image = $("#image").val();
	date_time = $("#date_time").val();
	size = $("#size").val();
	shape = $("#shape").val();
	feature = $("#feature").val();
	built_type = $("#built_type").val();
	material = $("#material").val();
	
	
	
	if(name.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter name</span>");
		$("#name").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else if(image.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please select service thumbnail image</span>");
		$("#image").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else if(description.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter description</span>");
		$("#description").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else if(size.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter size</span>");
		$("#size").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else if(shape.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter shape</span>");
		$("#shape").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else if(feature.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter feature</span>");
		$("#feature").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else if(built_type.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter type</span>");
		$("#built_type").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else if(material.length <= 0){
		$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter material</span>");
		$("#material").focus();
		setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
	}else{
		var fd = new FormData();
		
		$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>service/add_service',
			data: new FormData($('#add_event_form')[0]),
			contentType: false,
            processData: false,
			success: function(result){
				$("#add_btn").hide();
			if(result == 1){
				$("#add_event_msg").html("<sapn style='color:white;font-weight:bold'>Service added successfully...</span>");
				$("#name").val("");
				$("#date_time").val("");
				$("#description").val("");
				$("#image").val("");
				$("#image_label").html("Please choose image");
				$("#size").val("");
				$("#shape").val("");
				$("#feature").val("");
				$("#built_type").val("");
				$("#material").val("");
				setTimeout(function(){ location.reload(); }, 3500);
			}else{
				$("#add_event_msg").html("<sapn style='color:red;font-weight:bold'>Something went wrong, Please try again...</span>");
				setTimeout(function(){ $("#add_event_msg").html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
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
			url: '<?php echo base_url();?>service/get_service_data',
			data: {id:id},
			dataType: "json",
			success: function(result){
				
				$("#edit_name").val(result[0].name);	
				
				$(".note-editable").html(result[0].description);
				$("#edit_description").html(result[0].description);
				$("#edit_size").html(result[0].size);
				$("#edit_shape").html(result[0].shape);
				$("#edit_feature").html(result[0].feature);
				$("#edit_built_type").html(result[0].built_type);
				$("#edit_material").html(result[0].material);
				$("#hidden_id").val(result[0].id);
				$("#display_img").attr("src",'<?php echo base_url();?>/assets/images/service/'+result[0].image);
				$("#edit_event_modal").modal("show");	
			}
		 });
	
});


// Adding event

$("#edit_btn").click(function(){
	var name,description,image,size,shape,feature,built_type,material;
	name = $("#edit_name").val();
	size = $("#edit_size").val();
	shape = $("#edit_shape").val();
	feature = $("#edit_feature").val();
	built_type = $("#edit_built_type").val();
	material = $("#edit_material").val();
	
	description = $("#edit_description").val();
	
	
	if(name.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter name</span>");
		$("#edit_name").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Service</span>"); }, 3500);
	}else if(description.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter description</span>");
		$("#edit_description").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Service</span>"); }, 3500);
	}else if(size.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter size</span>");
		$("#edit_size").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Service</span>"); }, 3500);
	}else if(shape.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter shape</span>");
		$("#edit_shape").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Service</span>"); }, 3500);
	}else if(feature.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter feature</span>");
		$("#edit_feature").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Service</span>"); }, 3500);
	}else if(built_type.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter type</span>");
		$("#edit_built_type").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Service</span>"); }, 3500);
	}else if(material.length <= 0){
		$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Please enter material</span>");
		$("#edit_material").focus();
		setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit Service</span>"); }, 3500);
	}else{
		var fd = new FormData();
		
		$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>service/edit_service',
			data: new FormData($('#edit_event_form')[0]),
			contentType: false,
            processData: false,
			success: function(result){
				console.log(result);
			if(result == 1){
				$("#edit_event_msg").html("<sapn style='color:white;font-weight:bold'>Service updated successfully...</span>");
				$("#edit_name").val("");
				$("#edit_date_time").val("");
				$("#edit_description").val("");
				$("#edit_image").val("");
				$("#edit_image_label").html("Please choose image");
				$("#edit_btn").hide();
				setTimeout(function(){ location.reload(); }, 3500);
			}else{
				$("#edit_event_msg").html("<sapn style='color:red;font-weight:bold'>Something went wrong, Please try again...</span>");
				setTimeout(function(){ $("#edit_event_msg").html("<sapn style='color:white;'>Edit service</span>"); }, 3500);
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
			url: '<?php echo base_url();?>service/delete_service',
			data: {id:id},
			success: function(result){
				
				if(result == 1){
				$("#delete_msg").html("<sapn style='color:green;font-weight:bold'>Service Delete successfully...</span>");
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
		setTimeout(function(){ $("#"+event_msg).html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
		$("#image_label").html("Please choose image");
		$("#"+file_id).val("");
	}else if(size_mb > 2){
		$("#"+event_msg).html("<sapn style='color:red;font-weight:bold'>File size should less than 2 MB. Your file size is "+size_mb+"</span>");
		$("#"+file_id).val("");
		setTimeout(function(){ $("#"+event_msg).html("<sapn style='color:white;'>Add Service</span>"); }, 3500);
		$("#"+file_id).focus();
	}
}

</script> 
