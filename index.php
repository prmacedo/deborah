<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deborah</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Hover.css -->
  <link rel="stylesheet" href="./css/hover-min.css">

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Vidaloka&display=swap" rel="stylesheet">

  <!-- Meu CSS -->
  <link rel="stylesheet" href="./css/global.css">
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <?php require_once './partials/navbar.php' ?>
  
  <main>
    <div id="banner-1"></div>

    <div id="welcome" class="container-fluid">
      <div id="welcome-cards" class="row justify-content-evenly align-items-center container-fluid fsz-2 g-4">
        <div class="col-12 col-sm-6 col-lg-3">
          <div id="welcome-card-1" class="welcome-card border-25 mx-auto">
            <span>Estética<br/>Corporal</span>
            <div class="yellow-filter border-25"></div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
          <div id="welcome-card-2" class="welcome-card border-25 mx-auto">
            <span>Dermatologia<br/>Estética</span>
            <div class="yellow-filter border-25"></div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
          <div id="welcome-card-3" class="welcome-card border-25 mx-auto">
            <span>Tricologia</span>
            <div class="yellow-filter border-25"></div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
          <div id="welcome-card-4" class="welcome-card border-25 mx-auto">
            <span>Nutrição</span>
            <div class="yellow-filter border-25"></div>
          </div>
        </div>        
      </div>

      <div id="about" class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <span class="txt-primary txt-vidaloka fsz-1">Bem-vinda</span>
            <h1 class="txt-primary txt-vidaloka fsz-3">A beleza ideal é aquela que te faz<br/>sorrir.</h1>

            <div class="fsz-1 text-justify mt-4">
              <p class="txt-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

              <p class="txt-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>

          <div class="col-12 col-lg-5 offset-lg-1">
            <div id="about-img">
              <img class="border-25" src="./assets/img/about.jpg" alt="Deborah">
            </div>  
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <?php require_once './partials/footer.php' ?>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="./js/scripts.js"></script>
</body>
</html>