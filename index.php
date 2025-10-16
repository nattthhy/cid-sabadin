<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    
    <title>Formulario</title>

</head>
<body>
    <main class="container">
    <div class="box" class="CAIXA">
        <form action="">
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
                <label for="nome">email</label>
               </div>
               <br>

               <div class="nomecaixa"> 
                <input type="tel" name="telefone" id="telefone" class="inputuser" required>
                <label for="nome">telefone</label>
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