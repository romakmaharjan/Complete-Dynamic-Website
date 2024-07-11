<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nepali Football Player-Website</title>
</head>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- stylesheet -->
<link rel="stylesheet" href="style.css" />

<!--fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <div class="container-fluid slider">
        <?php include './partials/header.php'; ?>
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
                    <img src="images/homeimag2.jpg" class="d-block w-100" alt="homapageimg" />
                </div>
                <div class="carousel-item">
                    <img src="images/homeimg3.jpg" class="d-block w-100" alt="homapageimg" />
                </div>
            </div>
        </div>
    </div>
    <!--cards-->
    <div class="container">
        <h1 class="text-center featureTitle mb-5">Featured Stories </h1>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/manish dangi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/anjan bista.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Continue Reading</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="images/Anilgurung.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Continue Reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './partials/footer.php'; ?>
</body>

</html>