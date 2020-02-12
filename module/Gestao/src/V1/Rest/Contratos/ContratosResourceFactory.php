<?php
namespace Gestao\V1\Rest\Contratos;

class ContratosResourceFactory
{
    public function __invoke($services)
    {
        $em = $services->get('Doctrine\ORM\EntityManager');
        return new ContratosResource($em);
    }
}
