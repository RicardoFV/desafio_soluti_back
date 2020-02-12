<?php
namespace Gestao\V1\Rest\Administradores;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Gestao\V1\Entity\Administradores;

class AdministradoresResource extends AbstractResourceListener
{
    private $em;
    private $administradores;
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function __construct($em)
    {
        $this->em = $em;
        $this->administradores = new Administradores();
    }

    public function create($data)
    {

        $this->administradores->__set('nome', $data->nome);
        $this->administradores->__set('tipo', $data->nome);
        $this->administradores->__set('id_Contrato', $data->id_contrato);
        /*
        $query = "insert into administradores(nome, tipo, id_Contrato_id) values(?,?,?)";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->administradores->__get('nome'));
        $stmt->bindValue(2,$this->administradores->__get('tipo'));
        $stmt->bindValue(3,$this->administradores->__get(id_Contrato));

        return $stmt->execute();
        */
        // insere um novo usuario
        $this->em->persist($this->administradores);
        $this->em->flush();
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        /*
        $query = "delete from administradores where id=?";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1, $id);
        return $stmt->execute();
        */
        // deleta administradores por id
        $data = $this->em->getRepository(Administradores::class);
        $adm = $data->find($id);
        if ($adm){
            $this->em->remove($adm);
            $this->em->flush();
            echo 'Administrador removido com sucesso';
        }else{
            echo 'Administrador não encontrado, ou não existe';
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
        // faz a busca do administradores por id
        $query = "select * from administradores where id=?";
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
        // busca todos os administradores e retorna uma coletion
        $query = "select * from administradores";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll(\PDO::FETCH_OBJ);
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
        // atualiza os dados
        $this->administradores->__set('nome', $data->nome);
        $this->administradores->__set('tipo', $data->nome);
        $this->administradores->__set('id_Contrato', $data->id_contrato);
        $this->administradores->__set('id',$id);

        $query = "insert into administradores(nome, tipo, id_Contrato_id) values(?,?,?)";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->administradores->__get('nome'));
        $stmt->bindValue(2,$this->administradores->__get('tipo'));
        $stmt->bindValue(3,$this->administradores->__get(id_Contrato));
        $stmt->bindValue(4,$this->administradores->__get(id));

        return $stmt->execute();
    }
}
