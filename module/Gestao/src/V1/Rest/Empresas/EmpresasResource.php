<?php
namespace Gestao\V1\Rest\Empresas;

use Gestao\V1\Entity\Empresas;
use Gestao\V1\Rest\Usuarios\UsuariosResource;
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
        if ($data){
            $this->empresas->__set('razao_social', $data->razao_social);
            $this->empresas->__set('nome_fantasia', $data->nome_fantasia);
            $this->empresas->__set('cnpj', $data->cnpj);
            $this->empresas->__set('inscricao_estadual', $data->inscricao_estadual);
            $this->empresas->__set('telefone', $data->telefone);
            $this->empresas->__set('email', $data->email);
            $this->empresas->__set('situacao', $data->situacao);
            $this->empresas->__set('ramo_atividades', $data->ramo_atividade);
            $this->empresas->__set('natureza_juridica', $data->natureza_juridica);
            $this->empresas->__set('id_usuario', $data->id_usuario);
            $this->empresas->__set('capital_social', $data->capital_social);
            $this->empresas->__set('cep', $data->cep);
            $this->empresas->__set('logradouro', $data->logradouro);
            $this->empresas->__set('complemento', $data->complemento);
            $this->empresas->__set('bairro', $data->bairro);
            $this->empresas->__set('localidade', $data->localidade);
            $this->empresas->__set('uf', $data->uf);
            $this->empresas->setDataAbertura($data->data_abertura);

            // insere um nova empresa
            $this->em->persist($this->empresas);
            $this->em->flush();
        }else {
                echo "erro ao inserir registro";
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
        $resposta = $this->em->getRepository(Empresas::class);
        $empr = $resposta->find($id);

        if($empr){
            $empr->__set('razao_social', $data->razao_social);
            $empr->__set('nome_fantasia', $data->nome_fantasia);
            $empr->__set('cnpj', $data->cnpj);
            $empr->__set('inscricao_estadual', $data->inscricao_estadual);
            $empr->__set('telefone', $data->telefone);
            $empr->__set('email', $data->email);
            $empr->__set('situacao', $data->situacao);
            $empr->__set('ramo_atividades', $data->ramo_atividade);
            $empr->__set('natureza_juridica', $data->natureza_juridica);
            $empr->__set('id_usuario', $data->id_usuario);
            $empr->__set('capital_social', $data->capital_social);
            $empr->__set('cep', $data->cep);
            $empr->__set('logradouro', $data->logradouro);
            $empr->__set('complemento', $data->complemento);
            $empr->__set('bairro', $data->bairro);
            $empr->__set('localidade', $data->localidade);
            $empr->__set('uf', $data->uf);
            $empr->setDataAbertura($data->data_abertura);

            $this->em->merge($empr);
            $this->em->flush();
        }else {
            echo 'erro ao alterar Empresa !';
        }

    }
}
