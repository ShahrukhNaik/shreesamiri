<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shree Samiri Enterprises</title>
    <!--fav icon which will be displayed up at the page-->
    <link rel="shortcut icon" type="image/png" href="img/shree_samiri.png">
    <!--refering to the bootstrap css file-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--refering to the bootstrap jqurey file-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--refering to the bootstrap poperjs file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!--refering to the bootstrap js file-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--refering to the fontawesome js file-->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!--refering to the local css file css file-->
	<link href="style.css" rel="stylesheet">
</head>
<body>
    <!--Navigation-->   
    <div class="container">
        <center><a href="index.php" class="nav-link white-text <?php if($page=='home'){echo 'active';}?>"><img src="img/shree_samiri.png" class="logo" alt="" href="index.php"></a></center>    
        <nav class="navbar navbar-expand-md navbar-style navbar-dark sticky-top">        
            <div class="container-fluid">                          
                <!--Hamburger Menu for Mobile Menu-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>            
                <div class="collapse navbar-collapse" id="navbarResponsive">                
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><a href="index.php" class="nav-link white-text <?php if($page=='home'){echo 'active';}?>"><i class="fa fa-home"></i> Home</a></li>
                        <li class="nav-item"><a href="about-us.php" class="nav-link <?php if($page=='about'){echo 'active';}?>"><i class="fa fa-users"></i> About Us</a></li>
                        <li class="nav-item dropdown <?php if($page=='product'){echo 'active';}?>">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sitemap" aria-hidden="true"></i> 
                            Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">                            
                            <a class="dropdown-item <?php if($page=='industrial-products'){echo 'active';}?>" href="industrial-products.php">Industrial Products</a>
                            <a class="dropdown-item <?php if($page=='kitchen-furniture'){echo 'active';}?>" href="kitchen-furniture.php">Kitchen Furniture</a>
                            <a class="dropdown-item <?php if($page=='other-products'){echo 'active';}?>" href="other-products.php">Other Products</a>                          
                            </div>
                        </li>
                        <li class="nav-item"><a href="services.php" class="nav-link <?php if($page=='services'){echo 'active';}?>"><i class="fa fa-cogs"></i>Services</a></li>
                        <li class="nav-item"><a href="contact-us.php" class="nav-link <?php if($page=='contact'){echo 'active';};?>"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
                    </ul>            
                </div>                    
            </div>
        </nav>    
    
    <!--- Image Slider -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
            <li data-target="#slides" data-slide-to="3"></li>            
        </ul>
        <div class="carousel-inner">           
            <div class="carousel-item active">
                <img src="img/1.jpg" alt="">
                <div class="carousel-caption">
                    <h1 class="display-2"><a href="industrial-products.php">Industrial Products</a></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/2.png" alt="">
                <div class="carousel-caption">
                    <h1 class="display-2"><a href="kitchen-furniture.php">Kitchen Furniture </a></h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" alt="">
                <div class="carousel-caption">
                    <h1 class="display-2"><a href="other-products.php">Other Products</a></h1>
                </div>
            </div>
            <a href="#slides" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#slides"  class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>