<?php  include 'header.php';


 $selectService = "select * from service where is_active = 1";
 $serviceResponse = mysqli_query($conn, $selectService);

 if(!empty($_GET['id'])){ $id =  $_GET['id']; }else{ $id = ''; }

$selectGallery = "select * from gallery where event = $id";
$galleryResponse = mysqli_query($conn,$selectGallery);



?>
    <!-- Page Header Start -->
   <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">Gallery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Page</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Our Gallery
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
                <h6 class="text-body text-uppercase mb-2">Our Gallery</h6>
                <h1 class="display-6 mb-0">Completed Project Pictures.</h1>
              </div>
              <div class="row g-4 portfolio-container">
                
                  <?php if(empty($galleryResponse)) { while($productData = mysqli_fetch_array($serviceResponse)){ ?>
                  
                  <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp"  data-wow-delay="0.1s">
                  <div class="portfolio-inner rounded">
                      <img  class="img-fluid" src="admin_panel/assets/images/service/<?php echo $productData['image']; ?>" alt="" />
                    <div class="portfolio-text">
                      <h4 class="text-white mb-4">
                        Portable Accomodation Cabin
                      </h4>
                      <div class="d-flex">
                        <!-- <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-1.jpeg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a> -->
                          <a class="btn btn-lg-square rounded-circle mx-2" href="gallery.php?id=<?php echo $productData['id']; ?>" ><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <div class="text-center">
                      <p class="py-2 h5"><?php echo $productData['name']; ?> </p>
                    </div>
                  </div>
                </div>
                  
                  <?php } } else { ?>
                  
                  <?php  while($galleryData = mysqli_fetch_array($galleryResponse)){ ?>
                  <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp"  data-wow-delay="0.1s">
                  <div class="portfolio-inner rounded">
                      <img  class="img-fluid" src="admin_panel/assets/images/gallery/<?php echo $galleryData['image']; ?>" alt="" />
                    <div class="portfolio-text">
                    <h4 class="text-white mb-4">
                        Portable Accomodation Cabin
                      </h4>
                      <div class="d-flex">
                        <a class="btn btn-lg-square rounded-circle mx-2" href="img/gallery/gallery-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                          <!-- <a class="btn btn-lg-square rounded-circle mx-2" href="gallery.php?id=<?php echo $productData['id']; ?>" ><i class="fa fa-link"></i></a> -->
                      </div>
                    </div>
                    
                  </div>
                </div>
                
                <?php } } ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->


  <?php include 'footer.php'; ?>