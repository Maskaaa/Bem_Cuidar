<?php
date_default_timezone_get('America/Sao_Paulo');
 require_once('src/PHPMailer.php');
 require_once('src/SMTP.php');
 require_once('src/Exception.php');
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;



if($_POST) {
  $nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Nome Informado';
  $email = !empty($_POST['email']) ? trim($_POST['email']) : 'email Informado';
  $assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Asunto Informado';
  $mensagem = !empty($_POST['mensagem']) ? trim($_POST['mensagem']) : 'mensagem Informado';
  $data = date('d/m/y H:i:s');

  $mail = new PHPMailer(true); 
  $mail->isSMTP();
  $mail->Host = 'smtp.hostinger.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'sitebemcuidar@clinicabemcuidar.com.br';
  $mail->Password = 'Site@bemcuidar0';
  $mail->Port = 587;

  $mail->setFrom('sitebemcuidar@clinicabemcuidar.com.br');
  $mail->addAddress('ediedneiwilliam@gmail.com');

  $mail->isHTML(true);
  $mail->Subject = $assunto;
  $mail->Body = "NOME: {$nome} <br>
  EMAIL: {$email} <br>
  Mensagem: {$mensagem} <br>
  Data/Hora: {$data}";


  if($mail->send()) {
    header('Location: https://www.clinicabemcuidar.com.br/');
    exit;
  } else {
    echo 'Email nao enviado';
  }
}

?>