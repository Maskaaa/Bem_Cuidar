<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bem Cuidar</title>
    <link rel="icon" href="assets/img/svg/favicon.svg">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="assets/services/lightslider.css"/>
    <!--Jquery-->
    <script type="text/javascript" src="assets/services/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="assets/services/lightslider.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script> 
    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente text-white">
        <div class="container">

          <a href="index.php" class="navbar-brand">
            <img src="assets/img/svg/white-full-logo.svg" id="logo-cabecalho" alt="">
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
                <li class="nav-item d-none d-md-block">
                  <a href="assets/historia/dist/index.html" class="nav-link">História</a>
                </li>
                <li class="nav-item">
                  <a href="contato.php" class="nav-link">Contato</a>
                </li>
                <li class="nav-item">
                  <a href="trabalheconosco.php" class="nav-link">Trabalhe Conosco</a>
               
            </ul>
          </div>
       </div>
      </nav>
    </header>

    <section class="container" id="banner">
          <!--INICIO DO CONTEINER DO SLIDER-->
      <div class="slider">
        <div class="slides">
          <!--BOTOES-->
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <!--INICIO DAS IMAGENS-->
          <div class="slide first">
            <img class="imagem-desktop" src="assets/img/banner/banner5.png" alt="">
            <img class="imagem-mobile"  src="assets/img/banner/mobile/Prancheta1.png" alt="">

          </div>
          <div class="slide">
            <img class="imagem-desktop" src="assets/img/banner/banner2.png" alt="">
            <img class="imagem-mobile"  src="assets/img/banner/mobile/Prancheta2.png" alt="">
          </div>
          <div class="slide">
            <img class="imagem-desktop" src="assets/img/banner/banner3.png" alt="">
            <img class="imagem-mobile"  src="assets/img/banner/mobile/Prancheta3.png" alt="">
          </div>
          <div class="slide">
            <img class="imagem-desktop" src="assets/img/banner/banner4.png" alt="">
            <img class="imagem-mobile"  src="assets/img/banner/mobile/Prancheta4.png" alt="">
          </div>
          
          <!-- BOTOES DE NAVEGACAO AUTOMATICOS -->
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
        </div>
        <!-- BOTOES DE NAVEGACAO MANUAL -->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>
    </section> 

    <section class="container" id="quem-somos">
      <div class="row">
        <div class="col-12 col-md-6 order-2 order-md-1">
          <div class="row text-justify p-5 texto-qs" data-anime="left">
            <p>A Bem Cuidar é uma Clínica especializada em saúde e bem estar. Fundada em 07 de agosto de 2017</p>
            <p>Contamos com equipe de profissionais qualificados, Enfermeiros, Técnicos de Enfermagem, Cuidadores, Fisioterapeutas, Médicos, Nutricionistas, Fonoaudiólogos, Psicólogos, Terapeutas Ocupacionais e Farmacêuticos.</p>
            <p>Nossa principal tarefa consiste em identificar e planejar medidas de apoio a pacientes e a seus familiares, prestando um tratamento assistencial personalizado, sempre atento às especificidades do caso e de todos os envolvidos.</p>
            <p>Nossos profissionais prestam serviço à domicílio, promovendo uma assistência integral, com inovação, qualidade e segurança. Além disso, nossa rede atende em todos os estados do Brasil. Fale conosco, a Bem Cuidar terá um imenso prazer em lhe atender.</p>
          </div>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2 center-center quemsomos">
          <img src="assets/img/elements/line.png" id="blue-line" class="d-none d-md-block">
          <h1 class="titulo">QUEM SOMOS</h1>
        </div>
      </div>
    </section>

    <section class="container center-center caixa-video"> 
      <video class="img-fluid" poster="assets/img/elements/thumbnail.jpg" controls id="video">
        <source src="video.mp4" controls width="60%" type='video/mp4;' />
    </video>
    </section>

     <!-- GALERIA -->
  <section id="galeria" class="mt-5">
    <div class="cinza">
      <div class="cinza_content">
          <img src="imagens/01.jpg" id="cinza_img">
      </div>
      <span id="bt_close">&times;</span>
   </div>
      <div class="container">
          <div class="row">
              <div class="card_img">
                <span class="testando">Sala de Recepção</span>
                <img src="assets/img/galery/miniaturas/01.jpg" fullsrc="assets/img/galery/01.jpg" class="small_img">
              </div>
              <div class="card_img">
                <span class="testando">Sala de Vacinação</span>
                  <img src="assets/img/galery/miniaturas/02.jpg" fullsrc="assets/img/galery/02.jpg" class="small_img">
              </div>
              <div class="card_img">
                <span class="testando justify-content-end">Sala dos Gestores</span>
                  <img src="assets/img/galery/miniaturas/03.jpg" fullsrc="assets/img/galery/03.jpg" class="small_img">
              </div>
              <div class="card_img">
                <span class="testando justify-content-end">Equipe Bem Cuidar</span>
                  <img src="assets/img/galery/miniaturas/04c.jpg" fullsrc="assets/img/galery/04c.jpg" class="small_img">
              </div>
              <div class="card_img">
                <span class="testando justify-content-end">Sala de Enfermagem</span>
                  <img src="assets/img/galery/miniaturas/11c.jpg" fullsrc="assets/img/galery/11c.jpg" class="small_img">
              </div>
              <div class="card_img">
                <span class="testando justify-content-end">Pilates e Fisioterapia</span>
                  <img src="assets/img/galery/12.jpg" fullsrc="assets/img/galery/12.jpg" class="small_img">
              </div>
              
          </div>
          <div class="row">
                  <div class="card_img">
                    <span class="testando justify-content-end">Aplicação de Curativo</span>
                      <img src="assets/img/galery/miniaturas/07c.jpg" fullsrc="assets/img/galery/07c.jpg" class="small_img">
                  </div>
                  <div class="card_img">
                    <span class="testando justify-content-end">Fisioterapia</span>
                      <img src="assets/img/galery/miniaturas/08.jpg" fullsrc="assets/img/galery/08.jpg" class="small_img">
                  </div>
                  <div class="card_img">
                    <span class="testando justify-content-end">Cuidador Domiciliar</span>
                      <img src="assets/img/galery/miniaturas/09c.jpg" fullsrc="assets/img/galery/09c.jpg" class="small_img">
                  </div>
                  <div class="card_img">
                    <span class="testando justify-content-end">Pilates</span>
                      <img src="assets/img/galery/miniaturas/pilates-dupla.jpeg" fullsrc="assets/img/galery/10c.jpg" class="small_img">
                  </div>
                  <div class="card_img">
                    <span class="testando justify-content-end">Home Care</span>
                      <img src="assets/img/galery/miniaturas/06c.jpg" fullsrc="assets/img/galery/06c.jpg" class="small_img">
                  </div>
                  
                  <div class="card_img">
                    <span class="testando justify-content-end">Fisioterapia Domiciliar</span>
                      <img src="assets/img/galery/miniaturas/pilates-domiicliar.jpg" fullsrc="assets/img/galery/miniaturas/pilates-domiicliar.jpg" class="small_img">
                  </div>
                 
              </div>
      </div>
  </section>
     
    
    <!-- CARTAS SERVICOS  -->
    <section class="container" id="servicos">
      <h1 class="text-center titulo pt-5 mt-5">NOSSOS SERVICOS</h1>
   

      <div class="conteiner">
        <!-- slider  -->
        <ul id="autoWidth" class="cs-hidden">
          <!-- CARTA 1  --><a href="servicos.php#aplicainjeta">
          <li class="item-a">
              <!-- caixa do slider  -->
              <div class="carta">
              <p class="marvel" style="margin-top: 250px;">Aplicação <br> de <br> Injetáveis</p>
              <!-- modelo  -->
              <img src="assets/img/servicos/sem/aplicação de injetaveis.png" class="modelo" alt="">
              <!-- detalhes  -->
              <div class="detalhes">
              <!-- logo  -->
              <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
              <!-- mais detalhes  -->
              <!-- <p></p> -->
              </div>
              </div>
          </li></a>
          <!-- CARTA 2 --><a href="servicos.php#pilates-srvc">
          <li class="item-a">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel center-center">Pilates</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/pilates.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Se enconlhe todo e cresce todo, super apto a te deitar na porrada.</p> -->
                </div>
                </div>
          </li> </a>
          <!-- CARTA 3 --> <a href="servicos.php#massoterapia-srvc">
          <li class="item-a">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Massoterapia</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/massoterapia.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Utiliza pistolas e facas, se regenera e é altamente mortal.</p> -->
                </div>
                </div>
          </li> </a>
          <!-- CARTA 4 --> <a href="servicos.php#pilatescasa-srvc">
          <li class="item-d">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel" style="margin-top: 200px;">Planos de <br> cuidados <br> especiais para <br> acamados <br> e cadeirantes</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/planos de cuidados.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
          <!-- CARTA 5 --> <a href="servicos.php#vacinacao-srvc">
          <li class="item-e">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Vacinação</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/vacina.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
          <!-- CARTA 6 --> <a href="servicos.php#acompanhantehospitalar">
          <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Acompanhante <br> Hospitalar</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/acompanhante hosp.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 7 --> <a href="servicos.php#coloscopia">
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Manutenção <br> de Sonda</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/colonoscopia.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 8 --> <a href="servicos.php#curativo-srvc">
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Tratamento com <br> Curativo Especial</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/curativos.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 9 --> <a href="servicos.php#coordenacao-srvc">
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Coordenação <br> de <br> Profissionais</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/coodernação profi.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 8 --> <a href="servicos.php#avaliacaoenfermagem-srvc">
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Avaliação <br> de <br> Enfermagem</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/avaiação de enferm_.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 9 --> <a href="servicos.php#planoscuidados-srvc">
            <li class="item-g">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">HomeCare</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/homecaree.jpg" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 8 --> <a href="servicos.php#fisio-srvc">
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Fisioterapia</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/fisio.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 9 --> <a href="servicos.php#fisio-srvc">
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Fisioterapia Domicilar</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/fisio domiciliar.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <!-- CARTA 10 --> <a href="servicos.php#massoterapia-srvc">
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Massoterapia Domicilar</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/masso-domiciliar.jpeg" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
            <li class="item-f">
              <!-- caixa do slider  -->
              <div class="carta">
                <p class="marvel">Aplicação de Brincos</p>
                <!-- modelo  -->
                <img src="assets/img/servicos/sem/brinco.png" class="modelo" alt="">
                <!-- detalhes  -->
                <div class="detalhes">
                <!-- logo  -->
                <img src="assets/img/svg/white-full-logo.svg" class="logo" alt="" width="100px" style="height: auto;">
                <!-- mais detalhes  -->
                <!-- <p>Nisi sint exercitation laboris tempor reprehenderit in ullamco sit. Nisi sint exercitation laboris.</p> -->
                </div>
                </div>
          </li> </a>
        </ul>
      </div>
    </section>

   <!-- FALE CONOSCO  -->
    <section class="container p-0">


      <div class="col-12 row m-0" id="formulario-home">
        <img src="assets/img/svg/full-logo.svg" width="100%" class="col-5 d-none d-md-block" alt="">
        <form action="assets/PHPMailer/index.php" method="POST" class="col-12 p-5 p-md-0 col-md-4 offset-0 offset-md-2 row">
          <p id="tituloform" class="azul pt-3 text-center d-none d-md-block" style="font-size: clamp(1em, 1.5em, 1.7em);">Entre em contato e solicite um orçamento!</p>
          <input class="col-12" type="text" name="nome" required placeholder="NOME">
          <input class="col-12" type="text" required name="email" placeholder="EMAIL">
          <input class="col-12" type="text" name="assunto" required placeholder="ASSUNTO">
          <input class="col-12" type="text" name="mensagem" required placeholder="MENSAGEM">
          <input class="col-12 btn btn-info" type="submit" placeholder="ENVIAR" value="ENVIAR" id="IdEnviar">
        </form>
        
      </div>
    </section>

 
    
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
       
        <div class="d-none d-sm-block col-sm-3 col-lg-2 text-center mt-4 rodape-l"> 
          
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