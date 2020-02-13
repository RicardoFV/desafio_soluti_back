<?php
namespace Gestao\V1\Rest\Contratos;

use Zend\Uri\File;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Gestao\V1\Entity\Contratos;

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
        
        $arquivo = new File($data->caminho_arquivo);
       // if(isset($_FILES[$arquivo])){
            date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

            $ext = strtolower(substr($_FILES[$arquivo]['name'],-4)); //Pegando extensão do arquivo
            $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
            $dir = '../Contratos'; //Diretório para uploads
      
            move_uploaded_file($_FILES[$arquivo]['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
     //   }
        

        $this->contratos->__set('caminho_arquivo', $dir);
        $this->contratos->__set('situacao', $data->situacao);
        $this->contratos->__set('id_empresa', $data->id_empresa);
        $this->contratos->__set('nome', $data->nome);
        /*
        $query = "insert into contratos(caminho_arquivo, situacao, id_empresa_id, now()) values(?,?,?, ?)";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->contratos->__get('caminho_Arquivo'));
        $stmt->bindValue(2,$this->contratos->__get('situacao'));
        $stmt->bindValue(3,$this->contratos->__get(id_empresa_id));

        return $stmt->execute();
        */
        // insere um novo administradores
        $this->em->persist($this->contratos);
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
       $query = "delete from contratos where id=?";
       $stmt = $this->em->getConnection()->prepare($query);
       $stmt->bindValue(1, $id);
       return $stmt->execute();
       */
        // deleta contratos por id
        $data = $this->em->getRepository(Contratos::class);
        $contrato = $data->find($id);
        if ($contrato){
            $this->em->remove($contrato);
            $this->em->flush();
            echo 'Contrato removido com sucesso';
        }else{
            echo 'Contrato não encontrado, ou não existe';
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
        // busca todos os contratos e retorna uma coletion
        $query = "select * from contratos";
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
        $this->contratos->__set('caminho_Arquivo', $data->caminho);
        $this->contratos->__set('situacao', $data->situacao);
        $this->contratos->__set('id_empresa', $data->id_empresa);
        $this->contratos->__set('id',$id);

        $query = "insert into contratos(nome, tipo, id_Contrato_id) values(?,?,?)";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->contratos->__get('caminho_arquivo'));
        $stmt->bindValue(2,$this->contratos->__get('situacao'));
        $stmt->bindValue(3,$this->contratos->__get('id_empresa'));
        $stmt->bindValue(4,$this->contratos->__get('id'));

        return $stmt->execute();
    }
}
