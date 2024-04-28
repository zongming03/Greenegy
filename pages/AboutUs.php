<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #carouselTestimonials .carousel-item img {
            height: 200px;
            object-fit: cover;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            height: 100%;
        }

        .card-img-top {
            margin-top: auto;
            margin-bottom: auto;
        }
    </style>
</head>

<body>
    <?php include '../component/header.php'; ?>

    <div class="container py-4">
        <h2 class="pb-2 border-bottom">About Greenegy</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Our Mission</h3>
                <p>Our mission is to empower individuals to take bite-size climate actions in their daily lives. </p>
            </div>
            <div class="col-md-6">
                <h3>Our Vision</h3>
                <p>Our vision is to create a world where bite-size climate actions are ingrained in every individual's lifestyle, leading to a sustainable and thriving planet for future generations.</p>
            </div>
        </div>

        <h2 class="py-4 border-bottom">Our Impact</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.hubspot.com/hubfs/2022_Design_Icon_ThreePortraits-2.svg" class="wf-stats-card-image" alt="Number of Volunteers" height="150" width="150">
                    <div class="card-body">
                        <h5 class="card-title">Number of Volunteers</h5>
                        <p class="card-text">500+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.hubspot.com/hubfs/2023_Contacts_DataBase2.svg" class="card-img-top" alt="Number of Activities Participated" height="150" width="150">
                    <div class="card-body">
                        <h5 class="card-title">Number of Activities Participated</h5>
                        <p class="card-text">1000+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://www.hubspot.com/hubfs/2023_World_Collaboration.svg" class="card-img-top" alt="Global Offices" height="150" width="150">
                    <div class="card-body">
                        <h5 class="card-title">Global Offices</h5>
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="py-4 border-bottom">What Our Volunteers Say</h2>
        <div id="carouselTestimonials" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/person1.jpg" class="d-block w-100" alt="Testimonial 1" style="height: 450px;">
                    <div class="carousel-caption d-none d-md-block">
                        <p>"I love being part of Greenegy's initiatives. It's fulfilling to contribute to a greener future."</p>
                        <p class="testimonial-attribution">- John Doe</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/person2.jpg" class="d-block w-100" alt="Testimonial 2" style="height: 450px;">
                    <div class="carousel-caption d-none d-md-block">
                    <p>"Greenegy's commitment to sustainability is inspiring. I'm proud to be a volunteer."</p>
                    <p class="testimonial-attribution">- Tackie</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/person3.jpg" class="d-block w-100" alt="Testimonial 3" style="height: 450px;">
                <div class="carousel-caption d-none d-md-block">
                    <p>"The impact we make as volunteers at Greenegy is tangible and meaningful. It's a great organization to be a part of."</p>
                    <p class="testimonial-attribution">- Tailor Swift</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="row mt-4">
        <div class="col-md-6" style="margin-top: 5rem;">
            <h3>Contact Information</h3>
            <p><span style="font-weight: bold;">Email:</span> info@greenegy.com</p>
            <p><span style="font-weight: bold;">Contact:</span> 012-3456789</p>
            <p><span style="font-weight: bold;">Location:</span> Persiaran TRX, Tun Razak Exchange, 55188 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur </p>
        </div>
    </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>