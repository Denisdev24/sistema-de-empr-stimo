<?php
$score=$_POST['score'];
/* Verificando se o score é maior ou igual a 500*/
if ($score >=500){
require_once('select.php');
}
elseif($score==0){
    echo "<script>window.alert('Campo score em branco')</script>";
    require_once('index.php');
}
else{
    echo "Seu score está abaixo do desejado para o empréstimo.";
    echo "<a href='index.php'>Voltar</a>";
}
?>