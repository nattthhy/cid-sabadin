


<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barriecito&family=Delius&display=swap" rel="stylesheet">
    <title>login Natalie</title>
</head>
<body>
    <main class="container">
        
           <h1>acesse sua conta</h1> 
           <form action="testelogin.php" method="POST">
           <div class="input-box">
            <input placeholder="email" type="email" name="email" >
            <i class="bx bxs-user"></i>
           </div>
           <div class="input-box">
            <input placeholder="senha" type="password" name="senha">
            <i class="bx bxs-lock-alt"></i>
           </div>
           <div class="lembre">
            <label >
            <input type="checkbox"> lembrar-me
            </label>
            <a href="#">esqueci minha senha</a>
           </div>
           <input type="submit" name="submit" value="enviar" class="login">  
           <div class="registre">
            <p>não tem uma conta? <a href="formulario.php">cadastre-se</a></p>
           </div>
        </form>
    </main>
</body>
</html>