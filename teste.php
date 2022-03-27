    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Estilo-->
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!--Demonstrativo -->
<h1><span>C</span>rédito<span>P</span>ara<span>T</span>odxs</h1>
    <div class="demonstrativo">
        <div class="box">
    <table border='1'>
    <tr ><th class="espaco">Nome do (a) contratante</th> <th class="espaco">CPF</th><th>Data de contratação do crédito</th></tr>
    <tr><td><?php echo $nome?></td><td><?php echo $cpf?></td><td><?php echo date('d/m/Y')?></td></tr>
    <tr><th>Numero de parcelas</th><th>Valor de cada Parcela</th><th>Valor Total das Parcelas</th></tr>
    <tr><td><?php echo $nume?></td><td>R$<?php echo $valorparcela?></td><td>R$<?php echo $valortotal?></td></tr>
</table>

<table class="table2" border="1">
    <h2>Taxa de juros</h2>
     <tr><th>Mensal</th><th>Total dos juros</th><tr>
    <tr><td><?php echo $taxamesal?></td></td><td><?php echo $totaljuros?></td></tr>
</table>
    <!--Botão de confirmação-->
        <form class="fim" action="fim.php" method="post">
    <button name="fim" value="1">Finalizar contratação</button>
    <button name="fim" value="2">Cancelar</button>
</div>
    </div>
</body>
</html>