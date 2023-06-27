<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
     <header>
        <h1>Cadastro de clientes | Emporio Padaria</h1>
     </header>

     <main class="text">
        <?php 
        $nome = $_GET["nome"];
        $Sobrenome = $_GET["sobrenome"];
        $tel = $_GET["tel"];

        echo "<p>É um prazer te conhecer, a Padaria Victor Agradece $nome
        $Sobrenome</p>"









     </main>



    
</body>
</html>