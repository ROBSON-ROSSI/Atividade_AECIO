<?php
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Pagina de login</title>
    
</head>
<body>

       <div class="div-contaner">
        <h1>Tela de login</h1>
              <form action="login.php" method="post" >
                 <fieldset class="fil_inputs">
                      <input type="text" name="user" placeholder="Digite o seu Email" required>
                      <input type="password" name="password" placeholder="Digite sua senha" required>
                 </fieldset>
                 <fieldset class="fill_button">
                      <button type="submit">Entrar</button>
                      <a href="/cadusuario.php">Criar conta</a>
                 </fieldset>
              </form>
       </div>
         
    
</body>
</html>