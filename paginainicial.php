<?php
 session_start(); 
  
 if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
   header('Location: login.html');
 }
 $logado = $_SESSION['email'];
?>
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
    h5{ 
      margin-top: 150px;       
    }    
    .card-top{
      display: inline-block;
    }
    .card{
      width: 553px;
      height: 84px;
      display: inline-block;   
      margin: 0 15px;      
    }
    .card2{
      background-color: white;
      color:black;
      width: 400px;      
      border-radius: 8px;
      display: inline-block;
      margin: 0 90px;
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
     echo "<h1>Bem vindo ao portal ONG+UNIVERSIDADE</h1>";
     echo  "<br><br><br><br>";
     echo "<h2>O que você deseja?</h2>";
    ?>
    <br><br><br>
 <div class="box">  
   <a class="link" href="marcacao.php">Marcar Reunião com a direção do IES</a>
   <a class="link" href="apoio.php">Solicitar apoio para projetos/eventos</a>
   <a class="link" href="convite.php">Convidar representantes da IES para eventos</a>
 </div>
 <h5>Você também pode entrar em contato por e-mail com os coordenadores de outros cursos ou da direção do IES logo abaixo:</h5> 
 <br><br><br>
 <div class="card-top">
    <div class="card">
      Cursos: Administração,Gestão de Recursos Humanos e Logística - Presencial
      Coordenadora: Daniela Simões Menezes
      <p>Email: daniela.s.menezes@cogna.com.br</p>  
    </div>
    <div class="card">
    Curso: Arquitetura e Urbanismo - Presencial<br>
    Coordenadora: Claudia Puzzuoli dos Santos Costa
    <p>Email: claudia.pcosta@cogna.com.br</p>
    </div>
    <br><br>
    <div class="card">
    Curso: Direito - Presencial<br>
    Coordenadora :Wilmara Maria Dantas Falcão
    <p>Email: wilmara.falcao@cogna.com.br</p>
    </div>
    <div class="card">
    Cursos: Educação Física e Fisioterapia - Presencial<br>
    Coordenador: Fábio da Silva Wanderley
    <p>Email: fabio.wanderley@kroton.com.br</p>
    </div>
    <br><br>
    <div class="card">
    Curso: Enfermagem - Presencial<br>
    Coordenadora: Kelly Cruz Pimentel Sampaio
    <p>kelly.sampaio@cogna.com.br</p>
    </div>
    <div class="card">
    Cursos: Engenharia Civil,Elétrica e Mecânica - Presencial<br>
    Coordenador: Mateus Eça Souza
    <p>Email: mateus.esouza@cogna.com.br</p>
    </div>
    <br><br>
    <div class="card">
    Cursos: Estética e Cosmética/Farmácia - Presencial<br>
    Coordenadora: Ana Patricia P Queiroz
    <p>Email: ana.queiroz@cogna.com.br</p>   
    </div>
    <div class="card">
    Curso: Nutrição - Presencial<br>
    Coordenador: Tarcísio Santana Gomes
    <p>Email: tarcisio.gomes@cogna.com.br</p>  
    </div>  
    <br><br>
    <div class="card">
    Curso: Odontologia - Presencial<br>
    Coordenadora: Elisaura Cristina Macedo dos Santos
    <p>Email: elisaura.santos@cogna.com.br</p>
    </div>
    <div class="card">
    Curso: Psicologia - Presencial<br>
    Coordenadora: Helena Miranda dos Santos
    <p>Email: helena.msantos@cogna.com.br</p>
    </div>
    <br><br>
    <div class="card2">
    Diretora Geral: Simone Menegardo Rigo   
    <p> Email da Diretora: simone.rigo@cogna.com.br</p> 
    </div>
    <div class="card2">
    Coordenador Geral: Mateus Eça Souza   
    <p> Email do Coordenador: mateus.esouza@cogna.com.br</p> 
    </div>
 </div>
</body>
</html>