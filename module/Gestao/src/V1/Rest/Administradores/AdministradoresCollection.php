<?php
namespace Gestao\V1\Rest\Administradores;

use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;

class AdministradoresCollection extends Paginator
{
    public function __construct($administradoresColletion)
    {
        parent::__construct(new ArrayAdapter($administradoresColletion));
    }
}
