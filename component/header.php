<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="../styles/header.css" rel="stylesheet" />

  <title>Header</title>

  <style>
    .marquee-container {
      overflow: hidden;

    }

    .marquee-content {
      animation: marquee-scroll 20s linear infinite;
    }

    @keyframes marquee-scroll {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }

    .nav-link:hover {
      border-bottom: 3px solid greenyellow;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="marquee-container">
      <div class="marquee-content">
        <p>Welcome to Greenegy, Let's work together to combat climate change. Start bite-size climate action!</p>
      </div>
    </div>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="../pages/Home.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="../assets/images/logo.svg" width="80" height="80" class="me-2" alt="Logo">
        <span class="fs-4">Greenegy</span>
      </a>

      <ul class="header-nav nav-pills">
        <li class="nav-item"><a href="../pages/Home.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'Home.php' ? 'active' : ''; ?>">
            Home</a></li>
        <li class="nav-item"><a href="../pages/Action.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'Action.php' ? 'active' : ''; ?>">Action</a></li>
        <li class="nav-item"><a href="../pages/Impact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'Impact.php' ? 'active' : ''; ?>">Impact</a></li>
        <li class="nav-item"><a href="../pages/GetInvolved.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'GetInvolved.php' ? 'active' : ''; ?>">Get Involved</a></li>
        <li class="nav-item"><a href="../pages/AboutUs.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'AboutUs.php' ? 'active' : ''; ?>">About Us</a></li>
      </ul>
    </header>
  </div>
</body>

</html>