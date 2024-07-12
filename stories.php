<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nepali Football Player-Website</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css" />

    <!--fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include './partials/connect.php'; ?>
    <?php include './partials/header.php'; ?>
    <?php 
    $id=$_GET['story_id'];
    $sql="Select * from `players` where player_id=$id";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $player_name=$row['player_name'];
        $player_desc=$row['player_desc'];
        $player_image=$row['player_image'];
    }
    ?>
    <!-- jum button-->
    <div class="container-fluid bg-warning rounded ">
        <div class="container mb-10">
            <div class="jumbotron">
                <h1 class="display-4"><?php echo $player_name?></h1>
                <p class="lead"><?php echo $player_desc?></p>
                <button class="btn btn-dark">
                    <a class="text-light" href="#reading" role="button">Read More</a>
                </button>
            </div>
        </div>
    </div>


    <div class="container-fluid slider">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/homeimg.jpg" class="d-block w-100" alt="homapageimg" />
                </div>
                <div class="carousel-item">
                    <img src="images/homeimag2.jpg" class="d-block w-100" alt="homepageimg" />
                </div>
                <div class="carousel-item">
                    <img src="images/homeimg3.jpg" class="d-block w-100" alt="homepageimg" />
                </div>
            </div>
        </div>
    </div>

    <!--Reading -->
    <div class="container" id="reading">
        <div class="jumbotron jumbotron-fluid bg-warning rounded p-0">
            <div class="container">
                <div class="jumbotron">
                    <h1 class="display-4 text-center">Enjoy Reading!</h1>
                    <img src=<?php echo $player_image;?> class="img-fluid" alt="">
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                        attentionto featured content or information Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. At accusamus cum possimus cupiditate atque magnam, laboriosam itaque perferendis sequi
                        voluptatibus repellendus adipisci officia odit minus consequatur non corporis, enim
                        maiores?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sunt quam animi magnam id
                        blanditiis laboriosam rem, autem iste asperiores, velit dolore optio ex reiciendis, laudantium
                        reprehenderit? Quod, saepe neque..
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- thank you txt -->
    <div class="conatiner-fluid mb-4">
        <h2 class="text-center display-4">Thank you for reading stories :)</h2>
    </div>

    <?php include './partials/footer.php'; ?>
</body>

</html>