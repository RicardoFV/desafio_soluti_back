<?php
namespace Gestao\V1\Rest\Contratos;

use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;

class ContratosCollection extends Paginator
{
    public function __construct($contratosCollections)
    {
        parent::__construct(new ArrayAdapter($contratosCollections));
    }
}
