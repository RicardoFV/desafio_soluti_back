<?php

// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force
namespace Gestao\V1\Entity;

// CLASSE QUE MANTEM DADOS RELACIONADO AO USUARIO
class Enderecos
{
    private $id;
    private $cep;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $localidade;
    private $uf;
    private $id_Empresa;

    // METODOS MAGICOS
    public function __set($name, $value)
    {
        $this-> $name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

}