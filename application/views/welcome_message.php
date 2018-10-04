<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>

        <?php
        $titulo = 'teste do janho';

        $vetor_numeros = "casa,trabalho,home,work,low";
        // print_r($vetor_numeros);
        $expl_lsita = explode(",", $vetor_numeros);
        // print_r($expl_lsita);

        for ($i = 0; $i < count($expl_lsita); $i++) {
            $teste = $expl_lsita[$i];
            echo $teste . "\n";
        }


        echo "resutaldo da soma de 10 + 20 é " . treta(10, 20);

        function treta($nun1, $num2) {
            $result = $nun1 + $num2;
            return $result;
        }
        
         $pedro = new Estudante("Jack arnates");
         $pedro->nome();
        ?>

       





        <title><?php echo $titulo; ?></title> 


