<?php
return [
    'doctrine' => [
        'driver' => [
            'Gestao_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => './module/Gestao/src/V1/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Gestao' => 'Gestao_driver',
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \Gestao\V1\Rest\Usuarios\UsuariosResource::class => \Gestao\V1\Rest\Usuarios\UsuariosResourceFactory::class,
            \Gestao\V1\Rest\Empresas\EmpresasResource::class => \Gestao\V1\Rest\Empresas\EmpresasResourceFactory::class,
            \Gestao\V1\Rest\Contratos\ContratosResource::class => \Gestao\V1\Rest\Contratos\ContratosResourceFactory::class,
            \Gestao\V1\Rest\Administradores\AdministradoresResource::class => \Gestao\V1\Rest\Administradores\AdministradoresResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'gestao.rest.usuarios' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuarios[/:usuarios_id]',
                    'defaults' => [
                        'controller' => 'Gestao\\V1\\Rest\\Usuarios\\Controller',
                    ],
                ],
            ],
            'gestao.rest.empresas' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/empresas[/:empresas_id]',
                    'defaults' => [
                        'controller' => 'Gestao\\V1\\Rest\\Empresas\\Controller',
                    ],
                ],
            ],
            'gestao.rest.contratos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/contratos[/:contratos_id]',
                    'defaults' => [
                        'controller' => 'Gestao\\V1\\Rest\\Contratos\\Controller',
                    ],
                ],
            ],
            'gestao.rest.administradores' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/administradores[/:administradores_id]',
                    'defaults' => [
                        'controller' => 'Gestao\\V1\\Rest\\Administradores\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'gestao.rest.usuarios',
            1 => 'gestao.rest.empresas',
            3 => 'gestao.rest.contratos',
            4 => 'gestao.rest.administradores',
        ],
    ],
    'zf-rest' => [
        'Gestao\\V1\\Rest\\Usuarios\\Controller' => [
            'listener' => \Gestao\V1\Rest\Usuarios\UsuariosResource::class,
            'route_name' => 'gestao.rest.usuarios',
            'route_identifier_name' => 'usuarios_id',
            'collection_name' => 'usuarios',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Gestao\V1\Rest\Usuarios\UsuariosEntity::class,
            'collection_class' => \Gestao\V1\Rest\Usuarios\UsuariosCollection::class,
            'service_name' => 'Usuarios',
        ],
        'Gestao\\V1\\Rest\\Empresas\\Controller' => [
            'listener' => \Gestao\V1\Rest\Empresas\EmpresasResource::class,
            'route_name' => 'gestao.rest.empresas',
            'route_identifier_name' => 'empresas_id',
            'collection_name' => 'empresas',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Gestao\V1\Rest\Empresas\EmpresasEntity::class,
            'collection_class' => \Gestao\V1\Rest\Empresas\EmpresasCollection::class,
            'service_name' => 'Empresas',
        ],
        'Gestao\\V1\\Rest\\Contratos\\Controller' => [
            'listener' => \Gestao\V1\Rest\Contratos\ContratosResource::class,
            'route_name' => 'gestao.rest.contratos',
            'route_identifier_name' => 'contratos_id',
            'collection_name' => 'contratos',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Gestao\V1\Rest\Contratos\ContratosEntity::class,
            'collection_class' => \Gestao\V1\Rest\Contratos\ContratosCollection::class,
            'service_name' => 'Contratos',
        ],
        'Gestao\\V1\\Rest\\Administradores\\Controller' => [
            'listener' => \Gestao\V1\Rest\Administradores\AdministradoresResource::class,
            'route_name' => 'gestao.rest.administradores',
            'route_identifier_name' => 'administradores_id',
            'collection_name' => 'administradores',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Gestao\V1\Rest\Administradores\AdministradoresEntity::class,
            'collection_class' => \Gestao\V1\Rest\Administradores\AdministradoresCollection::class,
            'service_name' => 'Administradores',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Gestao\\V1\\Rest\\Usuarios\\Controller' => 'HalJson',
            'Gestao\\V1\\Rest\\Empresas\\Controller' => 'HalJson',
            'Gestao\\V1\\Rest\\Contratos\\Controller' => 'HalJson',
            'Gestao\\V1\\Rest\\Administradores\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Gestao\\V1\\Rest\\Usuarios\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Gestao\\V1\\Rest\\Empresas\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Gestao\\V1\\Rest\\Contratos\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Gestao\\V1\\Rest\\Administradores\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Gestao\\V1\\Rest\\Usuarios\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/json',
            ],
            'Gestao\\V1\\Rest\\Empresas\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/json',
            ],
            'Gestao\\V1\\Rest\\Contratos\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/json',
            ],
            'Gestao\\V1\\Rest\\Administradores\\Controller' => [
                0 => 'application/vnd.gestao.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Gestao\V1\Rest\Usuarios\UsuariosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao\V1\Rest\Usuarios\UsuariosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
                'is_collection' => true,
            ],
            \Gestao\V1\Rest\Empresas\EmpresasEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.empresas',
                'route_identifier_name' => 'empresas_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao\V1\Rest\Empresas\EmpresasCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.empresas',
                'route_identifier_name' => 'empresas_id',
                'is_collection' => true,
            ],
            \Gestao\V1\Rest\Contratos\ContratosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.contratos',
                'route_identifier_name' => 'contratos_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao\V1\Rest\Contratos\ContratosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.contratos',
                'route_identifier_name' => 'contratos_id',
                'is_collection' => true,
            ],
            \Gestao\V1\Rest\Administradores\AdministradoresEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.administradores',
                'route_identifier_name' => 'administradores_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao\V1\Rest\Administradores\AdministradoresCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao.rest.administradores',
                'route_identifier_name' => 'administradores_id',
                'is_collection' => true,
            ],
        ],
    ],
];
