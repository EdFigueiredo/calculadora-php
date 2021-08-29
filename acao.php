<?php

//ini_set('display_errors', 1);
//error_reporting(E_ALL);


$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$operacao = $_POST['operacao'];
if(isset($_POST['n1']) && isset($_POST['n1'])){
    if(is_numeric($_POST['n1']) && is_numeric($_POST['n1'])){
        switch($operacao){
            case 'subtrair':
                $total = $n1-$n2;
                echo "O resultado da operação é: ".$total;
            break;
            case 'somar':
                $total = $n1+$n2;
                echo "O resultado da operação é: ".$total;
            break;
            case 'multiplicar':
                $total = $n1*$n2;
                echo "O resultado da operação é: ".$total;
    
            break;
            case 'dividir':
                $total = $n1/$n2;
                echo "O resultado da operação é: ".$total;
            break;
            default:
                echo "Escolha alguma operação!";
        }
    }else{
        echo "Digite um valor válido!";
    }

}
?>
<br><a href="index.php">Voltar</a>