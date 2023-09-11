<?php include 'header.php';

// Select Testimonial
 $selectTestimonial = "select * from testimonial where is_active = 1";
 $testimonialResponse = mysqli_query($conn, $selectTestimonial);
?>

    <!-- Page Header Start -->
     <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          Testimonial
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
              Testimonial
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

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

    <?php include 'footer.php'; ?>