<?php

 include 'header.php';
//  $id = $_GET['id'];

//  $selectServiceId = "select * from service where id = $id";
// $serviceIdResponse = mysqli_query($conn,$selectServiceId);
// $singleService = mysqli_fetch_array($serviceIdResponse);

// Select Service
$selectService = "select * from service where is_active = 1";
$serviceResponse = mysqli_query($conn, $selectService);

$selectServiceHeader = "select * from service where is_active = 1";
$serviceHeaderResponse = mysqli_query($conn, $selectServiceHeader);

?> 

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
          <!-- <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
            <a class="btn btn-primary py-3 px-5" href="">More Services</a>
          </div> -->
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
                
                <a class="small" href="product.php"
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

     

  <?php include 'footer.php'; ?>