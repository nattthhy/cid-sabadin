
<?php

if (isset($_POST['submit']))
 {
 // print_r($_POST['nome']);
  //print_r('<br>');
 // print_r($_POST['email']);
 // print_r('<br>');
 // print_r($_POST['telefone']);
 // print_r('<br>');
  //print_r($_POST['sexo']);
  //print_r('<br>');
 //print_r($_POST['data_nascimento']);
 //print_r('<br>');

  include_once('config.PHP');
$nome= $_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
$sexo=$_POST['sexo'];
$data_nascimento=$_POST['data_nascimento'];
$senha=$_POST['senha'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nascimento,senha) 
    VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nascimento','$senha')");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    
    <title>Formulario</title>

</head>
<body>
    <main class="container">
    <div class="box CAIXA" >
        <form action="index.php" method="POST">
            <fieldset>
                <h1>Faça parte da nossa familia</h1>
               <br>
              
               <div class="nomecaixa"> 
                <input type="text" name="nome" id="nome" class="inputuser" required>
                <label for="nome">nome completo</label>
               </div>
               <br>
               <div class="nomecaixa"> 
                <input type="email" name="email" id="email" class="inputuser" required>
                <label for="email">email</label>
               </div>
               <br>

               <div class="nomecaixa"> 
                <input type="tel" name="telefone" id="telefone" class="inputuser" required>
                <label for="telefone">telefone</label>
               </div>
               <br>
               <div class="nomecaixa"> 
                <input type="password" name="senha" id="senha" class="inputuser" required>
                <label for="senha">senha</label>
               </div>
               <br>

               <p>sexo</p>
               <input type="radio" id="feminino" name="sexo" value="feminino" required>
               <label for="feminino">Feminino</label>
               <input type="radio" id="masculino" name="sexo" value="masculino" required>
               <label for="masculino">Masculino</label>
               <br>
                
               <div class="nomecaixa"> 
                <label for="data_nascimento">data de nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="inputuser" required>
                </div>
                <br>
                <br>
                <input type="submit" class="submit"name="submit" id="submit">
                <br>


            </fieldset>
        </form>
    </div>
</body>
</html>