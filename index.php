<?php

class Pessoa {
    public $nome;
    public $idade;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome . "<br>";
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

$pessoa1 = new Pessoa;
$pessoa1->setNome("Walter");
echo $pessoa1->getNome();

class Aluno extends Pessoa {
    public $periodo;

    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    }

    public function getPeriodo()
    {
        return $this->periodo . "<br>";
    }

}

$aluno1 = new Aluno;
$aluno1->setNome("Charlene");
echo $aluno1->getNome();
$aluno1->setPeriodo('tarde');
echo $aluno1->getPeriodo();
