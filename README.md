# Apigility Skeleton Application
==============================

> Sistema de Gestao de contratos - Backend

> Versão usada no projeto: Apigility version 1.5.1 

# Requisitos
------------

Para que consiga executar esse projeto após clonagem , é nessecário que crie uma classe para configuração do banco de dados, acesando o config, dentro da pasta autoload, nela deverá ser criado um arquivo chamado doctrine.local.php.

'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host'     => '',
                    'port'     => '',
                    'user'     => '',
                    'password' => '',
                    'dbname'   => '',
                    'charset' => 'utf8',
                    'driverOptions' => ['SET NAMES utf8']
                ]
            ]
        ]
    ]

Nesse arquivo devera ser colocado as configurações do banco , que nesse caso foi utilizado o "phpMyAdmin". 

Apos a devida configuração, deverá ser execuado o comando para a criação das tabelas. 

para tal execuçao deverá abrir o pront de comando "CMD" e acessar ate a pasta raiz do projeto, conforme descrito abaixo :

- desafio_soluti\desafio_soluti_back

Chegando ate ela deve-se executar o seguinte comando : 

-  php public/index.php orm:schema-tool:create

## Documentação da API

A API esta toda documentada e gerado pelo o Swagger.

para ter acesso, http://localhost:8181/apigility/documentation

lembrando que deverá substituir esse 8181, pela porta que esta rodando o projeto em sua maquina.


Para mais informações, acesse o site : https://apigility.org/
