<?php include 'header.php';

$selectAbout = "select * from about_me where is_active = 1";
 $aboutResponse = mysqli_query($conn, $selectAbout);
 $getAbout = mysqli_fetch_array($aboutResponse);
 
?>

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
          About Company
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">About Us</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              About Company
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">About Us</h6>
                <h1 class="display-6 mb-0">
                  <?php echo $getAbout['name']; ?>
                </h1>
              </div>
              
              <p class="mb-4"> <?php echo $getAbout['description']; ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- our mission Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Mission</h6>
              <!-- <h1 class="display-6 mb-0">Our Expert Worker</h1> -->
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
            <p>
              <?php echo $getAbout['mission']; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- our mission End -->

    <!-- our mission Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Vission</h6>
              <!-- <h1 class="display-6 mb-0">Our Expert Worker</h1> -->
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
            <p> <?php echo $getAbout['vission']; ?> </p>
          </div>
        </div>
      </div>
    </div>
    <!-- our mission End -->

    <?php include 'footer.php'; ?>