<?php
namespace Gestao\V1\Rest\Contratos;

class ContratosResourceFactory
{
    public function __invoke($services)
    {
        return new ContratosResource();
    }
}
