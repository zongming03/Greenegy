<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .jumbotron {
            background-image: url('../assets/images/climate.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: white;
            padding: 50px;
        }

        .home-bg-body-tertiary {
            --bs-bg-opacity: 0.7;
            background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
        }

        .icon-squareH {
            width: 3rem;
            height: 3rem;
            border-radius: 1rem;
        }

        .bg-body-secondary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-secondary-bg-rgb), var(--bs-bg-opacity)) !important;
        }

        .text-body-emphasis {
            --bs-text-opacity: 1;
            color: var(--bs-emphasis-color) !important;
        }

        .fs-4 {
            font-size: calc(1.275rem + .3vw) !important;
        }

        .me-3 {
            margin-right: 1rem !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important;
        }

        .d-inline-flex {
            display: inline-flex !important;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }
    </style>
    <title>Home</title>
</head>

<body>
    <?php include '../component/header.php'; ?>
    <div class="container my-5">

        <div class="jumbotron">
            <div class="p-5 text-center home-bg-body-tertiary rounded-3"> 
                <img src="../assets/images/logo (1).png" width="300" height="300" class="bi mt-4 mb-3" alt="Logo">
                <h1 class="text-body-emphasis">Bite-Size Climate Action</h1>
                <p class="col-lg-8 mx-auto fs-5 text-muted">
                    In recent years, we have witnessed the <span style="color: red;font-weight:700">alarming exacerbation of climate change</span>. Greenegy is committed to equipping you with knowledge about climate change and providing simple, actionable steps that contribute to a more <span style="color:green;font-weight:900">sustainable future</span> for our planet. </p>
                <div class="d-inline-flex gap-2 mb-5">
                    <a class="btn btn-outline-secondary btn-lg px-4 rounded-pill" href="./Action.php">
                        Start to learn now
                    </a>
                </div>
            </div>
        </div>

        <div class="p-5 text-center bg-body-tertiary rounded-3" style="margin-top: 4em;">
            <h1 class="text-body-emphasis">What is Bite-size Climate Action?</h1>
            <p class="col-lg-10 mx-auto fs-5 text-muted">
                Bite-size Climate Action is a concept that emphasizes the power of small, manageable actions in addressing the global challenge of climate change. It recognizes that while the problem may seem overwhelming, meaningful change can begin with individual efforts. Bite-size actions are simple, practical steps that individuals can incorporate into their daily lives to reduce their carbon footprint, conserve resources, and promote sustainability.
            </p>
        </div>

        <div class="container px-4 py-5" id="hanging-icons">
            <h2 class="pb-2 border-bottom">What We Provided?</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-squareH text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                            <path d="M16 4.5a4.5 4.5 0 0 1-1.703 3.526L13 5l2.959-1.11q.04.3.041.61" />
                            <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.5 4.5 0 0 0 11.5 9m-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376M3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Action</h3>
                        <p>Discover actionable steps to combat climate change and reduce your carbon footprint.</p>
                        <a href="./Action.php" class="btn btn-primary">
                            Go to action
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-squareH text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cone-striped" viewBox="0 0 16 16">
                            <path d="m9.97 4.88.953 3.811C10.159 8.878 9.14 9 8 9s-2.158-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12m-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.275 3.9C6.8 3.965 7.382 4 8 4s1.2-.036 1.725-.098m4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Impact</h3>
                        <p>Explore how climate change impact our home.</p>
                        <a href="Impact.php" class="btn btn-primary">
                            Go to impact
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-squareH text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
                            <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016m6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0" />
                            <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="fs-2 text-body-emphasis">Get Involved</h3>
                        <p>Join community initiatives and advocacy efforts to drive change and build a sustainable future.</p>
                        <a href="GetInvolved.php" class="btn btn-primary">
                            Go to get involved
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <!-- Text on the left -->
                <div class="col-lg-6">
                    <div class="p-5">
                        <h1 class="text-body-emphasis">Why we need to combat climate change?</h1>
                        <p class="lead">
                            Climate change poses significant threats to our planet and future generations.
                        </p>
                        <p class="lead">
                            We need to do <span style="font-size:x-large;color:red;font-weight:600">Faster </span>and <span style="font-size:x-large;color:red;font-weight:600">Now</span> to slow down climate change.Let's start doing <span style="font-size:xx-large;color:greenyellow;font-weight:600">Bite Size Climate Action</span>.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <!-- padding -->
                        <img src="../assets/images/tree.jpg" class="img-fluid rounded" alt="TreeImage">
                    </div>
                </div>
            </div>
        </div>




    </div>
    <?php include '../component/footer.php'; ?>
</body>

</html>