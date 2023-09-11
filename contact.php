<?php include 'header.php'; ?>
    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Contact Us
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Contact Us
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 450px"
          >
            <div class="position-relative h-100">
              <iframe
                class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15214.077044610023!2d78.4095994871582!3d17.578060500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8ee2917d60d3%3A0xd40270f6acd162b2!2sMandal%20Revenue%20Office!5e0!3m2!1sen!2sin!4v1694464170556!5m2!1sen!2sin"
                frameborder="0"
                style="min-height: 450px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Contact Us</h6>
              <h1 class="display-6 mb-0">
                If You Have Any Query, Please Contact Us
              </h1>
            </div>
            <p class="mb-4">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, sunt ab. Ab unde libero expedita tempore, deserunt ad quo molestias consectetur commodi ullam optio, odit accusamus, totam consequuntur blanditiis nisi?
            </p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      name="name"
                      id="name"
                      placeholder="Your Name"
                    />
                    
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control border-0 bg-light"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      name="subject"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control border-0 bg-light"
                      placeholder="Leave a message here"
                      name="message"
                      id="message"
                      style="height: 150px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" id="submit_btn" type="button">
                    Send Message
                  </button>
                </div>
                <div class="col-12">
                    <center><label id="label_success" style="color:green"></label></center>
                    <center><label id="label_error" style="color:red"></label></center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
<?php include 'footer.php'; ?>


<script>
 
  // A $( document ).ready() block.
$( document ).ready(function() {
    
   $("#submit_btn").click(function(){
       
        var name = $.trim($("#name").val());
        var email = $.trim($("#email").val());
        var subject = $.trim($("#subject").val());
        var message = $.trim($("#message").val());
        var contactpage = "Inquery from contact page";
        
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var mob = /^[6-9]{1}[0-9]{9}$/;

        
       if(name.length <= 0){
           alert("Please enter name"); 
           $("#name").focus();
          }else if(email.length <= 0){
           alert("Please enter Email"); 
           $("#email").focus();
           }else if(email.length > 0 && !pattern.test(email)){
             alert("Please enter proper email"); 
            $("#email").focus();  
           }else if(subject.length <= 0){
           alert("Please enter subject"); 
           $("#subject").focus();
           }else if(message.length <= 0){
           alert("Please enter message"); 
           $("#message").focus();
           }else{
                    $.ajax({
        			type: "POST",
        			url: "send_mail.php",
        			data:{'name': name,'email' : email, 'message' : message,'subject' :subject,'contactpage' : contactpage},
        			success: function(result){
        			    
        			   
         			if(result == 0){
        			    
        			    $("#label_success").html("Request sent successfully. Team will contact you.");
        			    setTimeout(function(){ $("#label_label").html(""); 
        			    $("#name").val("");
        			    $("#email").val("");
        			    $("#subject").val("");
        			    $("#message").val("");
        			    }, 3500);
        			    
         			}else{
        			    
        			    $("#label_error").html("Some thing went wrong, Please try again");
        				setTimeout(function(){ $("#label_label").html("");
        				$("#name").val("");
        			    $("#email").val("");
        			    $("#subject").val("");
        			    $("#message").val("");
        				}, 3500);
        					
         			}
        		  }
        		 });  
           }
       
   });
    
});
</script>