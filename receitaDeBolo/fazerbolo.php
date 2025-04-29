<?php

function fazer_bolo() {
    
    $bolo_pronto = false;
    $cobertura_pronta = false;
    
   
    while (!$bolo_pronto || !$cobertura_pronta) {
        
        echo "Bem-vindo à confeitaria!\n";
        echo "Você pediu um bolo de chocolate.\n";

        
        do {
            echo "Você tem os ingredientes do bolo? (sim/nao)\n";
            echo "Necessários: farinha, açúcar, ovos, leite, fermento, manteiga\n";
            $tem_ingredientes_bolo = trim(fgets(STDIN));

            if ($tem_ingredientes_bolo != "sim") {
                echo "Vai comprar os ingredientes que estão faltando e depois tente novamente.\n\n";
                
                continue 2;
            }

        } while ($tem_ingredientes_bolo != "sim");

        
        echo "Preparando o bolo de chocolate...\n";
        echo "Coloque o bolo no forno por pelo menos 40 minutos.\n";
        echo "Qual foi o tempo de forno em minutos? ";
        $tempo_forno = (int)trim(fgets(STDIN));

        echo "Qual foi a temperatura do forno em graus Celsius? ";
        $temperatura = (int)trim(fgets(STDIN));

        if ($tempo_forno >= 40 && $temperatura >= 200 && $temperatura <= 240) {
            echo "O bolo de chocolate está pronto!\n";
            $bolo_pronto = true;
        } else {
            echo "O bolo NÃO está pronto! Vamos tentar novamente.\n";
            $bolo_pronto = false;
            $cobertura_pronta = false; 
        }

    
        if ($bolo_pronto) {
            do {
                echo "Você tem os ingredientes para a cobertura de chocolate? (sim/nao)\n";
                echo "Necessários: chocolate em pó, açúcar, leite, margarina\n";
                $tem_ingredientes_cobertura = trim(fgets(STDIN));

                if ($tem_ingredientes_cobertura != "sim") {
                    echo "Vai comprar os ingredientes que estão faltando e depois tente novamente.\n\n";
                    
                    continue 2;
                }

            } while ($tem_ingredientes_cobertura != "sim");

            echo "Fazendo a cobertura de chocolate...\n";
            $cobertura_pronta = true;
        }
    }

   
    echo "A forma de pagamento é dinheiro.\n";
    echo "Pagamento realizado com dinheiro.\n";
    echo "Seu bolo de chocolate com cobertura de chocolate está pronto! Obrigado pela preferência!\n";
}


fazer_bolo();

?>
