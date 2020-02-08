<?php
namespace Gestao\V1\Rest\Administradores;

class AdministradoresResourceFactory
{
    public function __invoke($services)
    {
        return new AdministradoresResource();
    }
}
