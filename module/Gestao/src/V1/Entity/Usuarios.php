<?php

// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force
namespace Gestao\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

// CLASSE QUE MANTEM DADOS RELACIONADO AO USUARIO

/**
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *
     * @var string @ORM\Column(name="nome_completo", type="string", length=200, nullable=true)
     */
    private $nome_Completo;
    /**
     *
     * @var string @ORM\Column(name="email", unique=true, type="string", length=255, nullable=true)
     */
    private $email;
    /**
     *
     * @var string @ORM\Column(name="senha", type="string", length=32, nullable=true)
     */
    private $senha;

    // um usuario pode ter varias empresas
    /**
     * @ORM\OneToMany(targetEntity="Empresas", mappedBy="Usuarios")
     */
    private $empresas;
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