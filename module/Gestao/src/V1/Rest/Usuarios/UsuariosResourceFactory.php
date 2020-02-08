<?php
namespace Gestao\V1\Rest\Usuarios;

class UsuariosResourceFactory
{
    public function __invoke($services)
    {
        return new UsuariosResource();
    }
}
