<?php

    require_once "pessoa.php";

    // Instanciar objeto da classe pessoa
    $ObjetoPessoa = new Pessoa();
    $ObjetoPessoa->setNome("Anderson");
    $ObjetoPessoa->setSobrenome("Nilton de Souza");

    echo $ObjetoPessoa->getNomeCompleto();
    
?>