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

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNomeCompleto()
    {
        return $this->nome_Completo;
    }


    public function setNomeCompleto($nome_Completo)
    {
        $this->nome_Completo = $nome_Completo;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getEmpresas()
    {
        return $this->empresas;
    }

    public function setEmpresas($empresas)
    {
        $this->empresas = $empresas;
    }



}