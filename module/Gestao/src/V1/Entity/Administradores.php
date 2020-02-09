<?php
// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force

namespace Gestao\V1\Entity;
use Doctrine\ORM\Mapping as ORM;

// CLASSE QUE MANTEM DADOS RELACIONADO A ADMINISTRADORES
/**
 * @ORM\Entity
 */
class Administradores
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;
    /**
     * @var string @ORM\Column(name="tipo", type="string", length=100, nullable=true)
     */
    private $tipo;
    /**
     * @ORM\ManyToOne(targetEntity="Contratos")
     */
    private $id_Contrato;

    // Metodos magicos
    public function __set($name, $value)
    {
        $this-> $name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

}