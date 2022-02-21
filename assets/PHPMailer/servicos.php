<?php
date_default_timezone_get('America/Sao_Paulo');
 require_once('src/PHPMailer.php');
 require_once('src/SMTP.php');
 require_once('src/Exception.php');
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;



if($_POST) {
  $nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Nome não Informado';
  $email = !empty($_POST['email']) ? trim($_POST['email']) : 'Email não Informado';
  $telefone = !empty($_POST['telefone']) ? trim($_POST['telefone']) : 'Telefone não Informado';
  $whatsapp = !empty($_POST['whatsapp']) ? trim($_POST['whatsapp']) : 'Whatsapp não Informado';
  $modalidade = !empty($_POST['modalidade']) ? trim($_POST['modalidade']) : 'Modalidade não Informado';
  $servico = !empty($_POST['servico']) ? trim($_POST['servico']) : 'Servico não Informado';
  $assunto = 'ORCAMENTO DE SERVICO PELO SITE';
  $mensagem = !empty($_POST['mensagem']) ? trim($_POST['mensagem']) : 'Mensagem não Informada';
  $data = date('d/m/y H:i:s');

  $mail = new PHPMailer(); 
  $mail->isSMTP();
  $mail->Host = 'smtp.hostinger.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'sitebemcuidar@clinicabemcuidar.com.br';
  $mail->Password = 'Site@bemcuidar0';
  $mail->Port = 587;

  $mail->setFrom('sitebemcuidar@clinicabemcuidar.com.br');
  $mail->addAddress('contatobemcuidar@gmail.com');

  $mail->isHTML(true);
  $mail->Subject = $assunto;
  $mail->Body = "NOME: {$nome} <br>
  EMAIL: {$email} <br>
  Telefone: {$telefone} <br>
  Whatsapp: {$whatsapp} <br>
  Modalidade: {$modalidade} <br>
  Serviço: {$servico} <br>
  Mensagem: {$mensagem} <br>
  Data/Hora: {$data}";


  if($mail->send()) {
    header('Location: https://clinicabemcuidar.com.br/servicos.php');
    exit;
  } else {
    echo 'Email nao enviado';
  }
}

?>