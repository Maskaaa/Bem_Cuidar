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
  $cidade = !empty($_POST['cidade']) ? trim($_POST['cidade']) : 'Cidade não Informada';
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
  $mail->Body = " Um novo curriculo foi cadastrado no site Bem Cuidar. O participante deciciu anexar o próprio currículo em vez de preencher o formulário. <br>
  <h4> Dados Pessoais</h4>
  NOME: {$nome} <br>
  Contato: {$cidade} <br>
  
  <h3>DADOS DO SITE</h3>
  Data/Hora: {$data}";

  if($mail->send()) {
  header('Location: https://clinicabemcuidar.com.br/cadastrado.php');
  } else {
    echo 'Email nao enviado';
  }
}

?>