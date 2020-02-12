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
     * @var Contratos
     *
     * @ORM\ManyToOne(targetEntity="Contratos")
     * @ORM\JoinColumn(name="id_contrato", referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
    private $id_contrato;

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