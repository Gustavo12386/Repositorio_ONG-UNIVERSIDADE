<?php
 if(isset($_POST['submit']))
 {
    include_once('config.php');

    $nome = $_POST['nome_ong'];
    $representante = $_POST['nome_representante'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $contato = $_POST['contato_ong'];

    $result = mysqli_query($conexao, "INSERT INTO tabela(nome_ong, nome_representante, email, senha, cnpj, endereco, telefone, contato_ong)
    VALUES('$nome', '$representante', '$email', '$senha', '$cnpj', '$endereco', '$telefone', '$contato')");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(to right, rgb(20, 147, 220), rgb(17,54,71));      
    }
    div{
     background-color: rgba(0, 0, 0, 0.9);
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     padding: 60px;
     width: 260px;
     height: 580px;
     
     border-radius: 15px;
     color: white;
    }
    input{
     padding: 13px;
     width: 230px;
     border: none;
     outline: none;     
    }
    .inputSubmit{
        background-color: gray;
        border: none;
        padding: 15px;
        border-radius: 10px;
        color: black;
        font-size: 15px; 
        width: 50%;
    }
    .inputSubmit:hover{
        background-color: deepskyblue;
        cursor: pointer;
    }
</style>    
</head>
<body>
    <div>
        <h1>Cadastro</h1>
        <form action="cadastro.php" method="POST">
            <input type="text" name="nome_ong" id="nome_ong" placeholder="Nome da ONG" required> 
            <br><br> 
            <input type="text" name="nome_representante" id="nome_representante" placeholder="Representante da ONG" required> 
            <br><br>
            <input type="text" name="email" id="email" placeholder="Email" required> 
            <br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha" required> 
            <br><br>
            <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ" required> 
            <br><br>            
            <input type="text" name="endereco" id="endereco" placeholder="Endereco" required> 
            <br><br>
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required> 
            <br><br>
            <input type="tel" name="contato_ong" id="contato_ong" placeholder="Contato da ONG" required> 
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" id="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>