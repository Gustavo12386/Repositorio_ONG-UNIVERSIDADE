<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Pagina_inicial</title>
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
       .link{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            padding: 10px;
    }
        .box{
        padding: 30px;  
        background-color: rgba(0, 0, 0, 0.6);  
        border-radius: 15px; 
        width: 70em;       
        display: inline;
    }
        .link:hover{
            background-color: dodgerblue;
     }
     button{
        background-color: black;
        border: none;
        padding: 15px;
        border-radius: 10px;       
        font-size: 15px;
        margin: 0 15px;
        margin-top: 100px;
      } 
      a{
        text-decoration: none;
        color: white;        
        border-radius: 10px;
        padding: 10px;
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
    <br>
    <?php
      if(!empty($_GET['envio'])){
        echo "<h1>Mensagem Enviada com Sucesso!</h1>";  
       }    
    ?> 
    <button class="login"><a href="paginainicial.php">voltar a página inicial</a></button>   
</body>
</html>
