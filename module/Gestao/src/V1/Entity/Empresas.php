<?php

// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force

namespace Gestao\V1\Entity;

// CLASSE QUE MANTEM DADOS RELACIONADO A EMPRESAS
class Empresas
{
    private $id;
    private $razao_Social;
    private $nome_Fantasia;
    private $cnpj;
    private $inscricao_Estadual;
    private $telefone;
    private $email;
    private $situacao;
    private $ramo_Atividades;
    private $natureza_Juridica;
    private $id_Usuario;
    private $capital_Social;

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