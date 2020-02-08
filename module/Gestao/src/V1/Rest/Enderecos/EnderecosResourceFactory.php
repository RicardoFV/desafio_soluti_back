<?php
namespace Gestao\V1\Rest\Enderecos;

class EnderecosResourceFactory
{
    public function __invoke($services)
    {
        return new EnderecosResource();
    }
}
