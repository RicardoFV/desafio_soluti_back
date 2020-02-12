<?php
namespace Gestao\V1\Rest\Usuarios;

use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Gestao\V1\Entity\Usuarios;

class UsuariosResource extends AbstractResourceListener
{
    private $em;
    private $usuario;
    public function __construct($em)
    {
        $this->em = $em;
        $this->usuario = new Usuarios();
    }
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {

        $this->usuario->__set('nome_Completo',$data->nome_completo);
        $this->usuario->__set('email',$data->email);
        $this->usuario->setSenha($data->senha);

        /*
        $query ="insert into usuarios(nome_completo, senha, email) values(?,?,?)";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->usuario->__get('nome_Completo'));
        $stmt->bindValue(2,$this->usuario->__get('senha'));
        $stmt->bindValue(3,$this->usuario->__get(email));

        return $stmt->execute();
        */
        // insere um novo usuario
        $this->em->persist($this->usuario);
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
        // deleta usuario por id
        $data = $this->em->getRepository(Usuarios::class);
        $user = $data->find($id);
        if ($user){
            $this->em->remove($user);
            $this->em->flush();
            echo 'Usuário removido com sucesso';
        }else{
            echo 'Usuario não encontrado, ou não existe';
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
        $query = "select id, nome_completo, email from usuarios where id=?";
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
        // busca todos os usuarios e retorna uma coletion
        $query = "select id, nome_completo, email from usuarios";
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
        $this->usuario->__set('nome_Completo',$data->nome_completo);
        $this->usuario->__set('email',$data->email);
        $this->usuario->setSenha($data->senha);
        $this->usuario->__set('id',$id);

        $query ="update usuarios set nome_completo=?, senha=?, email=? where id = ?";
        $stmt = $this->em->getConnection()->prepare($query);
        $stmt->bindValue(1,$this->usuario->__get('nome_Completo'));
        $stmt->bindValue(2,$this->usuario->getSenha());
        $stmt->bindValue(3,$this->usuario->__get('email'));
        $stmt->bindValue(4,$this->usuario->__get('id'));

        return $stmt->execute();
    }
}
