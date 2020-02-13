<?php
return [
    'Gestao\\V1\\Rest\\Contratos\\Controller' => [
        'description' => 'Serviço responsável por cadastrar, deletar, listar e atualizar todas informações referentes a Contratos.',
        'collection' => [
            'description' => 'Trata uma coleção de informações de Contratos.',
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/contratos"
       },
       "first": {
           "href": "/contratos?page={page}"
       },
       "prev": {
           "href": "/contratos?page={page}"
       },
       "next": {
           "href": "/contratos?page={page}"
       },
       "last": {
           "href": "/contratos?page={page}"
       }
   }
   "_embedded": {
       "contratos": [
           {
               "_links": {
                   "self": {
                       "href": "/contratos[/:contratos_id]"
                   }
               }

           }
       ]
   }
}',
                'description' => 'Lista os dados referentes a Contratos e traz a resposta por  id.',
            ],
            'POST' => [
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contratos[/:contratos_id]"
       }
   }

}',
                'description' => 'Insere uma coleção de informações da Empresa.',
            ],
        ],
        'entity' => [
            'description' => 'Tratas as informações referentes a Contratos',
            'GET' => [
                'description' => 'Lista os dados referentes a Contratos e traz a resposta por  id.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contratos[/:contratos_id]"
       }
   }

}',
            ],
            'PATCH' => [
                'description' => 'Altera os dados referentes a Contratos e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contratos[/:contratos_id]"
       }
   }

}',
            ],
            'PUT' => [
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contratos[/:contratos_id]"
       }
   }

}',
                'description' => 'Altera os dados referentes a Contratos e traz a resposta por  id.',
            ],
            'DELETE' => [
                'description' => 'Delete os dados referentes a Contratos e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/contratos[/:contratos_id]"
       }
   }

}',
            ],
        ],
    ],
    'Gestao\\V1\\Rest\\Administradores\\Controller' => [
        'description' => 'Serviço responsável por cadastrar, deletar, listar e atualizar todas informações referentes a Administradores.',
        'collection' => [
            'description' => 'Trata uma coleção de informações de Administradores.',
            'GET' => [
                'description' => 'Lista os dados referentes a Administradores e traz a resposta por  id.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/administradores"
       },
       "first": {
           "href": "/administradores?page={page}"
       },
       "prev": {
           "href": "/administradores?page={page}"
       },
       "next": {
           "href": "/administradores?page={page}"
       },
       "last": {
           "href": "/administradores?page={page}"
       }
   }
   "_embedded": {
       "administradores": [
           {
               "_links": {
                   "self": {
                       "href": "/administradores[/:administradores_id]"
                   }
               }

           }
       ]
   }
}',
            ],
            'POST' => [
                'description' => 'insere os dados referentes a Administradores e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/administradores[/:administradores_id]"
       }
   }

}',
            ],
        ],
        'entity' => [
            'GET' => [
                'description' => 'Lista os dados referentes a Administradores e traz a resposta por  id.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/administradores[/:administradores_id]"
       }
   }

}',
            ],
            'description' => 'Tratas as informações referentes a Administradores',
            'PATCH' => [
                'description' => 'Altera os dados referentes a Administradores e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/administradores[/:administradores_id]"
       }
   }

}',
            ],
            'PUT' => [
                'description' => 'Altera os dados referentes a Administradores e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/administradores[/:administradores_id]"
       }
   }

}',
            ],
            'DELETE' => [
                'description' => 'Deleta os dados referentes a Administradores e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/administradores[/:administradores_id]"
       }
   }

}',
            ],
        ],
    ],
    'Gestao\\V1\\Rest\\Empresas\\Controller' => [
        'description' => 'Serviço responsável por cadastrar, deletar, listar e atualizar todas informações referentes a Empresa.',
        'collection' => [
            'description' => 'Trata uma coleção de informações da Empresa.',
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/empresas"
       },
       "first": {
           "href": "/empresas?page={page}"
       },
       "prev": {
           "href": "/empresas?page={page}"
       },
       "next": {
           "href": "/empresas?page={page}"
       },
       "last": {
           "href": "/empresas?page={page}"
       }
   }
   "_embedded": {
       "empresas": [
           {
               "_links": {
                   "self": {
                       "href": "/empresas[/:empresas_id]"
                   }
               }

           }
       ]
   }
}',
                'description' => 'Retorna os dados referentes ao Usuário',
            ],
            'POST' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/empresas[/:empresas_id]"
       }
   }

}',
                'request' => '{

}',
                'description' => 'Insere informações referente a Empresa e traz u,ma coleção de dados como resposta.',
            ],
        ],
        'entity' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/empresas[/:empresas_id]"
       }
   }

}',
                'description' => 'Lista os dados referentes a Empresa e traz a resposta por  id.',
            ],
            'description' => 'Tratas as informações referentes a Empresa',
            'PATCH' => [
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/empresas[/:empresas_id]"
       }
   }

}',
                'description' => 'Altera os dados referentes a Empresa e traz a resposta por  id.',
            ],
            'PUT' => [
                'description' => 'Altera os dados referentes a Empresa e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/empresas[/:empresas_id]"
       }
   }

}',
            ],
            'DELETE' => [
                'description' => 'Delete os dados referentes a Empresa e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/empresas[/:empresas_id]"
       }
   }

}',
            ],
        ],
    ],
    'Gestao\\V1\\Rest\\Usuarios\\Controller' => [
        'description' => 'Serviço responsável por cadastrar, deletar, listar e atualizar todas informações referentes ao Usuário.',
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuarios"
       },
       "first": {
           "href": "/usuarios?page={page}"
       },
       "prev": {
           "href": "/usuarios?page={page}"
       },
       "next": {
           "href": "/usuarios?page={page}"
       },
       "last": {
           "href": "/usuarios?page={page}"
       }
   }
   "_embedded": {
       "usuarios": [
           {
               "_links": {
                   "self": {
                       "href": "/usuarios[/:usuarios_id]"
                   }
               }

           }
       ]
   }
}',
                'description' => 'Retorna os dados referentes ao Usuário',
            ],
            'description' => 'Trata uma coleção de informações do Usuário.',
            'POST' => [
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuarios[/:usuarios_id]"
       }
   }

}',
                'description' => 'Insere informações referente ao Usuário e traz u,ma coleção de dados como resposta.',
            ],
        ],
        'entity' => [
            'description' => 'Trata as informações referentes ao Usuário',
            'PATCH' => [
                'description' => 'Altera os dados referentes a Usuário e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuarios[/:usuarios_id]"
       }
   }

}',
            ],
            'GET' => [
                'description' => 'Lista os dados referentes ao Usuário e traz a resposta por  id.',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuarios[/:usuarios_id]"
       }
   }

}',
            ],
            'PUT' => [
                'description' => 'Altera os dados referentes a Usuário e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuarios[/:usuarios_id]"
       }
   }

}',
            ],
            'DELETE' => [
                'description' => 'Delete os dados referentes a Usuário e traz a resposta por  id.',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/usuarios[/:usuarios_id]"
       }
   }

}',
            ],
        ],
    ],
];
