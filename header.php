<?php
include 'connection.php';

$selectServiceHeader = "select * from service where is_active = 1";
$serviceHeaderResponse = mysqli_query($conn, $selectServiceHeader);
?>

<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="utf-8" />
    <title>Unique Portable Cabins Industry</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

     <!-- call us button only show in mobile-->
     <div class="container-fluid d-md-none d-block">
      <div class="row">
        <div class="col-12 col-md-4 fixed-bottom px-0">
          <div class="btn-group w-100" role="group" aria-label="Basic example">
            <a href="tel:+91 9848621677" class="w-100 text-white">
              <button type="button" class="btn btn-primary rounded-0 w-100">
                <img src="img/phone-icom.png" height="32" />
                +919848621677
              </button>
            </a>

            <a href="#" class="w-100">
              <button type="button" class="btn btn-success rounded-0 w-100">
                <img src="img/whatsapp-icon.png" height="32" />
                Whatsapp
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
     <!-- call us button only show in mobile end-->

    <!-- Topbar Start -->
    <div class="container-fluid bg-danger p-0">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div
            class="h-100 d-inline-flex text-white align-items-center border-start border-end px-3"
          >
            <small class="fa fa-phone-alt me-2"></small>
            <small><a href="tel:+919848621677" class="text-white"> 9848621677</a></small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3 text-white">
            <small class="far fa-envelope-open me-2"></small>
            <small><a href="mailto:uniqueportablecabin@gmail.com" class="text-white"> uniqueportablecabin@gmail.com</a></small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-square border-end border-start text-white" href=""
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-square border-end text-white" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-square border-end text-white" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-square border-end text-white" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <!-- <i class="fa fa-building text-primary me-3"></i> -->
          <!-- Sunrise Portable Cabins -->
          <img src="img/unique-full-logo.jpg" class="logo" style="width:200px;">
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="index.php" class="nav-item nav-link active">Home</a>
          <!-- <a href="about.html" class="nav-item nav-link">About Us</a> -->
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" >About Us</a>
            <div class="dropdown-menu bg-light m-0">
              <a href="about.php" class="dropdown-item">About Company</a>
              <a href="team.php" class="dropdown-item">Our Team</a>
              <a href="testimonial.php" class="dropdown-item">Testimonial</a>
            </div>
          </div>
          
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Products</a
            >
            <div class="dropdown-menu bg-light m-0">
              <?php while ($serviceHeader = mysqli_fetch_array($serviceHeaderResponse)) { ?>
                <a href="product.php?id=<?php echo $serviceHeader['id']; ?>" class="dropdown-item"><?php echo $serviceHeader['name']; ?></a>
              <?php } ?>
              </div>
          </div>
          <a href="client.php" class="nav-item nav-link">Client</a>
          <!-- <a href="testimonial.php" class="nav-item nav-link">Testimonial</a> -->
          <a href="gallery.php" class="nav-item nav-link">Gallery</a>
          <a href="contact.php" class="nav-item nav-link">Contact Us</a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
