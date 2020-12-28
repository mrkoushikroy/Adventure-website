<?php
include"link/links.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Adeventure</title>
</head>

<body>
    <!-- //////////////// Navbar ///////////// -->
    <?php
    include"navbar.php";
    ?>

    <!-- /////////////// carousel ////////////////// -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bg.jpeg" class="d-block w-100 img-body" alt="..." height="550" width="1200">
                <div class="carousel-caption d-md-block">
                    <a href="gallery.php"><button type="button" class="btn btn-success">Gallery</button></a>
                    <a href="contact.php"><button type="button" class="btn btn-danger">Contact</button></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bg1.jpeg" class="d-block w-100 img-body" alt="..." height="550" width="1200">
                <div class="carousel-caption d-md-block">
                    <a href="gallery.php"><button type="button" class="btn btn-success">Gallery</button></a>
                    <a href="contact.php"><button type="button" class="btn btn-danger">Contact</button></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container marketing mt-4 ">
        <div class="row">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140" src="img/hotel.jpeg"
                    alt="img1">
                <h2 class='text-center'>Top Hotels</h2>
                <a href="hotels.php" class="text-decoration-none"><button type="button" class="btn btn-success d-flex m-auto">Visit now</button></a>
            </div>
            <div class="col-lg-4 mt-2">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140" src="img/resturant.jpeg"
                    alt="img1">
                <h2 class='text-center'>Top Resturants</h2>
                <a href="resturant.php" class="text-decoration-none"><button type="button" class="btn btn-primary d-flex m-auto">Visit now</button></a>
            </div>
            <div class="col-lg-4 mt-2">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140" src="img/contact.jpeg"
                    alt="img1">
                <h2 class='text-center'>Contact us</h2>
                
                <a href="contact.php" class="text-decoration-none"><button type="button" class="btn btn-success d-flex m-auto">Contact us</button></a>
            </div>
        </div>
    </div>

<hr>
    <div class="container-fluid">
        <h2 class="text-center my-2">Keep Planning</h2><br>
        <div class="row rounded mx-1" style="background-color: #ff5d5d;">
            <div class="col-lg-6 col-12 p-1">
                <br>
                <h1 class="text-center text-light">Start saving your travel ideas</h1><br>
                <p class="text-center text-light">Create a Trip to save and organise all of your travel ideas, and see
                    them on a map</p>
                <br><a href="attract.php" class="text-decoration-none"><button type="button" class="btn btn-primary rounded-pill d-flex m-auto">Explore now</button></a></a><br>

            </div>
            <div class="col-lg-6 col-12 p-2">
            <div class="card mb-6 shadow-sm d-block">
            <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Auckland%2C%20New%20Zealand&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        </div>
    </div>

    <div class="container-fluid py-2">
        <div class="row rounded my-1 bg-primary py-1">
            <div class="col-lg-6 col-12 p-1 text-center">
                <div class="card mb-6 shadow-sm d-block"> <iframe width="100%" height="300"
                        src="https://www.youtube.com/embed/LMyyu1bydFI" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-2">
                <br>
                <h1 class="text-center text-light">Explore the Beauty of Auckland</h1><br>
                <p class="text-center text-light">Create a Trip to save and organise all of your travel ideas, and see
                    them on a map</p>
                <br><a href="contact.php" class="text-decoration-none"><button type="button"
                        class="btn btn-danger d-flex m-auto rounded-pill">Contact Us</button></a><br>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row rounded py-1 text-center">
            <div class="col-lg-3 col-12 p-2  bg-warning border border-dark rounded align-items-center">
                <br>
                <h1 class="text-center text-light ">Best Resturants in Auckland</h1><br>
                <p class="text-center text-light">Find the best places to eat in Auckland. The taste of Auckland</p>
                <br><a href="resturant.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill">Visit now</button></a><br>
            </div>
            <div class="col-lg-3 col-12 p-2  bg-warning border border-dark rounded">
                <br>
                <h1 class="text-center text-light ">Explore the Beauty of Auckland</h1><br>
                <p class="text-center text-light">Find the Attractions of Auckland, Places with beauty in Auckland.</p>
                <br><a href="attract.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill"> Visit now</button></a><br>
            </div>
            <div class="col-lg-3 col-12 p-2  bg-warning border border-dark rounded">
                <br>
                <h1 class="text-center text-light">Explore Budger Hotels in Auckland</h1><br>
                <p class="text-center text-light">Thinking where to stay, find out best hotels in Auckland</p>
                <br><a href="hotels.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill">Visit now</button></a><br>
            </div>
            <div class="col-lg-3 col-12 p-2 bg-warning border border-dark rounded">
                <br>
                <h1 class="text-center text-light">Explore the Gallery of Auckland</h1><br>
                <p class="text-center text-light">See the beauty of Auckland. Images and Videos of Auckland</p>
                <br><a href="gallery.php" class="text-decoration-none"><button type="button"
                        class="btn btn-outline-danger d-flex m-auto rounded-pill">Visit now</button></a><br>
            </div>
        </div>
    </div>
    </div>

    <?php
    include"footer.php";
    ?>
</body>

</html>