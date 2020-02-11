<?php
namespace Gestao\V1\Rest\Empresas;

use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;

class EmpresasCollection extends Paginator
{
    public function __construct($empresasCollection)
    {
        parent::__construct(new ArrayAdapter($empresasCollection));
    }
}
