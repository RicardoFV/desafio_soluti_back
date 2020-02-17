<?php

// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force

namespace Gestao\V1\Entity;
use Doctrine\ORM\Mapping as ORM;

// CLASSE QUE MANTEM DADOS RELACIONADO A EMPRESAS
/**
 * @ORM\Entity
 */
class Empresas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *
     * @var string @ORM\Column(name="razao_social", type="string", length=255, nullable=true)
     */
    private $razao_social;
    /**
     *
     * @var string @ORM\Column(name="nome_fantasia", type="string", length=255, nullable=true)
     */
    private $nome_fantasia;
    /**
     *
     * @var string @ORM\Column(name="cnpj", type="string", length=14, nullable=true)
     */
    private $cnpj;
    /**
     *
     * @var string @ORM\Column(name="inscricao_estadual", type="string", length=50, nullable=true)
     */
    private $inscricao_estadual;
    /**
     *
     * @var string @ORM\Column(name="telefone", type="string", length=15, nullable=true)
     */
    private $telefone;
    /**
     *
     * @var string @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;
    /**
     *
     * @var string @ORM\Column(name="situacao", type="string", length=100, nullable=true)
     */
    private $situacao;
    /**
     *
     * @var string @ORM\Column(name="ramo_atividade", type="string", length=255, nullable=true)
     */
    private $ramo_atividades;
    /**
     *
     * @var string @ORM\Column(name="natureza_juridica", type="string", length=200, nullable=true)
     */
    private $natureza_juridica;

     /**
     * @var Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
    private $id_usuario;
    /**
     *
     * @var string @ORM\Column(name="capital_social", type="integer", nullable=true)
     */
    private $capital_social;
    /**
     *
     * @var string @ORM\Column(name="cep", type="string", length=20, nullable=true)
     */
    private $cep;
    /**
     *
     * @var string @ORM\Column(name="logradouro", type="string", length=200, nullable=true)
     */
    private $logradouro;
    /**
     *
     * @var string @ORM\Column(name="complemento", type="string", length=200, nullable=true)
     */
    private $complemento;
    /**
     *
     * @var string @ORM\Column(name="bairro", type="string", length=200, nullable=true)
     */
    private $bairro;
    /**
     *
     * @var string @ORM\Column(name="localidade", type="string", length=200, nullable=true)
     */
    private $localidade;
    /**
     *
     * @var string @ORM\Column(name="uf", type="string", length=2, nullable=true)
     */
    private $uf;

    /**
     *
     * @var string @ORM\Column(name="data_abertura", type="datetime",length=25 ,nullable=true)
     */
    private $data_abertura;


    // Metodos magicos
    public function __set($name, $value)
    {
        $this-> $name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    /**
     * @return string
     */
    public function getDataAbertura()
    {
        return $this->data_abertura->format("d-m-Y");
    }

    public function setDataAbertura($data_abertura)
    {
        // recebe a informaçao de data vinda do front e já faz a conversão
        $data = new \DateTime($data_abertura);
        $this->data_abertura = $data;
    }



}