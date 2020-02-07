<?php
namespace Gestao_De_Contratos\V1\Rest\Administradores;

class AdministradoresResourceFactory
{
    public function __invoke($services)
    {
        return new AdministradoresResource();
    }
}
