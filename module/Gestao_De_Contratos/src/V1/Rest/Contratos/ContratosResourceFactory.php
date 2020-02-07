<?php
namespace Gestao_De_Contratos\V1\Rest\Contratos;

class ContratosResourceFactory
{
    public function __invoke($services)
    {
        return new ContratosResource();
    }
}
