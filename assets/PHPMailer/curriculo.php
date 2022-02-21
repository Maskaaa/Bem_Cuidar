<?php
date_default_timezone_get('America/Sao_Paulo');
 require_once('src/PHPMailer.php');
 require_once('src/SMTP.php');
 require_once('src/Exception.php');
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;



if($_POST) {
  //Dados Pessoais
  $nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Nome não Informado';
  $nascimento = !empty($_POST['nascimento']) ? trim($_POST['nascimento']) : 'Nascimento não Informado';
  $endereco = !empty($_POST['endereco']) ? trim($_POST['endereco']) : 'Endereço não Informado';
  $cep = !empty($_POST['cep']) ? trim($_POST['cep']) : 'Cep não Informado';
  $bairro = !empty($_POST['bairro']) ? trim($_POST['bairro']) : 'Bairro não Informado';
  $cidade = !empty($_POST['cidade']) ? trim($_POST['cidade']) : 'Cidade não Informada';
  $telefone = !empty($_POST['telefone']) ? trim($_POST['telefone']) : 'Telefone não Informado';
  $whatsapp = !empty($_POST['telefone']) ? trim($_POST['telefone']) : 'Whatsapp não Informado';
  //Dados de Escolaridade
  $nivel = !empty($_POST['nivel']) ? trim($_POST['nivel']) : 'Nível não Informado';
  $curso = !empty($_POST['curso']) ? trim($_POST['curso']) : 'Curso não Informado';
  $instituicao = !empty($_POST['instituicao']) ? trim($_POST['instituicao']) : 'Instituicao não Informada';

  $nivel2 = !empty($_POST['nivel2']) ? trim($_POST['nivel2']) : ' ';
  $curso2 = !empty($_POST['curso2']) ? trim($_POST['curso2']) : ' ';
  $instituicao2 = !empty($_POST['instituicao2']) ? trim($_POST['instituicao2']) : ' ';

  $nivel3 = !empty($_POST['nivel3']) ? trim($_POST['nivel3']) : ' ';
  $curso3 = !empty($_POST['curso3']) ? trim($_POST['curso3']) : ' ';
  $instituicao3 = !empty($_POST['instituicao3']) ? trim($_POST['instituicao3']) : ' ';

  //Dados Experiência Profissional
  $empresa = !empty($_POST['empresa']) ? trim($_POST['empresa']) : 'Empresa não Informada';
  $funcao = !empty($_POST['funcao']) ? trim($_POST['funcao']) : 'Funcao não Informada';
  $periodo = !empty($_POST['periodo']) ? trim($_POST['periodo']) : 'Periodo não Informado';
  $saida = !empty($_POST['saida']) ? trim($_POST['saida']) : 'Motivo da saída não Informado';

  $empresa2 = !empty($_POST['empresa2']) ? trim($_POST['empresa2']) : ' ';
  $funcao2 = !empty($_POST['funcao2']) ? trim($_POST['funcao2']) : ' ';
  $periodo2 = !empty($_POST['periodo2']) ? trim($_POST['periodo2']) : ' ';
  $saida2 = !empty($_POST['saida2']) ? trim($_POST['saida2']) : ' ';

  $empresa3 = !empty($_POST['empresa3']) ? trim($_POST['empresa3']) : ' ';
  $funcao3 = !empty($_POST['funcao3']) ? trim($_POST['funcao3']) : ' ';
  $periodo3 = !empty($_POST['periodo3']) ? trim($_POST['periodo3']) : ' ';
  $saida3 = !empty($_POST['saida3']) ? trim($_POST['saida3']) : ' ';

  $empresa4 = !empty($_POST['empresa4']) ? trim($_POST['empresa4']) : ' ';
  $funcao4 = !empty($_POST['funcao4']) ? trim($_POST['funcao4']) : ' ';
  $periodo4 = !empty($_POST['periodo4']) ? trim($_POST['periodo4']) : ' ';
  $saida4 = !empty($_POST['saida4']) ? trim($_POST['saida4']) : ' ';

  //Dados Disponibilidade
  $diurno = !empty($_POST['diurno']) ? trim($_POST['diurno']) : 'Não ';
  $noturno = !empty($_POST['noturno']) ? trim($_POST['noturno']) : 'Não ';
  $finaisdesemana = !empty($_POST['finaisdesemana']) ? trim($_POST['finaisdesemana']) : 'Não ';
  $observacao = !empty($_POST['observacao']) ? trim($_POST['observacao']) : 'Sem Observações. ';

  $restricao = !empty($_POST['restricao']) ? trim($_POST['restricao']) : ' ';
  $restrit = !empty($_POST['restrit']) ? trim($_POST['restrit']) : ' ';

  $attachment = !empty($_FILES['attachment']) ? ($_FILES['attachment']) : ' ';

  
  //Dados para Email
  $assunto = 'Novo curriculo cadastrado no site Bem Cuidar';
  $data = date('d/m/y H:i:s');

  $mail = new PHPMailer(); 
  $mail->isSMTP();
  $mail->Host = 'smtp.hostinger.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'sitebemcuidar@clinicabemcuidar.com.br';
  $mail->Password = 'Site@bemcuidar0';
  $mail->Port = 587;

  $mail->setFrom('sitebemcuidar@clinicabemcuidar.com.br');
  $mail->addAddress('rh.bemcuidar@gmail.com');
  $mail->AddBcc('ednei.andres@nemesisdigital.com.br');
  $mail->addAttachment($attachment['tmp_name'], $attachment['name']);

  $mail->isHTML(true);
  $mail->Subject = $assunto;
  $mail->Body = "
  <h4> Dados Pessoais</h4>
  NOME: {$nome} <br>
  Nascimento: {$nascimento} <br>
  Cidade: {$cidade} <br>
  Endereço: {$endereco} <br>
  Bairro: {$bairro} <br>
  CEP: {$cep} <br>

  <h4>Contato</h4>
  Telefone: {$telefone} <br>
  Whatsapp: {$whatsapp} <br>

  <h4>Escolaridade</h4>
  Nível: {$nivel} <br>
  Curso: {$curso} <br>
  Instituição: {$instituicao} <br>
  <h4>Escolaridade 2 </h4>
  Nível: {$nivel2} <br>
  Curso: {$curso2} <br>
  Instituição: {$instituicao2} <br>
  <h4>Escolaridade 3 </h4>
  Nível: {$nivel3} <br>
  Curso: {$curso3} <br>
  Instituição: {$instituicao3} <br>

  <h4>Experiência Profissional </h4>
  Trabalhou na empresa: {$empresa} <br>
  Desempenhando a função {$funcao} <br> 
  No período {$periodo}. <br>
  Motivo da Saída: {$saida} <br>

  <h4>Experiência Profissional 2</h4>
  Trabalhou na empresa: {$empresa2} <br>
  Desempenhando a função {$funcao2} <br> 
  No período {$periodo2}. <br>
  Motivo da Saída: {$saida2} <br>

  <h4>Experiência Profissional 3</h4>
  Trabalhou na empresa: {$empresa3} <br>
  Desempenhando a função {$funcao3} <br> 
  No período {$periodo3}. <br>
  Motivo da Saída: {$saida3} <br>

  <h4>Experiência Profissional 4</h4>
  Trabalhou na empresa: {$empresa4} <br>
  Desempenhando a função {$funcao4} <br> 
  No período {$periodo4}. <br>
  Motivo da Saída: {$saida4} <br>

  <h4>DISPONIBILIDADE</h4>
  Diurno: {$diurno} <br>
  Noturno: {$noturno} <br>
  Finais de semana: {$finaisdesemana} <br>
  Observações: {$observacao} <br>

  <h4>Possui restrições ?</h4>
  {$restricao}. <br>
  {$restrit}

  <h3>DADOS DO SITE</h3>
  Data/Hora: {$data}";

  if($mail->send()) {
   header('Location: https://clinicabemcuidar.com.br/cadastrado.php');
  } else {
    echo 'Email nao enviado';
  }
}

?>