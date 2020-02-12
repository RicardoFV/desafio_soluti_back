<?php
// comando para executar a classe altomatica
//php public/index.php orm:schema-tool:create
// php public/index.php orm:schema-tool:update --force

namespace Gestao\V1\Entity;
use Doctrine\ORM\Mapping as ORM;

// CLASSE QUE MANTEM DADOS RELACIONADO A CONTRATOS
/**
 * @ORM\Entity
 */
class Contratos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *
     * @var string @ORM\Column(name="caminho_arquivo", type="string", length=255, nullable=true)
     */
    private $caminho_arquivo;
    /**
     *
     * @var string @ORM\Column(name="situacao", type="string", length=50, nullable=true)
     */
    private $situacao;
    /**
     * @var DateTime
     * @ORM\Column(type="datetime", name="data_anexo", columnDefinition="timestamp default current_timestamp")
     */
    private $data_Anexo;
    /**
     * @var Empresas
     *
     * @ORM\ManyToOne(targetEntity="Empresas")
     * @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * @ORM\Column(type="integer")
     */
    private $id_empresa;


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