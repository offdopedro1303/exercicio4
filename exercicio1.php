<?php
    $numero = 5;
    $nome = "";

    switch($numero){
        case 4:
            echo "O numero é igual á 4 <br>";
            break;
        case 5:
            echo "O numero é igual á 5 <br>";
            break;
        default:
        echo "O numero não corresponde aos valores <br>";    
    }
    switch($nome){
        case "Rosana":
            echo "O nome é Rosana";
        break;
        case "Isis":
            echo "O nome é Isis";
        break;
        default:
        echo "O nome não foi encontrado"
    }
?>