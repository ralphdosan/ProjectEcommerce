<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href={{asset('css/style.css')}} rel="stylesheet">
    <link href={{asset('fontawesome-free-6.5.1-web/css/all.min.css')}} rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar" style="background: #2F3039">
        <div class="container-fluid d-flex flex-row-reverse me-4" style="font-family: 'Roboto', sans-serif;">
          <a href="#" class="navbar-brand mb-0 fw-bold  fs-6 text-light"><i class="fa-solid fa-right-to-bracket mx-1" style="color: #ff0000;"></i>Register</a>
          <a href="#" class="navbar-brand mb-0 fw-bold  fs-6 text-light"><i class="fa-regular fa-circle-user  mx-1" style="color: #ff0000;"></i>Login</a>

           <div class="d-flex flex-row-reverse" style="font-family: 'Roboto', sans-serif;">
            <a href="#"  class="navbar-brand mb-0 fw-bold  fw-normal fs-6 text-light"><i class="fa-solid fa-location-dot mx-2" style="color: #e61414;"></i>Eastroad Philippines</a>
            <a href="#"  class="navbar-brand mb-0 fw-bold  fw-normal fs-6 text-light"><i class="fa-regular fa-envelope fa-sm mx-2" style="color: #e61414;"></i>emailko@gmail.com</a>
            <a href="#"  class="navbar-brand mb-0 fw-bold  fw-normal fs-6 text-light"><i class="fa-solid fa-phone fa-xs mx-2" style="color: #e61414;"></i>+ 1206785</a>
           </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg" style="background: #15161D">
        <div class="container-fluid" >  
          <a class="navbar-brand text-left" href="#"><img class="img-fluid" src="{{asset('image/e-commers.png')}}" alt="Bootstrap" width="200" height="60"></a>
            <!-- SEARCH BAR -->
            <div class="col-md-5">
                <div class="header-search">
                    <form>
                        <select class="input-select">
                            <option value="0">All Categories</option>
                            <option value="1">Category 01</option>
                            <option value="1">Category 02</option>
                        </select>
                        <input class="input" placeholder="Search here">
                        <button class="search-btn">Search</button>
                    </form>
                </div>
            </div>
            <!-- SEARCH BAR -->

             <!-- /Wishlist -->
			<div class="me-5">
                <i class="fa-regular fa-heart fa-xl text-center mx-3" style="color: #ffffff;"></i>
                 <!-- /Wishlist -->
                <!-- Cart -->
                <i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i>
            </div>
            <!-- /Cart -->
        </div>
      </nav>
      <header class="navbar" style="background: #d80b0be8" >
        <div class="container" >
        </div>
    </header>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg light-background shadow-lg">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="font-family: 'Roboto', sans-serif;">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link active" aria-current="page" href="#">Hot Deals</a>
              <a class="nav-link active" aria-current="page" href="#">Laptops</a>
              <a class="nav-link active" aria-current="page" href="#">Smartphones</a>
              <a class="nav-link active" aria-current="page" href="#">Cameras</a>
              <a class="nav-link active" aria-current="page" href="#">Accessories</a>
            </div>
          </div>
        </div>
      </nav>
	<!-- /NAVIGATION -->
    <header class="navbar" style="background: #2F3039">
        <div class="container-fluid d-flex flex-row-reverse me-4">
          <a href="#" class="navbar-brand mb-0 h1 text-light"></a>
        </div>
    </header>

    <header class="navbar" style="background: #2F3039">
        <div class="container-fluid d-flex flex-row-reverse me-4">
          <a href="#" class="navbar-brand mb-0 h1 text-light"></a>
        </div>
    </header>
    <header class="navbar" style="background: #2F3039">
        <div class="container-fluid d-flex flex-row-reverse me-4">
          <a href="#" class="navbar-brand mb-0 h1 text-light"></a>
        </div>
    </header>
    <header class="navbar" style="background: #2F3039">
        <div class="container-fluid d-flex flex-row-reverse me-4">
          <a href="#" class="navbar-brand mb-0 h1 text-light"></a>
        </div>
    </header>
    <!-- Footer -->
    <footer class="footer-20192 ">
        <div class="site-section">
          <div class="container">
  
            <div class="cta d-block d-md-flex align-items-center px-5">
              <div>
                <h2 class="mb-0">Ready for a next project?</h2>
                <h3 class="text-dark">Let's get started!</h3>
              </div>
              
            </div>
            <div class="row">
  
              <div class="col-sm">
                <a href="#" class="footer-logo">E-Commers</a>
                <p class="copyright">
                  <small>&copy; 2019</small>
                </p>
              </div>
              <div class="col-sm">
                <h3>Customers</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">Buyer</a></li>
                  <li><a href="#">Supplier</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <h3>Company</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
              </div>
              <div class="col-sm">
                <h3>Further Information</h3>
                <ul class="list-unstyled links">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h3>Follow us</h3>
                <ul class="list-unstyled social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-medium"></span></a></li>
                  <li><a href="#"><span class="icon-paper-plane"></span></a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </footer>
    <!-- /Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>