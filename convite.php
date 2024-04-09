<?php
 session_start(); 

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require './PHPMailer/src/Exception.php';
 require './PHPMailer/src/PHPMailer.php';
 require './PHPMailer/src/SMTP.php';

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
   header('Location: login.html');
 }
 $logado = $_SESSION['email'];

 if(isset($_POST['send'])){
   $nome = htmlentities($_POST['nome']);  
   $assunto = htmlentities($_POST['assunto']);
   $mensagem = htmlentities($_POST['mensagem']);
   
   $mail = new PHPMailer(true);
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'ong.universidade@gmail.com';
   $mail->Password = 'azfbdeuzruhykolj';
   $mail->Port = 465;
   $mail->SMTPSecure = 'ssl';
   $mail->isHTML(true);
   $mail->setFrom('mateus.esouza@cogna.com.br');
   $mail->addAddress('mateus.esouza@cogna.com.br');
   $mail->Subject = ("$nome");
   $mail->Body = $mensagem;
   $mail->send();   
 
   header("Location: envio.php");
   
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rizalcss@2.1.0/css/cdn.rizal.css" integrity="sha256-pqCXaySV+OMUcpVQ0FeFtvz9VLMeI08z53Ar2a7QP5o=" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
    <title>ONG+UNIVERSIDADE</title>
<style>
     body {        
        background: linear-gradient(to right, rgb(20, 147, 220), rgb(17,54,71));
        color: white;      
        text-align: center;   
    } 
    .logo{
        font-family: 'Calibri';
        color: black;
        text-decoration: none;
        padding: 5px;              
    }
    .navbar-brand{
         font-family: Arial, Helvetica, sans-serif;
         color: white;        
    } 
    .navbar-brand:hover{
       color: black;
    }
    button:hover{
      background-color: #a78d9e;
    }
    .obs{
      margin-top: 500px;
    }
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
         <h4 class="logo" href="#">ONG+UNIVERSIDADE</h4>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
      </div>
      <div class="d-flex">
        <a href="sair.php" class="navbar-brand"><h6>Sair da Conta</h6></a>
      </div>
    </nav>
  <form class="center_absolute display_grid" action="marcacao.php" method="post">
    <input class="w_25_rem margin_bottom_1_rem" type="text" name="nome" placeholder="Nome da ONG ou Representante" autocomplete="off" required>
    <input class="w_25_rem margin_bottom_1_rem" type="text" name="assunto" placeholder="Nome do convite" autocomplete="off" required>
    <textarea name="mensagem" class="w_25_rem h_10_rem margin_bottom_1_rem" placeholder="Descrição do convite" required></textarea>
    <button type="submit" name="send" class="primary-button background_color_primary font_size_medium color_white border_radius_secondary">
      Enviar 
    </button>
  </form>
  <p class="obs">A mensagem será encaminhada ao coordenador geral do curso</p>
  <p class="obs2">No campo nome ou representante da ong não é permitido o uso de acento</p>
  <script defer src="https://cdn.jsdelivr.net/npm/rizalcss@2.1.0/js/components.min.js" integrity="sha256-3UCSBV90gv8A+IA1iZst64qLbw7u9y2Y6JbfRa21tKw=" crossorigin="anonymous"></script>
</body>
</html>
