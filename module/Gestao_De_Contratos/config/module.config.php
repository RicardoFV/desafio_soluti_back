<?php
return [
    'service_manager' => [
        'factories' => [
            \Gestao_De_Contratos\V1\Rest\Usuarios\UsuariosResource::class => \Gestao_De_Contratos\V1\Rest\Usuarios\UsuariosResourceFactory::class,
            \Gestao_De_Contratos\V1\Rest\Empresas\EmpresasResource::class => \Gestao_De_Contratos\V1\Rest\Empresas\EmpresasResourceFactory::class,
            \Gestao_De_Contratos\V1\Rest\Enderecos\EnderecosResource::class => \Gestao_De_Contratos\V1\Rest\Enderecos\EnderecosResourceFactory::class,
            \Gestao_De_Contratos\V1\Rest\Contratos\ContratosResource::class => \Gestao_De_Contratos\V1\Rest\Contratos\ContratosResourceFactory::class,
            \Gestao_De_Contratos\V1\Rest\Administradores\AdministradoresResource::class => \Gestao_De_Contratos\V1\Rest\Administradores\AdministradoresResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'gestao_de_contratos.rest.usuarios' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/usuarios[/:usuarios_id]',
                    'defaults' => [
                        'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller',
                    ],
                ],
            ],
            'gestao_de_contratos.rest.empresas' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/empresas[/:empresas_id]',
                    'defaults' => [
                        'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller',
                    ],
                ],
            ],
            'gestao_de_contratos.rest.enderecos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/enderecos[/:enderecos_id]',
                    'defaults' => [
                        'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller',
                    ],
                ],
            ],
            'gestao_de_contratos.rest.contratos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/contratos[/:contratos_id]',
                    'defaults' => [
                        'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller',
                    ],
                ],
            ],
            'gestao_de_contratos.rest.administradores' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/administradores[/:administradores_id]',
                    'defaults' => [
                        'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'gestao_de_contratos.rest.usuarios',
            1 => 'gestao_de_contratos.rest.empresas',
            2 => 'gestao_de_contratos.rest.enderecos',
            3 => 'gestao_de_contratos.rest.contratos',
            4 => 'gestao_de_contratos.rest.administradores',
        ],
    ],
    'zf-rest' => [
        'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => [
            'listener' => \Gestao_De_Contratos\V1\Rest\Usuarios\UsuariosResource::class,
            'route_name' => 'gestao_de_contratos.rest.usuarios',
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
            'entity_class' => \Gestao_De_Contratos\V1\Rest\Usuarios\UsuariosEntity::class,
            'collection_class' => \Gestao_De_Contratos\V1\Rest\Usuarios\UsuariosCollection::class,
            'service_name' => 'Usuarios',
        ],
        'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => [
            'listener' => \Gestao_De_Contratos\V1\Rest\Empresas\EmpresasResource::class,
            'route_name' => 'gestao_de_contratos.rest.empresas',
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
            'entity_class' => \Gestao_De_Contratos\V1\Rest\Empresas\EmpresasEntity::class,
            'collection_class' => \Gestao_De_Contratos\V1\Rest\Empresas\EmpresasCollection::class,
            'service_name' => 'Empresas',
        ],
        'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => [
            'listener' => \Gestao_De_Contratos\V1\Rest\Enderecos\EnderecosResource::class,
            'route_name' => 'gestao_de_contratos.rest.enderecos',
            'route_identifier_name' => 'enderecos_id',
            'collection_name' => 'enderecos',
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
            'entity_class' => \Gestao_De_Contratos\V1\Rest\Enderecos\EnderecosEntity::class,
            'collection_class' => \Gestao_De_Contratos\V1\Rest\Enderecos\EnderecosCollection::class,
            'service_name' => 'Enderecos',
        ],
        'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => [
            'listener' => \Gestao_De_Contratos\V1\Rest\Contratos\ContratosResource::class,
            'route_name' => 'gestao_de_contratos.rest.contratos',
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
            'entity_class' => \Gestao_De_Contratos\V1\Rest\Contratos\ContratosEntity::class,
            'collection_class' => \Gestao_De_Contratos\V1\Rest\Contratos\ContratosCollection::class,
            'service_name' => 'Contratos',
        ],
        'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => [
            'listener' => \Gestao_De_Contratos\V1\Rest\Administradores\AdministradoresResource::class,
            'route_name' => 'gestao_de_contratos.rest.administradores',
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
            'entity_class' => \Gestao_De_Contratos\V1\Rest\Administradores\AdministradoresEntity::class,
            'collection_class' => \Gestao_De_Contratos\V1\Rest\Administradores\AdministradoresCollection::class,
            'service_name' => 'Administradores',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => 'HalJson',
            'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => 'HalJson',
            'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => 'HalJson',
            'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => 'HalJson',
            'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/json',
            ],
            'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => [
                0 => 'application/vnd.gestao_de_contratos.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Gestao_De_Contratos\V1\Rest\Usuarios\UsuariosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao_De_Contratos\V1\Rest\Usuarios\UsuariosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.usuarios',
                'route_identifier_name' => 'usuarios_id',
                'is_collection' => true,
            ],
            \Gestao_De_Contratos\V1\Rest\Empresas\EmpresasEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.empresas',
                'route_identifier_name' => 'empresas_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao_De_Contratos\V1\Rest\Empresas\EmpresasCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.empresas',
                'route_identifier_name' => 'empresas_id',
                'is_collection' => true,
            ],
            \Gestao_De_Contratos\V1\Rest\Enderecos\EnderecosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.enderecos',
                'route_identifier_name' => 'enderecos_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao_De_Contratos\V1\Rest\Enderecos\EnderecosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.enderecos',
                'route_identifier_name' => 'enderecos_id',
                'is_collection' => true,
            ],
            \Gestao_De_Contratos\V1\Rest\Contratos\ContratosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.contratos',
                'route_identifier_name' => 'contratos_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao_De_Contratos\V1\Rest\Contratos\ContratosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.contratos',
                'route_identifier_name' => 'contratos_id',
                'is_collection' => true,
            ],
            \Gestao_De_Contratos\V1\Rest\Administradores\AdministradoresEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.administradores',
                'route_identifier_name' => 'administradores_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Gestao_De_Contratos\V1\Rest\Administradores\AdministradoresCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'gestao_de_contratos.rest.administradores',
                'route_identifier_name' => 'administradores_id',
                'is_collection' => true,
            ],
        ],
    ],
];
