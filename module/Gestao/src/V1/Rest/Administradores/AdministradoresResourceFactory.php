<?php
namespace Gestao\V1\Rest\Administradores;

class AdministradoresResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('Doctrine\ORM\EntityManager');
        return new AdministradoresResource($em);
    }
}
