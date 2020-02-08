<?php

// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force
namespace Gestao\V1\Entity;

// CLASSE QUE MANTEM DADOS RELACIONADO AO USUARIO
class Usuarios
{
    private $id;
    private $nome_Completo;
    private $email;
    private $senha;
    private $data_Cadastro;
    private $status_Acesso;

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