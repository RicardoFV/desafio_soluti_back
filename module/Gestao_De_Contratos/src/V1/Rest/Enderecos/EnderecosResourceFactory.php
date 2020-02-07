<?php
namespace Gestao_De_Contratos\V1\Rest\Enderecos;

class EnderecosResourceFactory
{
    public function __invoke($services)
    {
        return new EnderecosResource();
    }
}
