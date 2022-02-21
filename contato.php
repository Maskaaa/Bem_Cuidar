<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bem Cuidar</title>
    <link rel="icon" href="assets/img/svg/favicon.svg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css"/>
    <!--Jquery-->
    <script type="text/javascript" src="assets/services/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="assets/services/lightslider.js"></script>
    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5s     hiv.min.js"></script>
    <![endif]-->
    <style>
      #contato {
        height: 60%;
        margin-top: 140px;
      }
      form input {
        height: 50px;
        margin: 10px 0px;
        font-size: clamp(6pt, 10pt, 12pt);
        color: black;
      }
      #mensagem{
        height: 12vw !important;
      }
      .imagemcontato {
        background: url(assets/img/banner/imagemdocontato.jpg); 
        background-size: cover;
      }
      .fotofone {
        margin-top: 100px;
        margin-bottom: 50px;
      }
      input::placeholder {
        color: #505050;
      }
      @media (max-width: 375px) {
        .description {
          font-size: 0.75em;
        }
      }
        @media (max-width: 320px) {
        .description {
          font-size: 0.70em !important;
          border: 1px solid green;
        }
      }
    </style>
  </head>
  <body>

 
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente text-white">
        <div class="container">

          <a href="index.php" class="navbar-brand">
            <img src="assets/img/svg/white-full-logo.svg" id="logo-cabecalho" width="30" alt="">
          </a>
          
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                  <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="servicos.php" class="nav-link">Serviços</a>
                </li>
                <li class="nav-item">
                  <a href="assets/historia/dist/index.html" class="nav-link">História</a>
                </li>
                <li class="nav-item">
                  <a href="contato.php" class="nav-link">Contato</a>
                </li>
                <li class="nav-item">
                  <a href="trabalheconosco.php" class="nav-link">Trabalhe Conosco</a>
                </li>
                <li class="nav-item">
                  <a  style="font-size: 1.4em; color: white; margin-left: 15px;" target="_blank" href="https://www.instagram.com/clinicabemcuidar/"><i class="fab fa-instagram pt-2"></i></a>
                </li>
                <li class="nav-item">
                  <a  style="font-size: 1.4em; color: white; margin-left: 15px;" target="_blank" href="https://www.facebook.com/bemcuidarqualivita"><i class="fab fa-facebook pt-2"></i></a>
                </li>
            </ul>
          </div>
       </div>
      </nav>
    </header>

    <section class="container d-none d-sm-block" id="contato"> 
      <div class="row">
        <div class="col-4 imagemcontato">
      </div>
      <div class="col-8">
         <h2 class="azul">FALE CONOSCO</h2>
          <form action="assets/PHPMailer/index.php" method="POST" class="col-12 justify-content-between row">
            <input class="col-3" type="text" name="nome" required placeholder="NOME">
            <input class="col-4" type="email" required name="email" placeholder="EMAIL">
            <input class="col-4" type="text" name="assunto" required placeholder="ASSUNTO">
            <input class="col-12" type="text" id="mensagem" name="mensagem" required placeholder="MENSAGEM">
            <input class="col-12 btn btn-info" type="submit" placeholder="ENVIAR" value="ENVIAR" id="IdEnviar">
          </form>
          </div>
        </div>
      </div>
    </section>

    <section class="container d-block d-sm-none">
      <div>
      <img class="img-fluid fotofone" src="assets/img/banner/imagemdocontato.jpg"  alt="">
      </div>
      <div class="formulario">
        <h2 class="center-center text-success">FALE CONOSCO</h2>
      <form action="assets/PHPMailer/index.php" method="POST">
            <input style="width: 100%;" type="text" name="nome" required placeholder="NOME">
            <input style="width: 100%;" type="text" required name="email" placeholder="EMAIL">
            <input style="width: 100%;" type="text" name="assunto" required placeholder="ASSUNTO">
            <input style="width: 100%;" type="text" id="mensagem" name="mensagem" required placeholder="MENSAGEM">
            <input class="col-12 btn btn-info" type="submit" placeholder="ENVIAR" value="ENVIAR" id="IdEnviar">
          </form>
      </div>
    </section>

    <section class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2071.5464997476697!2d-51.5194538345395!3d-29.167263841208808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951c3d0c9944a585%3A0xe6a64d167463bf43!2sBem%20Cuidar%20Servi%C3%A7os%20em%20Sa%C3%BAde!5e0!3m2!1spt-BR!2sbr!4v1627475660276!5m2!1spt-BR!2sbr" width="100%" constrols="false" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>


    <!-- <section class="container">
      <div class="row m-4 p-4">
        <div class="col-4 p-4">
          <p>Bem Cuidar Serviços de SaúdeRua Barão do Rio Branco, n° 325 sala 601 Centro de Bento Gonçalves - RS</p>
        </div>
        <div class="col-4 p-4">
          <p>Telefone: (51) 99999-9999 <br>
          contato@bemcuidarqualitiva.com.br <br>
          (atendimento das 08h00 às 17h00)</p>
        </div>
        <div class="col-4 center-center">
          <a class="azul" href="trabalheconosco.html"> Trabalhe Conosco </a>
        </div>
      </div>
    </section> -->


    <section id="featured-services" class="featured-services ml-4 mt-4 mb-5">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
              <h4 class="title"><a href=""></a></h4>
              <p class="description">Bem Cuidar Serviços de Saúde <br> Rua Barão do Rio Branco, n° 325 Sl.601 Centro de Bento Gonçalves - RS</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-phone"></i></div>
              <h4 class="title"><a href=""></a></h4>
              <p class="description">Telefone: (54) 3075-0057
                contatobemcuidar@gmail.com <br>
                08:00 às 12:00 e 13:00 às 17:47 <br> <a href="https://api.whatsapp.com/send?phone=5554999703045&text=Ol%C3%A1%2C%20vim%20pelo%20site%20da%20Bem%20Cuidar.">Plantão 24h (54) 99970-3045</a></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-briefcase"></i></div>
              <h4 class="title"><a href=""></a></h4>
              <p class="description pt-3 pr-5 pr-sm-0"><a class="azul" href="trabalheconosco.html">Trabalhe com a Bem Cuidar</a></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->
    
    <footer class="mt-5">
      <div id="barra-rodape"></div>
      <div class="row m-0">
        <div class="col-12 col-lg-3 text-center text-lg-right">
           <img src="assets/img/svg/full-logo.svg" class="mt-5 mb-2 pr-5 img-fluid" width="420px" alt="">
        </div>
        <div class="d-none d-sm-block col-sm-3 col-lg-2 text-left mt-4 rodape-l"> 
          <span class="azul"> SERVIÇOS</span> <br>
          <p>
          <a href="http://clinicabemcuidar.com.br/servicos.php#aplicainjeta"> Aplicação de injetáveis</a> <br>
          <a href="http://clinicabemcuidar.com.br/servicos.php#planoscuidados-srvc"> Planos de cuidados </a><br>
          <a href="http://clinicabemcuidar.com.br/servicos.php#pilates-srvc"> Pilates</a> <br>
          <a href="http://clinicabemcuidar.com.br/servicos.php#massoterapia-srvc"> Massoterapia </a><br>
          <a href="http://clinicabemcuidar.com.br/servicos.php#vacinacao-srvc"> Planos de Vacinação</a> <br>
          </p>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-lg-2 text-left mt-4 rodape-l"> 
         <span class="azul"> MENU</span> <br>
          <a href="http://clinicabemcuidar.com.br/">Página Inicial <br>
          <a href="http://clinicabemcuidar.com.br/servicos.php">Serviços</a> <br>
          <a href="http://clinicabemcuidar.com.br/contato.php">Contato</a><br>
          <a href="http://clinicabemcuidar.com.br/trabalheconosco.php">Trabalhe Conosco</a>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-lg-2 text-left mt-4">
          <span class="azul">ENDEREÇO</span> <br>
          <p>Rua Barão do Rio Branco, 
            n° 325 sala 601 Centro de Bento Gonçalves - RS</p>
        </div>
        <div class="d-none d-sm-block col-sm-3 col-lg-2 text-center mt-4 rodape-l"> 
          <span class="azul"> REDES </span><br>
           <a class="pr-1" target="_blank" href="https://api.whatsapp.com/send?phone=5554999624471&text=Ol%C3%A1%2C%20vim%20pelo%20site%20da%20Bem%20Cuidar."> <img src="assets/img/svg/whatsapp.png" style="padding-bottom: 30px;" width="45px"></a>
           <a target="_blank" href="https://www.instagram.com/clinicabemcuidar/"><i class="fab fa-instagram fa-3x"></i></a>
           <a target="_blank" href="https://www.facebook.com/bemcuidarqualivita"><img src="assets/img/svg/facebook.png" style="padding-bottom: 30px;" width="40px" alt=""></a>
        </div>
      </div>
        <p class="text-center" style="display: block; background-color: #6CF152;">Bem Cuidar &copy; 2021. Todos os direitos reservados.</p>
    </footer> 
    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/galeria.js"></script>
  </body>
</html>