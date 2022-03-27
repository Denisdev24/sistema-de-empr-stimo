<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilo--> 
    <link rel="stylesheet" href="escolha.css">
    <title>Document</title>
</head>
<body>
<h1><span>C</span>rédito<span>P</span>ara<span>T</span>odxs</h1>
    <!--Formulario-->
<form action="escolha2.php" method="post">
<p>Nome completo
     <input type="text" name="nome">
</p>
<p>CPF
    <input type="text" name="cpf">
</p>
<h2>Escolha qual valor de crédito quer contatar</h2>   
<div class="botao">
        <button name="escolha" value="1">1000</button>
        <button name="escolha" value="2">3000</button>
        <button name="escolha" value="3">5000</button>
        <button name="escolha" value="4">10000</button>
 </div>
</form>
</body>
</html>