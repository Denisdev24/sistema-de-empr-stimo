    <?php

    /*Recebendo os dados do formulario*/
      /*  $nome=isset($_POST['nome'])?$_POST['nome']:"";
        $cpf=isset ($_POST['cpf'])?$_POST['cpf']:"";
        $escolha=isset($_POST['escolha'])?$_POST['escolha']:"";
        $form=isset($_POST['form'])?$_POST['form']:"";*/

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $escolha = $_POST['escolha'];

        /*Condição*/
        if($numero == null || $cpf2 == null){
            echo "<script>window.alert('Campo nome ou cpf em branco')</script>";
            include_once('select.php');
        }
        else{
            /*Escolha*/
        switch ($escolha) {
            case 1 :
                $nome;
                $cpf;
                $nume='12 parcelas';
                $valorparcela ='100 Reais';
                $valortotal = '1200 Reais';
                $taxamesal = '1,666% a.m';
                $totaljuros = '20% a.a';
                include_once('teste.php');
                break;
            case 2 : 
                $nome;
                $cpf;
                $nume='15 parcelas';
                $valorparcela ='300 Reais';
                $valortotal = '4500 Reais';
                $taxamesal = '3,4% a.m';
                $totaljuros = '50% a.a';
                include_once('teste.php');
                break;
            case 3 :
                $nome;
                $cpf;
                $nume='20 parcelas';
                $valorparcela ='375 Reais';
                $valortotal = '7500Reais';
                $taxamesal = '2,5 a.m';
                $totaljuros = '50% a.a';
                include_once('teste.php');
                break;
            case 4 : 
                $nome;
                $cpf;
                $nume='37 parcelas';
                $valorparcela ='405,40 Reais';
                $valortotal = '15000 Reais';
                $taxamesal = '1,35% a.m';
                $totaljuros = '50% a.a';
                include_once('teste.php');
                break;
            default:
            }
        }

    ?>