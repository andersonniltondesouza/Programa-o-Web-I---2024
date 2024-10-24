<?php
    require_once "model\pessoa.php";
    require_once "model\contato.php";
    require_once "model\\endereco.php";    

    /*Instanciar um objeto da classe pessoa*/
    $objetoPessoa = new \app\model\Pessoa();
    $objetoPessoa->setNome("Anderson");
    $objetoPessoa->setSobreNome("Nilton de Souza");
    $objetoPessoa->setDataNascimento(new DateTime("****-**-**"));
    $objetoPessoa->setTipo(1);
    $objetoPessoa->setCpfCnpj("000.000.000-00");

    $objetoPessoa->getTelefone()->setTipo(1);
    $objetoPessoa->getTelefone()->setNome("Telefone Pessoal");
    $objetoPessoa->getTelefone()->setValor("** ****-****");
    echo "Nome Completo: " . $objetoPessoa->getNomeCompleto() . "<br>"; 
    echo "Idade: " . $objetoPessoa->getIdade();
?>