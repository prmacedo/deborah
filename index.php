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
  
  <main class="fsz-1">
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

    <div id="treatment" class="container-fluid">
      <p class="text-center font-vidaloka fsz-1">Conheça nossos tratamentos</p>
      <h2  class="text-center font-vidaloka fsz-3">Tecnologia avançada em<br/>tratamentos corporais e faciais</h2>

      <div id="categories" class="mt-5 mx-auto text-center fw-medium pb-4">
        <span class="pb-4 px-3 mx-1 selected" onClick="selectCategory(this)" data-category="body">Para o corpo</span>
        <span class="pb-4 px-3 mx-5" onClick="selectCategory(this)" data-category="face">Para a face</span>
        <span class="pb-4 px-3 mx-1" onClick="selectCategory(this)" data-category="hair">Para o cabelo</span>
      </div>

      <div id="category-content" class="container">
        <div id="body" class="row g-3 justify-content-center mx-auto">          
          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Corpo 1</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>  

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Corpo 2</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Corpo 3</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>
        
          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Corpo 4</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Corpo 5</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Corpo 6</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>          
          </div>
        </div>

        <div id="face" class="row g-3 justify-content-center mx-auto d-none">          
          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Face 1</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>  

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Face 2</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Face 3</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>
        
          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Face 4</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Face 5</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Face 6</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>          
          </div>
        </div>

        <div id="hair" class="row g-3 justify-content-center mx-auto d-none">          
          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Cabelo 1</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>  

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Cabelo 2</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Cabelo 3</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>
        
          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Cabelo 4</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Cabelo 5</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="category-item">
              <div class="category-item-icon">
                <img src="./assets/icon/treatment.svg" alt="Tratamento">
              </div>
              <div class="category-item-content border-50 text-center">
                <h2>Cabelo 6</h2>
                <a href="">
                  Saiba mais 
                  <img src="./assets/icon/arrow.svg" alt="Saiba mais">
                </a>
              </div>
            </div>          
          </div>
        </div>
      </div>
    </div>

    <div id="banner-2">
      <!-- <div class=""> -->
        <div class="row container mx-auto">
          <div class="col-12 col-md-6">
            <p class="font-vidaloka fsz-1">Nossos resultados</p>
            <h2 class="font-vidaloka fsz-3">Atinja as suas metas <br/>estéticas conosco!</h2>
            <p class="mt-3 mb-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            <a class="btn border-25 fsz-1" href="#contact">Entrar em contato</a>
          </div>
        </div>
      <!-- </div> -->
    </div>

    <div id="experts" class="container text-center">
      <p class="font-vidaloka fsz-1 m-0 mb-1">Time</p>
      <h2 class="font-vidaloka fsz-3 mb-5">Nossas especialistas</h2>

      <div id="experts-card-list" class="row justify-content-center">
        <div class="expert-card-item col-12 col-md-6 col-lg-4">
          <div class="expert-card-item-content">
            <img src="./assets/img/especialista-1.jpg" alt="Nome da pessoa">
            <div class="border-50">
              <p class="font-vidaloka fsz-3">Nome da pessoa</p>
              <p class="fsz-1">Especialidade</p>
            </div>
          </div>
        </div>

        <div class="expert-card-item col-12 col-md-6 col-lg-4">
          <div class="expert-card-item-content">
            <img src="./assets/img/especialista-2.jpg" alt="Nome da pessoa">
            <div class="border-50">
              <p class="font-vidaloka fsz-3">Nome da pessoa</p>
              <p class="fsz-1">Especialidade</p>
            </div>
          </div>
        </div>

        <div class="expert-card-item col-12 col-md-6 col-lg-4">
          <div class="expert-card-item-content">
            <img src="./assets/img/especialista-3.jpg" alt="Nome da pessoa">
            <div class="border-50">
              <p class="font-vidaloka fsz-3">Nome da pessoa</p>
              <p class="fsz-1">Especialidade</p>
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