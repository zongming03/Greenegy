<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include '../component/header.php'; ?>

    <div class="container py-4">
        <h2 class="pb-2 border-bottom">Action To Do</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets//images/plastic.jpg" class="card-img-top" alt="plastic">
                    <div class="card-body">
                        <h5 class="card-title">Reduce Single-Use Plastic</h5>
                        <p class="card-text">Make a difference by using reusable bags, bottles, and containers instead of single-use plastic items.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/recycle.jpg" class="card-img-top" alt="recycle">
                    <div class="card-body">
                        <h5 class="card-title">Recycle</h5>
                        <p class="card-text">Recycle paper, glass, plastic, metal, and old electronics.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/compost.jpg" class="card-img-top" alt="compost">
                    <div class="card-body">
                        <h5 class="card-title">Compost</h5>
                        <p class="card-text">Composting food scraps can reduce climate impact while also recycling nutrients.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/reuse.jpg" class="card-img-top" alt="reusable">
                    <div class="card-body">
                        <h5 class="card-title">Choose Reusable Products</h5>
                        <p class="card-text">Use an eco-bag for shopping and a reusable water bottle or a cup to reduce your plastic waste.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/ecofirendly.jpg" class="card-img-top" alt="eco">
                    <div class="card-body">
                        <h5 class="card-title">Buy Eco-friendly Products</h5>
                        <p class="card-text">Read the packaging to see if products are produced in an eco-friendly way.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/publicTransport.jpg" class="card-img-top" alt="public transport">
                    <div class="card-body">
                        <h5 class="card-title">Bike, Walk, or Take Public Transport</h5>
                        <p class="card-text">Save the car trips for when you’ve got a big group.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/meat.jpg" class="card-img-top" alt="meat">
                    <div class="card-body">
                        <h5 class="card-title">Consume Less Meat</h5>
                        <p class="card-text">
                            Consume less meat and become vegetarian for one day a week. The meat production industry has a huge impact on the environment.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/paper.jpg" class="card-img-top" alt="paper">
                    <div class="card-body">
                        <h5 class="card-title">Reduce your use of paper</h5>
                        <p class="card-text">Avoid printing and substitute it with electronic devices or carriers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../component/footer.php'; ?>
</body>

</html>