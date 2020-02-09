<?php
namespace Gestao\V1\Rest\Usuarios;

use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;

class UsuariosCollection extends Paginator
{
    public function __construct($usuariosCollection)
    {
        parent::__construct(new ArrayAdapter($usuariosCollection));
    }
}
