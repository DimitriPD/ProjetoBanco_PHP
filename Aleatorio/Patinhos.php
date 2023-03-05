<?php 

$numPatinhos = readline("Digite quantos patinhos tem:\n ");

if (!is_numeric($numPatinhos)) {    
    echo "Precisa ser um valor numérico\n";
}

for ($cont = 0; $cont < $numPatinhos; $cont++) {
    
    $singularXplural = ["PATINHOS", "FORAM", "VOLTARAM", "PATINHOS"];
    $so = "SÓ";


    $patos = $numPatinhos - $cont;
    $f = $patos - 1;
    
    if ($patos == 2) {
        $singularXplural[3] = "PATINHO";
        $singularXplural[2] = "VOLTOU";
    } 

    if ($patos == 1) {
        $singularXplural[0] = "PATINHO";
        $singularXplural[1] = "FOI";
        $singularXplural[2] = "VOLTOU";
        $singularXplural[3] = "NENHUM PATINHO";
        $so = "";
        $f = '';
    }

    echo "
        {$patos} $singularXplural[0] $singularXplural[1] PASSEAR
        ALÉM DAS MONTANHAS
        PARA BRINCAR
        A MAMÃE GRITOU: QUÁ, QUÁ, QUÁ, QUÁ
        MAS $so {$f} $singularXplural[3] $singularXplural[2] DE LÁ\n";  
}