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

     <!-- client Start -->
     <div class="container-fluid py-5">
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
        <div class="row gx-4 align-items-end mb-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-1.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-2.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-3.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-3.jpg" alt="">
                            </a>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-4.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-5.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-6.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-7.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-7.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-8.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-8.jpg" alt="">
                            </a>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-9.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-9.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-11.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-11.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-12.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-12.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-14.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-14.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-13.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-13.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-14.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-14.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-15.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-15.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row g-0">
                        <div class="col-12 mb-3 client-img">
                            <a class="d-block" href="img/client/client-16.jpg" data-lightbox="gallery">
                                <img class="img-fluid" src="img/client/client-16.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
      </div>
    </div>
    <!-- client End -->

    <?php include 'footer.php'; ?>