<?php
namespace Gestao\V1\Rest\Usuarios;

class UsuariosResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('Doctrine\ORM\EntityManager');
        return new UsuariosResource($em);
    }
}
