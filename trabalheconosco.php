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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5s     hiv.min.js"></script>
    <![endif]-->
    <style>
      #workform {
        margin-top: 150px;
      }
      #pdf, #pdf2 {
        display: none;
      }
      ::-webkit-input-placeholder  { color:#202020; }
      input:-moz-placeholder { color:#202020; }
      textarea:-moz-placeholder { color:#202020; }
      #workform input {
        padding: 5px;
        margin: 3px;
      }
      .nivel {
        margin-right: 120px;
        margin-left: 5px;
      }
      h3 {
        padding: 5px;
      }
      #BtnEnviar {
        margin: 60px 0px !important;
      }
      #formacao2, #formacao3 {
        display: none;
      }
      #xp2, #xp3, #xp4 {
        display: none;
      }
      input {
        border: 1px solid rgb(0, 59, 187);
      }
      #IdBairro {
        width: 27.5%;
      }
      #IdCidade {
        width: 29.8%;
      }
      #IdTelefone {
        width: 33.2%;
      }
      .curso, .instituto {
        width: 46%;
      }
      .disp {
        margin-right: 20px;
        font-size: 1.2em;
        }
      .tituloh1 {
        color: #0A3958;
      }
      .descricao {
        color: #0A3958;
        font-size: 0.7em;
      }
      h4 {
        text-align: start;
        margin-left: 38px;
      }
      .observacao {
        width: 93%;
      }
      .restricao {
        width: 65.8%;
      }
      .adicionafoto {
        position: absolute;
        right: 25%;
      }
      
    @media (max-width: 432px) {
      ::-webkit-input-placeholder  { color:#202020; }
      input:-moz-placeholder { color:#202020; }
      textarea:-moz-placeholder { color:#202020; }
      #IdEnviar{
       font-size: 1em !important;
      }
      #m_formacao2, #m_formacao3 {
        display: none;
      }
      #m_xp2, #m_xp3, #m_xp4 {
        display: none;
      }
      h4 {
        text-align: center;
        margin: 0px;
      }
      #IdBairro {
        width: 27.5%;
      }
      #IdCidade {
        width: 29.8%;
      }
      #IdTelefone {
        width: 33.2%;
      }
    }
    @media (max-width: 320px) {
      #IdBairro {
        width: 26.5%;
      }
      #IdCidade {
        width: 29.8%;
      }
      #IdTelefone {
        width: 33.2%;
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
                <a href="#" class="nav-link">Trabalhe Conosco</a>
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

    <section class="container text-center d-none d-md-block" id="workform">
      <h1 class="tituloh1">Trabalhe Conosco</h1>
      <p class="descricao p-3" style="font-size: 18px;">Venha fazer a diferença fazendo parte do nosso time. Preencha o formulário abaixo com os dados solicitados e se preferir faça upload do seu currículo com foto em formato PDF clicando <a onclick="mandaCurriculo()" href="">aqui</a>.</p>
      
        <form  method="POST" action="assets/PHPMailer/curriculo2.php" enctype="multipart/form-data" class="row center-center" id="pdf">
          <h4>ENVIAR CURRICULO</h4>
            <input class="col-12" type="text" name="nome" placeholder="Nome" id="">
            <input class="col-12" type="text" name="cidade" placeholder="Contato (email, whatsapp)" id="">
            <input class="adicionafoto" type="file" name="attachment" id="attachment">
            <input type="submit" value="ENVIAR CURRICULO">
          </form>
       <div id="form-desktop">
        <form method="POST" action="assets/PHPMailer/curriculo.php" enctype="multipart/form-data">

          <h4>Dados Pessoais</h4>
          <input class="col-7" type="text" name="nome" placeholder="Nome" id="">
          <input class="col-4" type="text" name="nascimento" placeholder="Data Nasc." id="">
          <input class="col-7" type="text" name="endereco" placeholder="Endereço" id="">
          <input class="col-4" type="text" name="cep" placeholder="Cep" id="">
          <input type="text" name="bairro" placeholder="Bairro" id="IdBairro">
          <input type="text" name="cidade" placeholder="Cidade" id="IdCidade">
          <input type="text" name="telefone" placeholder="Telefone" id="IdTelefone">

          <h4 class="pt-5 pb-2">Formação</h4>
          <div id="formacao1">
          <input type="radio" value="Superior" placeholder="superior" name="nivel" id="teste"> <span class="nivel"> Superior</span>
          <input type="radio" value="Pos-graduacao" name="nivel" id="teste"><span class="nivel"> Pós-Graduação</span>
          <input type="radio" value="Ensino Tecnico" name="nivel" id=""><span class="nivel" >Ensino Técnico</span>
          <input type="radio" value="Outro" name="nivel" id=""><span class="nivel"> Outro</span>
          <input class="curso" name="curso" type="text" name="" placeholder="Curso" id="">
          <input class="instituto" type="text" name="instituicao" placeholder="Instituição" id="">
          <input class="col-2 text-center btn btn-info" type="text" onclick="carregaFormacao()" id="addF1" value="Adicionar Instituição">
        </div>
        <div id="formacao2">
        <input type="radio" value="Superior" placeholder="superior" name="nivel2" id="teste"> <span class="nivel"> Superior</span>
          <input type="radio" value="Pos-graduacao" name="nivel2" id="teste"><span class="nivel"> Pós-Graduação</span>
          <input type="radio" value="Ensino Tecnico" name="nivel2" id=""><span class="nivel"> Ensino Técnico</span>
          <input type="radio" value="Outro" name="nivel2" id=""><span class="nivel"> Outro</span>
          
          <input class="curso" type="text" name="curso2" placeholder="Curso" id="">
          <input class="instituto" type="text" name="instituicao2" placeholder="Instituição" id="">
          <input class="col-2 text-center btn btn-info" type="text" onclick="carregaFormacao2()" id="addF2" value="Adicionar Instituição">
        </div>
        <div id="formacao3">
          <input type="radio" value="Superior" placeholder="superior" name="nivel3" id="teste"> <span class="nivel"> Superior</span>
          <input type="radio" value="Pos-graduacao" name="nivel3" id="teste"><span class="nivel"> Pós-Graduação</span>
          <input type="radio" value="Ensino Tecnico" name="nivel3" id=""><span class="nivel"> Ensino Técnico</span>
          <input type="radio" value="Outro" name="nivel3" id=""><span class="nivel"> Outro</span>
          
          <input class="curso" type="text" name="curso3" placeholder="Curso" id="">
          <input class="instituto" type="text" name="instituicao3" placeholder="Instituição" id="">
          <input class="col-2 text-center btn btn-info" type="text" onclick="carregaFormacao3()" id="addF3" value="Adicionar Instituição">
        </div>
          

          <h4 class="pt-5 pb-2">Experiência Profissional</h4>
          <div id="xp1">
          <input class="curso" name="empresa" type="text" placeholder="Empresa">
          <input class="curso" name="funcao" type="text" placeholder="Função">
          <input class="curso" name="periodo" type="text" placeholder="Período">
          <input class="curso" name="saida" type="text" placeholder="Motivo da Saída">
          <input class="col-2 text-center btn btn-info"  onclick="carregaxp()"type="text" id="addx1" value="Adicionar Experiência">
          </div>

          <div id="xp2">
            <h4>Experiência 2</h4>
          <input class="curso" name="empresa2" type="text" placeholder="Empresa">
          <input class="curso" name="funcao2"  type="text" placeholder="Função">
          <input class="curso" name="periodo2" type="text" placeholder="Período">
          <input class="curso" name="saida2"   type="text" placeholder="Motivo da Saída">
          <input class="col-2 text-center btn btn-info" onclick="carregaxp2()" type="text" id="addx2" value="Adicionar Experiência">
          </div>

          <div id="xp3">
            <h4>Experiência 3</h4>
            <input class="curso" name="empresa3" type="text" placeholder="Empresa">
            <input class="curso" name="funcao3"  type="text" placeholder="Função">
            <input class="curso" name="periodo3" type="text" placeholder="Período">
            <input class="curso" name="saida3"   type="text" placeholder="Motivo da Saída">
            <input class="col-2 text-center btn btn-info" onclick="carregaxp3()" type="text" id="addx3" value="Adicionar Experiência">
          </div>

          <div id="xp4">
            <h4>Experiência 4</h4>
            <input class="curso" name="empresa4" type="text" placeholder="Empresa">
            <input class="curso" name="funcao4"  type="text" placeholder="Função">
            <input class="curso" name="periodo4" type="text" placeholder="Período">
            <input class="curso" name="saida4"   type="text" placeholder="Motivo da Saída">
          </div>

          <h4 class="pt-5 pb-2 disponivel">Disponibilidade</h4>
          <input type="checkbox" value="SIM" name="diurno"> <span class="disp"> Diurno</span>
          <input type="checkbox" value="SIM" name="noturno"><span class="disp"> Noturno</span>
          <input type="checkbox" value="SIM" name="finaisdesemana"><span class="disp">Finais de Semana</span> <br>
          <input class="observacao" name="observacao" type="text" name="" placeholder="Observações" id=""> <br>

          <span class="nivel disp">Restrições: </span>
          <input type="radio" value="Sim:" placeholder="restricao" name="restricao" id=""> <span class="nivel disp"> Sim</span>
          <input type="radio" value="Não" name="restricao" id=""><span class="nivel disp"> Não</span>

          <input class="restricao" type="text" name="restrit" placeholder="Restrição" id=""> <br>
            <div class="row"><span class="col-1"></span>
             <a class="ml-auto mt-5 mr-3" id="linkfoto" style="font-size: 20px;" onclick="mandaFoto()" href=""> <i style="font-size: 12px; color: red; transform: translateY(-6px);" class="fas fa-asterisk"></i>Anexar foto</a>
             <span class="col-1"></span>
            </div>
          </div>
          <input class="adicionafoto" style="display: none;" type="file" name="attachment" id="attachment" accept="image/png, image/jpeg, image/jpg, image/raw">
          <input class="btn btn-success col-10 mt-5" onclick="mostrar()" id="BtnEnviar" type="submit" value="ENVIAR">
        </form>
    </section>
 <!-- FORMULARIO MOBILE -->
    <section class="container text-center d-block d-md-none" id="workform">
      <h1 class="tituloh1">Trabalhe Conosco</h1>
      <p class="descricao p-3" style="font-size: 18px;">Venha fazer a diferença fazendo parte do nosso time. Preencha o formulário abaixo com os dados solicitados e se preferir faça upload do seu currículo com foto em formato PDF clicando <a onclick="mandaCurriculo2()" href="">aqui</a>.</p>
      <form  method="POST" action="assets/PHPMailer/curriculo2.php" enctype="multipart/form-data" class="row center-center m-1" id="pdf2">
          <h4>ENVIAR CURRICULO</h4>
            <input class="col-12" type="text" name="nome" placeholder="Nome" id="">
            <input class="col-12" type="text" name="cidade" placeholder="Contato (email, whatsapp)" id="">
            <input class="col-12" type="file" name="attachment" id="attachment"> <br> <br> <br>
            <input type="submit" value="ENVIAR CURRICULO">
          </form>

      <div id="form-telefone"> <!-- INICIO DIV DO FORMULARIO -->
        <form  method="POST" action="assets/PHPMailer/curriculo.php">

          <h4 style="">Dados Pessoais</h4>
          <input class="col-12" type="text" name="nome" placeholder="Nome" id="">
          <input class="col-12" type="text" name="nascimento" placeholder="Data Nasc." id="">
          <input class="col-12" type="text" name="endereco" placeholder="Endereço" id="">
          <input class="col-12" type="text" name="cep" placeholder="Cep" id="">
          <input type="text" name="bairro" placeholder="Bairro" id="IdBairro">
          <input type="text" name="cidade" placeholder="Cidade" id="IdCidade">
          <input type="text" name="telefone" placeholder="Telefone" id="IdTelefone">

          <h4 class="pt-5 pb-2">Formação</h4>
          <div class="text-left" id="m_formacao1"> 
          <input type="radio" value="Superior" name="nivel"> <span> Superior</span> <br>
          <input type="radio" value="Pos-graduacao"  name="nivel"><span> Pós-Graduação</span> <br>
          <input type="radio" value="Ensino Tecnico" name="nivel"><span >Ensino Técnico</span> <br>
          <input type="radio" value="Outro"          name="nivel"><span> Outro</span> <br>
          <input class="col-12" name="curso" type="text" name="" placeholder="Curso" id="">
          <input class="col-12" type="text" name="instituicao" placeholder="Instituição" id="">
            <input class="col-12 text-center btn btn-info" type="button" onclick="m_carregaFormacao()" id="m_addF1" value="Adicionar Formação">
          </div>

          <div id="m_formacao2" class="text-left mt-5">
            <input type="radio" name="nivel2" value="Superior"> <span> Superior</span> <br>
            <input type="radio" name="nivel2" value="Pos-graduacao"><span> Pós-Graduação</span> <br>
            <input type="radio" name="nivel2" value="Ensino-Tecnico" id=""><span> Ensino Técnico</span> <br>
            <input type="radio" name="nivel2" value="Outro" id=""><span> Outro</span> <br>
            <input class="col-12" type="text" name="curso2" placeholder="Curso" id="">
            <input class="col-12" type="text" name="instituicao2" placeholder="Instituição" id="">
            <input class="col-12 text-center btn btn-info" type="button" onclick="m_carregaFormacao2()" id="m_addF2" value="Adicionar Formação">
          </div>

          <div id="m_formacao3" class="text-left mt-5">
            <input type="radio" name="nivel3" value="Superior"> <span> Superior</span> <br>
            <input type="radio" name="nivel3" value="Pos-Graduacao"><span> Pós-Graduação</span> <br>
            <input type="radio" name="nivel3" value="Ensino Tecnico" id=""><span> Ensino Técnico</span> <br>
            <input type="radio" name="nivel3" value="Outro " id=""><span> Outro</span> <br>
            <input class="col-12" type="text" name="curso3" placeholder="Curso" id="">
            <input class="col-12" type="text" name="instituicao3" placeholder="Instituição" id="">
          </div>
          

          <h4 class="pt-5 pb-2">Experiência Profissional</h4>
          <div id="m_xp1" class="mt-3">
            <input class="curso" type="text" name="empresa" placeholder="Empresa">
            <input class="curso" type="text" name="funcao"  placeholder="Função">
            <input class="curso" type="text" name="periodo" placeholder="Período">
            <input class="curso" type="text" name="saida"   placeholder="Motivo da Saída">
            <input class="col-12 text-center btn btn-info"  onclick="m_carregaxp()"type="text" id="m_addx1" value="Adicionar Experiência">
          </div>

          <div id="m_xp2" class="mt-5">
            <h4>Experiência 2</h4>
            <input class="curso" name="empresa2" type="text" placeholder="Empresa">
            <input class="curso" name="funcao2"  type="text" placeholder="Função">
            <input class="curso" name="periodo2" type="text" placeholder="Período">
            <input class="curso" name="saida2"   type="text" placeholder="Motivo da Saída">
            <input class="col-12 text-center btn btn-info" onclick="m_carregaxp2()" type="text" id="m_addx2" value="Adicionar Experiência">
          </div>

          <div id="m_xp3" class="mt-5">
            <h4>Experiência 3</h4>
            <input class="curso" type="text" name="empresa3" placeholder="Empresa">
            <input class="curso" type="text" name="funcao3"  placeholder="Função">
            <input class="curso" type="text" name="periodo3" placeholder="Período">
            <input class="curso" type="text" name="saida3"   placeholder="Motivo da Saída">
            <input class="col-12 text-center btn btn-info" onclick="m_carregaxp3()" type="text" id="m_addx3" value="Adicionar Experiência">
          </div>

          <div id="m_xp4" class="mt-5">
            <h4>Experiência 4</h4>
            <input class="curso" name="empresa4" type="text" placeholder="Empresa">
            <input class="curso" name="funcao4"  type="text" placeholder="Função">
            <input class="curso" name="periodo4" type="text" placeholder="Período">
            <input class="curso" name="saida4"   type="text" placeholder="Motivo da Saída">
          </div>

          <h4 class="pt-5 pb-2 disponivel">Disponibilidade</h4>
          <div class="text-left">
            <input type="checkbox" value="SIM" name="diurno"> <span class="disp"> Diurno</span> <br>
            <input type="checkbox" value="SIM" name="noturno"  ><span class="disp"> Noturno</span> <br>
            <input type="checkbox" value="SIM" name="finaisdesemana" ><span class="disp">Finais de Semana</span> <br>
            <input class="observacao" name="observacao" type="text" placeholder="Observações" id=""> <br>
          </div>
          
          <h4 class="nivel disp mt-5">Restrições: </h4>

          <input type="radio" value="SIM" name="restricao"> <span class="nivel disp"> Sim</span>
          <input type="radio" value="Não" name="restricao"><span class="nivel disp"> Não</span>
          <input class="col-12" type="text" name="restrit" placeholder="Descreva suas restrições"> <br>

            <div class="row"><span class="col-1"></span>
             <!-- <input class="col-3 ml-2 mt-5" type="button" value="Enviar Curriculo">  -->
             <a class="ml-auto mt-5 mr-3" id="linkfoto" style="font-size: 20px;" onclick="mandaFoto()" href=""> <i style="font-size: 12px; color: red; transform: translateY(-6px);" class="fas fa-asterisk"></i>Anexar foto</a>
             <span class="col-1"></span>
            </div>
           
          </div> <!-- FIM DIV DO FORMULARIO -->

          <input class="adicionafoto" style="display: none;" type="file" name="foto" id="IdFoto" accept="image/png, image/jpeg, image/jpg, image/raw">
          <input class="btn btn-success col-10 mt-5" onclick="mostrar()" id="BtnEnviar2" type="submit" value="ENVIAR">
        </form>
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
    <script>
      function mandaFoto() {
        event.preventDefault();
        document.getElementById('attachment').click();
        document.getElementById('attachment').style.display = "block";
      }

      function mandaCurriculo() {
        event.preventDefault();
        document.getElementById('form-desktop').style.display = "none";
        document.getElementById('BtnEnviar').style.display = "none";
        document.getElementById('pdf').style.display = "block";
      }
      function mandaCurriculo2() {
        event.preventDefault();
        document.getElementById('form-telefone').style.display = "none";
        document.getElementById('BtnEnviar2').style.display = "none";
        document.getElementById('pdf2').style.display = "block";
      }
      //Carregar mais campos de formação Destkop
      function carregaFormacao() {
        document.getElementById("formacao2").style.display = "block";
        document.getElementById("addF1").style.display = "none";
      }
      function carregaFormacao2() {
        document.getElementById("formacao3").style.display = "block";
        document.getElementById("addF2").style.display = "none";
        document.getElementById("addF3").style.display = "none";
      }
      //Carregar mais campos de formação Mobile
      function m_carregaFormacao() {
        document.getElementById("m_formacao2").style.display = "block";
        document.getElementById("m_addF1").style.display = "none";
      }
      function m_carregaFormacao2() {
        document.getElementById("m_formacao3").style.display = "block";
        document.getElementById("m_addF2").style.display = "none";
        document.getElementById("m_addF3").style.display = "none";
      }
      //Carregar mais campos de experiência Desktop
      function carregaxp() {
        document.getElementById("xp2").style.display = "block";
        document.getElementById("addx1").style.display = "none";
      }
      function carregaxp2() {
        document.getElementById("xp3").style.display = "block";
        document.getElementById("addx2").style.display = "none";
      }
      function carregaxp3() {
        document.getElementById("xp4").style.display = "block";
        document.getElementById("addx3").style.display = "none";
      }
      //Carregar mais campos de experiência Mobile
      function m_carregaxp() {
        document.getElementById("m_xp2").style.display = "block";
        document.getElementById("m_addx1").style.display = "none";
      }
      function m_carregaxp2() {
        document.getElementById("m_xp3").style.display = "block";
        document.getElementById("m_addx2").style.display = "none";
      }
      function m_carregaxp3() {
        document.getElementById("m_xp4").style.display = "block";
        document.getElementById("m_addx3").style.display = "none";
      }

      function testa(elem)
{
  var elems = document.getElementsByClassName("cb");
  var currentState = elem.checked;
  var elemsLength = elems.length;

  for(i=0; i<elemsLength; i++)
  {
    if(elems[i].type === "checkbox")
    {
       elems[i].checked = false;   
    }
  }

  elem.checked = currentState;
}

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>