<?php
include"link/links.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Adventure</title>
</head>
<body>
    <!-- //////////////// Navbar ///////////// -->
    <?php
    include"navbar.php";
    ?>
<div class="alert alert-dark text-center h4" role="alert">
  Gallery
</div>

<div class="container my-4">
    <h2 class="text-center m-4">Videos</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="250" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/LMyyu1bydFI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <p class="card-text text-center h4">Beauty of Auckland</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="250" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/Jc8v784fHmg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <p class="card-text text-center h4">Auckland Trip</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="250" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/OaTuRRcsUz0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <p class="card-text text-center h4">Skyjump and skywalk</p>
                    </div>
                </div>
            </div>
            </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="250" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/CgmUvtl5CV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <p class="card-text text-center h4">Explore Aucland</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="250" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/GH1tG9O80uQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <p class="card-text text-center h4">Climbing MT Eden</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="250" preserveAspectRatio="xMidYMid slice" src="https://www.youtube.com/embed/PH-nH4GP9mM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <p class="card-text text-center h4">One Tree Hill</p>
                    </div>
                </div>
            </div>
         
        </div>
    </div>

<div class="container my-4">
        <h2 class="text-center m-4">Images</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/1.jpeg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/2.jpeg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/3.jpg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/4.jpg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/5.jpg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/6.jpg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/7.jpg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/8.jpg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="img/attractions/9.jpg" alt="" width="100%" height="250" preserveAspectRatio="xMidYMid slice">
                </div>
            </div>
        </div>
    </div>

    

    <?php
    include"footer.php";
    ?>
</body>
</html>