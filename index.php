<?php include 'header.php'; 

 // Select Banner
 $selectBanner = "select * from banner where is_active = 1";
 $bannerResponse = mysqli_query($conn,$selectBanner);
 
 
 // Select About Us
 $selectAbout = "select * from about_me where is_active = 1";
 $aboutResponse = mysqli_query($conn, $selectAbout);
 $getAbout = mysqli_fetch_array($aboutResponse);
 
 // Select Features For One
 $selectFeatureOne = "select * from features where feature = 1 and is_active = 1";
 $featureOneResponse = mysqli_query($conn, $selectFeatureOne);
 
 // Select feature For Two
 $selectFeatureTwo = "select * from features where feature = 2 and is_active = 1";
 $featureTwoResponse = mysqli_query($conn, $selectFeatureTwo);
 
 // Why Choice
 
 $selectWhychoice = "select * from why_choice where is_active = 1";
 $whychoiceResponse = mysqli_query($conn, $selectWhychoice);
 $whychoice = mysqli_fetch_array($whychoiceResponse);
 
 // Select Service
 $selectService = "select * from service where is_active = 1";
 $serviceResponse = mysqli_query($conn, $selectService);
 
 // Select Team
 $selectTeam = "select * from team where is_active = 1";
 $teamResponse = mysqli_query($conn, $selectTeam);
 
 // Select Testimonial
 $selectTestimonial = "select * from testimonial where is_active = 1";
 $testimonialResponse = mysqli_query($conn, $selectTestimonial);
 
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php $jj = 1; ?>
        <?php while ($banner = mysqli_fetch_array($bannerResponse)) { 
            if($jj == 1){
                $active = "active";
            }else{
                $active = "";
            }
        ?>    
          <div class="carousel-item <?php echo $active; ?>">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Welcome to Unique Portable Cabins
                    </h5>
                    <h1 class="display-6 text-light mb-3 animated slideInDown">
                      New and Quality Used Portable Cabins, Portable Buildings & Site Offices
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $jj ++; } ?>
          
          
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                <img class="position-absolute w-100 h-100" src="admin_panel/assets/images/about_me/<?php echo $getAbout['image']; ?>" alt="" style="object-fit: cover"/>
              <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px">
                <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                  <h1 class="text-white">25</h1>
                  <h2 class="text-white">Years</h2>
                  <h5 class="text-white mb-0">Experience</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">About Us</h6>
                <h1 class="display-6 mb-0">
                 <?php echo $getAbout['name']; ?>
                </h1>
              </div>
              <p class="text-limit-9-line">
                <?php echo $getAbout['description']; ?>
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="row g-4">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Ontime at services</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">24/7 hours services</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Verified professionals</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start --> 
    <div class="container-fluid facts my-5 py-5">
    <div class="container py-5">
      <div class="row g-5">
            <div
              class="col-sm-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.3s"
            >
              <i class="fa fa-check fa-3x text-white mb-3"></i>
              <h1 class="display-4 text-white" data-toggle="counter-up">12</h1>
              <span class="fs-5 text-white">Work Experience </span>
              <hr class="bg-white w-25 mx-auto mb-0" />
            </div>
            <div
              class="col-sm-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.1s"
            >
              <i class="fa fa-users fa-3x text-white mb-3"></i>
              <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
              <span class="fs-5 text-white">Happy Clients</span>
              <hr class="bg-white w-25 mx-auto mb-0" />
            </div>

            <div
              class="col-sm-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.5s"
            >
              <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
              <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
              <span class="fs-5 text-white">Dedicated Staff</span>
              <hr class="bg-white w-25 mx-auto mb-0" />
            </div>
            <div
              class="col-sm-6 col-lg-3 text-center wow fadeIn"
              data-wow-delay="0.7s"
            >
              <i class="fa fa-award fa-3x text-white mb-3"></i>
              <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
              <span class="fs-5 text-white">Awards Achieved</span>
              <hr class="bg-white w-25 mx-auto mb-0" />
            </div>
          </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Services</h6>
              <h1 class="display-6 mb-0">
                All Type Portable Cabines
              </h1>
            </div>
          </div>
          <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5" href="product_category.php">More Services</a>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          
            <?php while ($service = mysqli_fetch_array($serviceResponse)) { ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="admin_panel/assets/images/service/<?php echo $service['image']; ?>" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3 text-limit-1-line"><?php echo $service['name']; ?></h5>
                <!-- <div class="text-limit-3-line mb-3">
                <p><?php echo $service['description']; ?>
                </p>
                </div> -->
                <a class="small" href="product_category.php"
                  >READ MORE<i class="fa fa-arrow-right ms-3"></i
                ></a>
              </div>
            </div>
          </div>
            
            <?php } ?>
          
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Features Start -->
    <div class="container-fluid bg-light feature py-5">
      <div class="container">
      <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p
              class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"
            >
              Why Choosing Us!
            </p>
            <h1 class="display-5 mb-4">
              Why Choose PORTABLE CABINS INDUSTRY?
            </h1>
            <p class="mb-4">
              At Unique PORTABLE CABINS INDUSTRY, we stand out
              as a premier choice for all your facility management needs. With
              our commitment to excellence and a range of unique benefits, we
              offer a service that goes beyond expectations.
            </p>
            <!-- <a class="btn btn-primary py-3 px-5" href="why-choosing-us.html"
              >Explore More</a
            > -->
          </div>
          <div class="col-lg-6">
            <div class="row g-4 align-items-center">
              <div class="col-md-6">
                <div class="row g-4">
                  <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-box border rounded p-4">
                      <i class="fa fa-check fa-3x text-primary mb-3"></i>
                      <h4 class="mb-3">Tailored Solutions for Every Need</h4>
                      <!-- <p class="mb-3">
                        Clita erat ipsum et lorem et sit, sed stet lorem sit
                        clita duo justo erat amet
                      </p>
                      <a class="fw-semi-bold" href=""
                        >Read More <i class="fa fa-arrow-right ms-1"></i
                      ></a> -->
                    </div>
                  </div>
                  <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-box border rounded p-4">
                      <i class="fa fa-check fa-3x text-primary mb-3"></i>
                      <h4 class="mb-3">Eco-Friendly Practices</h4>
                      <!-- <p class="mb-3">
                        Clita erat ipsum et lorem et sit, sed stet lorem sit
                        clita duo justo erat amet
                      </p>
                      <a class="fw-semi-bold" href=""
                        >Read More <i class="fa fa-arrow-right ms-1"></i
                      ></a> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-box border rounded p-4">
                  <i class="fa fa-check fa-3x text-primary mb-3"></i>
                  <h4 class="mb-3">Cutting-Edge Technology Integration</h4>
                  <!-- <p class="mb-3">
                    Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                    duo justo erat amet
                  </p>
                  <a class="fw-semi-bold" href=""
                    >Read More <i class="fa fa-arrow-right ms-1"></i
                  ></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    

    <!-- Appointment Start -->
    <div
      class="container-fluid appointment mb-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-white text-uppercase mb-2">Appointment</h6>
              <h1 class="display-6 text-white mb-0">
                A Company Involved In Service And Maintenance
              </h1>
            </div>
            <p class="text-white mb-0">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
          </div>
          <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
            <form>
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-dark border-0"
                      name="name"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control bg-dark border-0"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="number"
                      class="form-control bg-dark border-0"
                      name="mobile"
                      id="mobile"
                      placeholder="Mobile"
                    />
                    <label for="mobile">Your Mobile</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-dark border-0"
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
                      class="form-control bg-dark border-0"
                      placeholder="Leave a message here"
                      name="message"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="button" id="homeBtn">
                    Get Appointment
                  </button>
                </div>
                <div class="col-12">
                    <center><label id="label_success" style="color:yellow"></label></center>
                    <center><label id="label_error" style="color:red"></label></center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Appointment End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Team</h6>
              <h1 class="display-6 mb-0">Our Expert Worker</h1>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="mb-0">
            To attain several of the firm’s predefined goals and targets, we have recruited a highly skilled team of professionals.
            These professionals are handpicked on the basis of their ability and willingness to their operations, the team has been
            sorted into several units, highly operational in nature. In addition to this, the professionals are trained regularly, for
            reasons of keeping them at par with the ever changing market.
            </p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item">
              <img class="img-fluid rounded" src="img/team-1.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Ranjeet Sonawane</h4>
                <div class="team-social d-flex">
                  <h4>Director</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item">
              <img class="img-fluid rounded" src="img/team-2.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Sunil Solkar</h4>
                <div class="team-social d-flex">
                  <h4>Sr. OPS Manager</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item">
              <img class="img-fluid rounded" src="img/team-3.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Doris Jordan</h4>
                <div class="team-social d-flex">
                  <h4>Manager</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">TESTIMONIAL</h6>
              <h1 class="display-6 mb-0">What Our Happy Clients Say!</h1>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="mb-0">
            
            </p>
          </div>
        </div>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.3s"
        >
          <div class="testimonial-item">
            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
              <div class="btn-square bg-white border rounded-circle">
                <i class="fa fa-quote-right fa-2x text-primary"></i>
              </div>
              Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
              dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore
              et tempor diam tempor erat.
            </div>
            <img
              class="rounded-circle mb-3"
              src="img/testimonial-1.jpg"
              alt=""
            />
            <h4>Client Name</h4>
            <span>Profession</span>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
              <div class="btn-square bg-white border rounded-circle">
                <i class="fa fa-quote-right fa-2x text-primary"></i>
              </div>
              Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
              dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore
              et tempor diam tempor erat.
            </div>
            <img
              class="rounded-circle mb-3"
              src="img/testimonial-2.jpg"
              alt=""
            />
            <h4>Client Name</h4>
            <span>Profession</span>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
              <div class="btn-square bg-white border rounded-circle">
                <i class="fa fa-quote-right fa-2x text-primary"></i>
              </div>
              Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
              dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore
              et tempor diam tempor erat.
            </div>
            <img
              class="rounded-circle mb-3"
              src="img/testimonial-3.jpg"
              alt=""
            />
            <h4>Client Name</h4>
            <span>Profession</span>
          </div>
          <div class="testimonial-item">
            <div class="testimonial-text border rounded p-4 pt-5 mb-5">
              <div class="btn-square bg-white border rounded-circle">
                <i class="fa fa-quote-right fa-2x text-primary"></i>
              </div>
              Dolores sed duo clita tempor justo dolor et stet lorem kasd labore
              dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore
              et tempor diam tempor erat.
            </div>
            <img
              class="rounded-circle mb-3"
              src="img/testimonial-4.jpg"
              alt=""
            />
            <h4>Client Name</h4>
            <span>Profession</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

     <!-- client Start -->
     <div class="container-fluid py-5 bg-light">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">OUR CLIENT</h6>
              <h1 class="display-6 mb-0">Happy With Our Service</h1>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="mb-0">
            
            </p>
          </div>
        </div>
        <div class="wow fadeInUp" data-wow-delay="0.3s">
          <div class="row gy-5 gx-4">
            <section class="customer-logos slider">
              <div class="slide"><img src="img/client/client-1.jpg" /></div>
              <div class="slide"><img src="img/client/client-2.jpg" /></div>
              <div class="slide"><img src="img/client/client-3.jpg" /></div>
              <div class="slide"><img src="img/client/client-4.jpg" /></div>
              <div class="slide"><img src="img/client/client-5.jpg" /></div>
              <div class="slide"><img src="img/client/client-6.jpg" /></div>
              <div class="slide"><img src="img/client/client-7.jpg" /></div>
              <div class="slide"><img src="img/client/client-8.jpg" /></div>
              <div class="slide"><img src="img/client/client-9.jpg" /></div>
              <div class="slide"><img src="img/client/client-10.jpg" /></div>
              <div class="slide"><img src="img/client/client-11.jpg" /></div>
              <div class="slide"><img src="img/client/client-12.jpg" /></div>
              <div class="slide"><img src="img/client/client-13.jpg" /></div>
              <div class="slide"><img src="img/client/client-14.jpg" /></div>
              <div class="slide"><img src="img/client/client-15.jpg" /></div>
              <div class="slide"><img src="img/client/client-16.jpg" /></div>
              <div class="slide"><img src="img/client/client-17.jpg" /></div>
              <div class="slide"><img src="img/client/client-18.jpg" /></div>
              <div class="slide"><img src="img/client/client-19.jpg" /></div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- client End -->
<?php include 'footer.php'; ?>

<script>
 
  // A $( document ).ready() block.
$( document ).ready(function() {
    
   $("#homeBtn").click(function(){
       
        var name = $.trim($("#name").val());
        var mobile = $.trim($("#mobile").val());
        var email = $.trim($("#email").val());
        var subject = $.trim($("#subject").val());
        var message = $.trim($("#message").val());
        var homepage = 'Inquery from home page';
        
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
           }else if(mobile.length <= 0){
           alert("Please enter mobile no"); 
           $("#mobile").focus();
           }else if(mobile.length > 0 && !mob.test(mobile)){
             alert("Please enter proper mobile no"); 
            $("#mobile").focus();  
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
        			data:{'name': name,'email' : email,'mobile' : mobile, 'message' : message,'subject' :subject, 'homepage' : homepage},
        			success: function(result){
        			    
        			   
         			if(result == 0){
        			    
        			    $("#label_success").html("Request sent successfully. Team will contact you.");
        			    setTimeout(function(){ $("#label_label").html(""); 
        			    $("#name").val("");
        			    $("#email").val("");
        			    $("#mobile").val("");
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