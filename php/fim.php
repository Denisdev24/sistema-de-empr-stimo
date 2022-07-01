<?php
/*Site final*/
 
$fim=$_POST['fim'];

if($fim == 1){
    echo "Vamos analisar seu pedido daqui 24h entraremos em contato";
    echo "<br>";
    echo "<a href='index.php'>Pagina inicial</a>";
}
elseif($fim== 2){
    header('location:index.php');
}
?>