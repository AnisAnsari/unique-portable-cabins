<?php include 'header.php'; 

// Select Team
 $selectTeam = "select * from team where is_active = 1";
 $teamResponse = mysqli_query($conn, $selectTeam);
 
?>

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Our Team</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Our Team
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

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

   <?php include 'footer.php'; ?>