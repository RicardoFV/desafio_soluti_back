<?php
namespace Gestao\V1\Rest\Contratos;

use phpDocumentor\Reflection\Types\This;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Gestao\V1\Entity\Contratos;
use Zend\Validator\File\MimeTyp;

class ContratosResource extends AbstractResourceListener
{
    private $em;
    private $contratos;
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function __construct($em)
    {
        $this->em = $em;
        $this->contratos = new Contratos();
    }

    public function create($data)
    {
        /*
       $inputFilter = $this->getInputFilter();
       $data = $inputFilter->getValues('arquivo');
       $extensao = $data['arquivo']['name'];
       $novo_nome = md5(time()).$extensao;
       $novo_caminho = 'C:\Projetos\Desafio_Soluti\desafio_soluti_back\public\arquivos/';
       // $novo_caminho = __DIR__ .'../../../../../../public/arquivos/';

        move_uploaded_file($data['arquivo']['tmp_name'], $novo_caminho .$novo_nome);
        */

        if ($data) {
            $this->contratos->__set('nome', $data->nome);
            $this->contratos->__set('caminho_arquivo', $data->camimho_arquivo);
            $this->contratos->__set('situacao', $data->situacao);
            $this->contratos->__set('id_empresa', $data->id_empresa);

            // insere um novo administradores
            $this->em->persist($this->contratos);
            $this->em->flush();
        } else {
            return new ApiProblem( 'erro ao alterar Contrato !');
        }
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        // deleta contratos por id
        $data = $this->em->getRepository(Contratos::class);
        $contrato = $data->find($id);
        if ($contrato) {
            $this->em->remove($contrato);
            $this->em->flush();
            echo 'Contrato removido com sucesso';
        } else {
            return new ApiProblem( 404,'Contrato não encontrado, ou não existe');
        }
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        // faz a busca do contratos por id
        $query = "select * from contratos where id=?";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        $query = "SELECT * FROM contratos";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for individual resources');
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        $resposta = $this->em->getRepository(Contratos::class);
        $cont = $resposta->find(id);

        if ($cont) {
            $cont->__set('caminho_Arquivo', $data->caminho);
            $cont->__set('situacao', $data->situacao);
            $cont->__set('id_empresa', $data->id_empresa);

            $this->em->merge($cont);
            $this->em->flush();
        } else {
            new ApiProblem(405, 'erro ao alterar Empresa !');
        }

    }

}
