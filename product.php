<?php

 include 'header.php';
 $id = $_GET['id'];

 $selectServiceId = "select * from service where id = $id";
$serviceIdResponse = mysqli_query($conn,$selectServiceId);
$singleService = mysqli_fetch_array($serviceIdResponse);



?>

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
           <?php echo $singleService['name']; ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Our Products</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
               Container Office
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

     <!-- produts details Start -->
     <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
              <div class="h-100">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                  <!-- <h6 class="text-body text-uppercase mb-2">About Us</h6> -->
                  <h1 class="display-6 mb-0">
                     <?php echo $singleService['name']; ?>
                  </h1>
                </div>
                <p class="mb-4"> <?php echo $singleService['description']; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->  
    
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="position-relative overflow-hidden pt-5 h-100 shadow-lg" style="min-height: 400px">
                  <a href="gallery.php?id=<?php echo $singleService['id']; ?>">
                  <img class="position-absolute w-100 h-100" src="admin_panel/assets/images/service/<?php echo $singleService['image']; ?>" alt="" style="object-fit: cover" />
                  </a>
              </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="h-100">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                  <!-- <h6 class="text-body text-uppercase mb-2">About Us</h6> -->
                  <h1 class="display-6 mb-0">
                    Specifications
                  </h1>
                </div>
                <p>
                    <table class="table table-bordered table-striped">
                        <tbody><tr>
                          <th>Company</th>
                          <th>Contact</th>
                        </tr>
                        <tr>
                          <td>Size</td>
                          <td> <?php echo $singleService['size']; ?></td>
                        </tr>
                        <tr>
                          <td>Shape</td>
                          <td> <?php echo $singleService['shape']; ?></td>
                        </tr>
                        <tr>
                          <td>Feature</td>
                          <td> <?php echo $singleService['feature']; ?></td>
                        </tr>
                        <tr>
                          <td>Built Type  </td>
                          <td> <?php echo $singleService['built_type']; ?></td>
                        </tr>
                        <tr>
                          <td>Material</td>
                          <td> <?php echo $singleService['material']; ?></td>
                        </tr>
                      </tbody></table>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- About Start -->
   
      <!-- About End -->

  <?php include 'footer.php'; ?>