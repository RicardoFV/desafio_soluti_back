<?php


namespace Gestao\V1\Entity;

// CLASSE QUE MANTEM DADOS RELACIONADO A ADMINISTRADORES
class Administradores
{
    private $id;
    private $nome;
    private $tipo;
    private $id_Contrato;

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