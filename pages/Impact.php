<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impact</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 40px;
        }

        .info-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }

        .info-card h3 {
            margin-top: 0;
        }

        .info-card img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #carouselExampleCaptions .carousel-item img {
        height: 300px; 
        object-fit: cover; 
    }
    </style>



</head>

<body>
    <?php include '../component/header.php'; ?>

    <div class="container py-4">
        <h2 class="pb-2 border-bottom">Climate Change Impact</h2>


        <div class="section">
            <h3 class="section-title">Rising Temperatures</h3>
            <div class="info-card">
                <h3>Impact on Weather Patterns</h3>
                <p>As global temperatures rise, weather patterns become more unpredictable, leading to more frequent and intense heatwaves, droughts, and storms.</p>
                <img src="../assets/images/temperature.png" alt="temperature">
            </div>
        </div>


        <div class="section">
            <h3 class="section-title">Melting Ice Caps</h3>
            <div class="info-card">
                <h3>Sea Level Rise</h3>
                <p>The melting of polar ice caps and glaciers contributes to sea level rise, threatening coastal communities and ecosystems with flooding and erosion.</p>
                <img src="../assets/images/sealevelrise.jpg" alt="sea level" width="700rem" height="500rem">
            </div>

        </div>

        <div class="section">
            <h3 class="section-title">Biodiversity Loss</h3>
            <div class="info-card">
                <h3>Impact on Ecosystems</h3>
                <p>Climate change accelerates species extinction rates and disrupts ecosystems, leading to loss of biodiversity and ecosystem services.</p>
                <img src="../assets/images/biodiversity.webp" alt="biodiversity" width="500rem" height="300rem">
            </div>
        </div>


        <div class="section">
            <h3 class="section-title">Extreme Weather Events</h3>
            <div class="info-card">
                <h3>Increase in Frequency and Intensity</h3>
                <p>Climate change is linked to more frequent and intense extreme weather events, including hurricanes, floods, wildfires, and heatwaves, causing widespread destruction and loss of life.</p>

                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/images/hurricanes.jpg" class="d-block w-100" alt="Hurricanes">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Hurricanes</h5>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/flood.jpg" class="d-block w-100" alt="Flood">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Flood</h5>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/wildfires.jpg" class="d-block w-100" alt="Wildfires">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Wildfires</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>


        <div class="section">
            <h3 class="section-title">Take Action</h3>
            <div class="info-card">
                <h3>Make a Difference</h3>
                <p>Learn more about climate change impacts and how you can take action to mitigate its effects. Together, we can create a more sustainable future for our planet.</p>
                
                <a href="GetInvolved.php" class="btn btn-outline-danger">Get Involved</a>

            </div>
        </div>

    </div>

    <?php include '../component/footer.php'; ?>



</body>

</html>