<?php
// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force

namespace Gestao\V1\Entity;

// CLASSE QUE MANTEM DADOS RELACIONADO A CONTRATOS
class Contratos
{
    private $id;
    private $caminho_Arquivo;
    private $situacao;
    private $data_Anexo;
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