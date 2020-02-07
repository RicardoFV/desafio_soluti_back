<?php
namespace Gestao_De_Contratos\V1\Rest\Empresas;

class EmpresasResourceFactory
{
    public function __invoke($services)
    {
        return new EmpresasResource();
    }
}
