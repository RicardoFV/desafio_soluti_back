<?php
namespace Gestao\V1\Rest\Empresas;

use Gestao\V1\Entity\Empresas;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;

class EmpresasResource extends AbstractResourceListener
{
    private $em;
    private $empresas;

    public function __construct($em)
    {
        $this->em = $em;
        $this->empresas = new Empresas();
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        $this->empresas->__set('razao_Social', $data->razao_social);
        $this->empresas->__set('nome_Fantasia', $data->nome_fantasia);
        $this->empresas->__set('cnpj', $data->cnpj);
        $this->empresas->__set('inscricao_Estadual', $data->inscricao_estadual);
        $this->empresas->__set('telefone', $data->telefone);
        $this->empresas->__set('email', $data->email);
        $this->empresas->__set('situacao', $data->situacao);
        $this->empresas->__set('ramo_Atividades', $data->ramo_atividade);
        $this->empresas->__set('natureza_Juridica', $data->natureza_juridica);
        $this->empresas->__set('id_usuario', $data->id_usuario);
        $this->empresas->__set('capital_Social', $data->capital_social);
        $this->empresas->__set('cep', $data->cep);
        $this->empresas->__set('logadouro', $data->logadouro);
        $this->empresas->__set('complemento', $data->complemento);
        $this->empresas->__set('bairro', $data->bairro);
        $this->empresas->__set('localidade', $data->localidade);
        $this->empresas->__set('uf', $data->uf);

        /*
        $query ="insert into empresas(razao_social, nome_fantasia, cnpj, inscricao_estadual, telefone,email, situacao, ramo_atividade, natureza_juridica,id_usuario_id, capital_social,cep,logadouro, complemento, bairro, localidade,uf ) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->empresas->__get('razao_Social'));
        $stmt->bindValue(2,$this->empresas->__get('nome_Fantasia'));
        $stmt->bindValue(3,$this->empresas->__get('email'));
        $stmt->bindValue(4,$this->empresas->__get('inscricao_Estadual'));
        $stmt->bindValue(5,$this->empresas->__get('telefone'));
        $stmt->bindValue(6,$this->empresas->__get('email'));
        $stmt->bindValue(7,$this->empresas->__get('situacao'));
        $stmt->bindValue(8,$this->empresas->__get('ramo_Atividades'));
        $stmt->bindValue(9,$this->empresas->__get('natureza_Juridica'));
        $stmt->bindValue(10,$this->empresas->__get('id_usuario'));
        $stmt->bindValue(11,$this->empresas->__get('capital_Social'));
        $stmt->bindValue(12,$this->empresas->__get('cep'));
        $stmt->bindValue(13,$this->empresas->__get('logadouro'));
        $stmt->bindValue(14,$this->empresas->__get('complemento'));
        $stmt->bindValue(15,$this->empresas->__get('bairro'));
        $stmt->bindValue(16,$this->empresas->__get('localidade'));
        $stmt->bindValue(17,$this->empresas->__get('uf'));

        return $stmt->execute();
        */

        // insere um nova empresa
        $this->em->persist($this->empresas);
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
        $query = "delete from usuarios where id=?";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1, $id);
        return $stmt->execute();
        */
        // deleta empresa por id
        $data = $this->em->getRepository(Empresas::class);
        $empr = $data->find($id);
        if ($empr){
            $this->em->remove($empr);
            $this->em->flush();
            echo 'Empresa removido com sucesso';
        }else{
            echo 'Empresa não encontrado, ou não existe';
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
        // faz a busca do usuario por id
        $query = "select * from empresas where id=?";
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
        // busca todos as empresas e retorna uma coletion
        $query = "select * from empresas";
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
        $this->empresas->__set('razao_Social', $data->razao_social);
        $this->empresas->__set('nome_Fantasia', $data->nome_fantasia);
        $this->empresas->__set('cnpj', $data->cnpj);
        $this->empresas->__set('inscricao_Estadual', $data->inscricao_estadual);
        $this->empresas->__set('telefone', $data->telefone);
        $this->empresas->__set('email', $data->email);
        $this->empresas->__set('situacao', $data->situacao);
        $this->empresas->__set('ramo_Atividades', $data->ramo_atividade);
        $this->empresas->__set('natureza_Juridica', $data->natureza_juridica);
        $this->empresas->__set('id_usuario', $data->id_usuario);
        $this->empresas->__set('capital_Social', $data->capital_social);
        $this->empresas->__set('cep', $data->cep);
        $this->empresas->__set('logadouro', $data->logadouro);
        $this->empresas->__set('complemento', $data->complemento);
        $this->empresas->__set('bairro', $data->bairro);
        $this->empresas->__set('localidade', $data->localidade);
        $this->empresas->__set('uf', $data->uf);
        $this->empresas->__set('id', $data->id);


        $query ="insert into empresas(razao_social, nome_fantasia, cnpj, inscricao_estadual, telefone,email, situacao, ramo_atividade, natureza_juridica,id_usuario_id, capital_social,cep,logadouro, complemento, bairro, localidade,uf ) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->empresas->__get('razao_Social'));
        $stmt->bindValue(2,$this->empresas->__get('nome_Fantasia'));
        $stmt->bindValue(3,$this->empresas->__get('email'));
        $stmt->bindValue(4,$this->empresas->__get('inscricao_Estadual'));
        $stmt->bindValue(5,$this->empresas->__get('telefone'));
        $stmt->bindValue(6,$this->empresas->__get('email'));
        $stmt->bindValue(7,$this->empresas->__get('situacao'));
        $stmt->bindValue(8,$this->empresas->__get('ramo_Atividades'));
        $stmt->bindValue(9,$this->empresas->__get('natureza_Juridica'));
        $stmt->bindValue(10,$this->empresas->__get('id_usuario'));
        $stmt->bindValue(11,$this->empresas->__get('capital_Social'));
        $stmt->bindValue(12,$this->empresas->__get('cep'));
        $stmt->bindValue(13,$this->empresas->__get('logadouro'));
        $stmt->bindValue(14,$this->empresas->__get('complemento'));
        $stmt->bindValue(15,$this->empresas->__get('bairro'));
        $stmt->bindValue(16,$this->empresas->__get('localidade'));
        $stmt->bindValue(17,$this->empresas->__get('uf'));
        $stmt->bindValue(18,$this->empresas->__get('id'));

        return $stmt->execute();

    }
}
