<?php
namespace Gestao\V1\Rest\Empresas;

class EmpresasResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('Doctrine\ORM\EntityManager');
        return new EmpresasResource($em);
    }
}
