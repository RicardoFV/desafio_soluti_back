<?php
namespace Gestao\V1\Rest\Empresas;

class EmpresasResourceFactory
{
    public function __invoke($services)
    {
        return new EmpresasResource();
    }
}
