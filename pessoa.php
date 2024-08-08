<?php

class Pessoa{

    private $nome ;
    private $endereco ;
    private $cidade ; 
    private $UF ; 
    private $altura ;

    public function getApresentacao(){
        $apresent = "Olá mundo, sou " . $this->nome . ", resido no endereço " . 
        $this->endereco . ", " . $this->cidade . "-" . $this->UF . " e possuo uma altura de " . $this->altura . "!\n";
        return $apresent ;

    }


    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }
    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

$pessoa = new Pessoa() ;
$pessoa->setNome("Fer")->setEndereco("R ..")->setCidade("Foz")->setUF("PR")->setAltura(1.5) ;

echo $pessoa->getApresentacao() ;

$pessoa2 = new Pessoa() ;
$pessoa2->setNome("Frost")->setEndereco("=seu coração")->setCidade("e na sua mente")->setUF("SZ")->setAltura(1.80) ;

echo $pessoa2->getApresentacao() ;
