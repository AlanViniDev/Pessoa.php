<?php

/* Classe pessoa */

class Pessoa
{

    /* Atributos pessoa */

    protected $Nome;
    protected $Endereco;
    protected $Telefone;

}

/* Classe pessoa fisica */

class PessoaFisica extends Pessoa
{

    /* Atributos pessoa fisica */

    private $CPF = "11111111111";

    /* Metodos pessoa fisica */
    public function ValidarCPF()
    {

        if ($this->CPF == "11111111111")
        {
            echo "CPF Pessoa Fisica: " . $this->CPF . "<br>";
        }

    }

    public function ValidarEnderecoPessoaFisica()
    {

        $this->Endereco =  "BernadoSayao";

        if($this->Endereco == "BernadoSayao")
        {
            echo "Endereco Pessoa Fisica: " .  $this->Endereco . "<br>";
        }

    }

    public function SalvarDadosPessoaFisica()
    {
        echo "Os Dados de Pessoa Fisica Foram Salvos" . "<br>";
    }

}

/* Classe pessoa juridica */

class PessoaJuridica extends Pessoa
{

    /* Atributos pessoa juridica */

    private $CNPJ;

    /* Metodos pessoa juridica */

    public function ValidarCNPJ()
    {

        if ($this->CNPJ == "123456789")
        {
            echo "CNPJ Pessoa Juridica: " . $this->CNPJ . "<br>";
        }

    }

    public function ValidarEnderecoPessoaJuridica()
    {

        $this->Endereco =  "BernadoSayao2";

        if($this->Endereco == "BernadoSayao2")
        {
            echo "Endereco Pessoa Juridica: " .  $this->Endereco . "<br>";
        }

    }

    public function SalvarDadosPessoaJuridica()
    {
        echo "Os Dados de Pessoa Juridica Foram Salvos" . "<br>";
    }

}

/* Instancia pessoa fisica */

$executarPessoaFisica = new PessoaFisica();
$executarPessoaFisica->ValidarCPF();
$executarPessoaFisica->ValidarEnderecoPessoaFisica();
$executarPessoaFisica->SalvarDadosPessoaFisica();

/* Instancia pessoa juridica */

$executarPessoaJuridica = new PessoaJuridica();
$executarPessoaJuridica->ValidarCNPJ();
$executarPessoaJuridica->ValidarEnderecoPessoaJuridica();
$executarPessoaJuridica->SalvarDadosPessoaJuridica();
