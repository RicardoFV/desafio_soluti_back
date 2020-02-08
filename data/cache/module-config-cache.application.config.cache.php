<?php
return array (
  'service_manager' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory',
      1 => 'Zend\\Form\\FormAbstractServiceFactory',
      2 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
      3 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
      4 => 'ZF\\Apigility\\DbConnectedResourceAbstractFactory',
      5 => 'ZF\\Apigility\\TableGatewayAbstractFactory',
      'DoctrineModule' => 'DoctrineModule\\ServiceFactory\\AbstractDoctrineServiceFactory',
      6 => 'ZF\\Apigility\\Doctrine\\Server\\Resource\\DoctrineResourceFactory',
    ),
    'factories' => 
    array (
      'Zend\\Cache\\PatternPluginManager' => 'Zend\\Cache\\Service\\PatternPluginManagerFactory',
      'Zend\\Cache\\Storage\\AdapterPluginManager' => 'Zend\\Cache\\Service\\StorageAdapterPluginManagerFactory',
      'Zend\\Cache\\Storage\\PluginManager' => 'Zend\\Cache\\Service\\StoragePluginManagerFactory',
      'FormAnnotationBuilder' => 'Zend\\Form\\Annotation\\AnnotationBuilderFactory',
      'FormElementManager' => 'Zend\\Form\\FormElementManagerFactory',
      'ConsoleAdapter' => 'Zend\\Mvc\\Console\\Service\\ConsoleAdapterFactory',
      'ConsoleExceptionStrategy' => 'Zend\\Mvc\\Console\\Service\\ConsoleExceptionStrategyFactory',
      'ConsoleRouteNotFoundStrategy' => 'Zend\\Mvc\\Console\\Service\\ConsoleRouteNotFoundStrategyFactory',
      'ConsoleRouter' => 'Zend\\Mvc\\Console\\Router\\ConsoleRouterFactory',
      'ConsoleViewManager' => 'Zend\\Mvc\\Console\\Service\\ConsoleViewManagerFactory',
      'Zend\\Mvc\\Console\\View\\DefaultRenderingStrategy' => 'Zend\\Mvc\\Console\\Service\\DefaultRenderingStrategyFactory',
      'Zend\\Mvc\\Console\\View\\Renderer' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Db\\Adapter\\AdapterInterface' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
      'Zend\\Filter\\FilterPluginManager' => 'Zend\\Filter\\FilterPluginManagerFactory',
      'Zend\\Hydrator\\HydratorPluginManager' => 'Zend\\Hydrator\\HydratorPluginManagerFactory',
      'Zend\\InputFilter\\InputFilterPluginManager' => 'Zend\\InputFilter\\InputFilterPluginManagerFactory',
      'Zend\\Paginator\\AdapterPluginManager' => 'Zend\\Paginator\\AdapterPluginManagerFactory',
      'Zend\\Paginator\\ScrollingStylePluginManager' => 'Zend\\Paginator\\ScrollingStylePluginManagerFactory',
      'Zend\\Router\\Http\\TreeRouteStack' => 'Zend\\Router\\Http\\HttpRouterFactory',
      'Zend\\Router\\RoutePluginManager' => 'Zend\\Router\\RoutePluginManagerFactory',
      'Zend\\Router\\RouteStackInterface' => 'Zend\\Router\\RouterFactory',
      'Zend\\Validator\\ValidatorPluginManager' => 'Zend\\Validator\\ValidatorPluginManagerFactory',
      'ZF\\Apigility\\MvcAuth\\UnauthenticatedListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\MvcAuth\\UnauthorizedListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\ApiFactory' => 'ZF\\Apigility\\Documentation\\Factory\\ApiFactoryFactory',
      'ZF\\ApiProblem\\Listener\\ApiProblemListener' => 'ZF\\ApiProblem\\Factory\\ApiProblemListenerFactory',
      'ZF\\ApiProblem\\Listener\\RenderErrorListener' => 'ZF\\ApiProblem\\Factory\\RenderErrorListenerFactory',
      'ZF\\ApiProblem\\Listener\\SendApiProblemResponseListener' => 'ZF\\ApiProblem\\Factory\\SendApiProblemResponseListenerFactory',
      'ZF\\ApiProblem\\View\\ApiProblemRenderer' => 'ZF\\ApiProblem\\Factory\\ApiProblemRendererFactory',
      'ZF\\ApiProblem\\View\\ApiProblemStrategy' => 'ZF\\ApiProblem\\Factory\\ApiProblemStrategyFactory',
      'ZF\\Configuration\\ConfigResource' => 'ZF\\Configuration\\Factory\\ConfigResourceFactory',
      'ZF\\Configuration\\ConfigResourceFactory' => 'ZF\\Configuration\\Factory\\ResourceFactoryFactory',
      'ZF\\Configuration\\ConfigWriter' => 'ZF\\Configuration\\Factory\\ConfigWriterFactory',
      'ZF\\Configuration\\ModuleUtils' => 'ZF\\Configuration\\Factory\\ModuleUtilsFactory',
      'ZF\\OAuth2\\Adapter\\PdoAdapter' => 'ZF\\OAuth2\\Factory\\PdoAdapterFactory',
      'ZF\\OAuth2\\Adapter\\IbmDb2Adapter' => 'ZF\\OAuth2\\Factory\\IbmDb2AdapterFactory',
      'ZF\\OAuth2\\Adapter\\MongoAdapter' => 'ZF\\OAuth2\\Factory\\MongoAdapterFactory',
      'ZF\\OAuth2\\Provider\\UserId\\AuthenticationService' => 'ZF\\OAuth2\\Provider\\UserId\\AuthenticationServiceFactory',
      'ZF\\OAuth2\\Service\\OAuth2Server' => 'ZF\\MvcAuth\\Factory\\NamedOAuth2ServerFactory',
      'ZF\\MvcAuth\\Authentication' => 'ZF\\MvcAuth\\Factory\\AuthenticationServiceFactory',
      'ZF\\MvcAuth\\ApacheResolver' => 'ZF\\MvcAuth\\Factory\\ApacheResolverFactory',
      'ZF\\MvcAuth\\FileResolver' => 'ZF\\MvcAuth\\Factory\\FileResolverFactory',
      'ZF\\MvcAuth\\Authentication\\DefaultAuthenticationListener' => 'ZF\\MvcAuth\\Factory\\DefaultAuthenticationListenerFactory',
      'ZF\\MvcAuth\\Authentication\\AuthHttpAdapter' => 'ZF\\MvcAuth\\Factory\\DefaultAuthHttpAdapterFactory',
      'ZF\\MvcAuth\\Authorization\\AclAuthorization' => 'ZF\\MvcAuth\\Factory\\AclAuthorizationFactory',
      'ZF\\MvcAuth\\Authorization\\DefaultAuthorizationListener' => 'ZF\\MvcAuth\\Factory\\DefaultAuthorizationListenerFactory',
      'ZF\\MvcAuth\\Authorization\\DefaultResourceResolverListener' => 'ZF\\MvcAuth\\Factory\\DefaultResourceResolverListenerFactory',
      'Zend\\Authentication\\Storage\\NonPersistent' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\MvcAuth\\Authentication\\DefaultAuthenticationPostListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\MvcAuth\\Authorization\\DefaultAuthorizationPostListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Hal\\Extractor\\LinkExtractor' => 'ZF\\Hal\\Factory\\LinkExtractorFactory',
      'ZF\\Hal\\Extractor\\LinkCollectionExtractor' => 'ZF\\Hal\\Factory\\LinkCollectionExtractorFactory',
      'ZF\\Hal\\HalConfig' => 'ZF\\Hal\\Factory\\HalConfigFactory',
      'ZF\\Hal\\JsonRenderer' => 'ZF\\Hal\\Factory\\HalJsonRendererFactory',
      'ZF\\Hal\\JsonStrategy' => 'ZF\\Hal\\Factory\\HalJsonStrategyFactory',
      'ZF\\Hal\\Link\\LinkUrlBuilder' => 'ZF\\Hal\\Factory\\LinkUrlBuilderFactory',
      'ZF\\Hal\\MetadataMap' => 'ZF\\Hal\\Factory\\MetadataMapFactory',
      'ZF\\Hal\\RendererOptions' => 'ZF\\Hal\\Factory\\RendererOptionsFactory',
      'ZF\\ContentNegotiation\\ContentTypeListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Request' => 'ZF\\ContentNegotiation\\Factory\\RequestFactory',
      'ZF\\ContentNegotiation\\AcceptListener' => 'ZF\\ContentNegotiation\\Factory\\AcceptListenerFactory',
      'ZF\\ContentNegotiation\\AcceptFilterListener' => 'ZF\\ContentNegotiation\\Factory\\AcceptFilterListenerFactory',
      'ZF\\ContentNegotiation\\ContentTypeFilterListener' => 'ZF\\ContentNegotiation\\Factory\\ContentTypeFilterListenerFactory',
      'ZF\\ContentNegotiation\\ContentNegotiationOptions' => 'ZF\\ContentNegotiation\\Factory\\ContentNegotiationOptionsFactory',
      'ZF\\ContentNegotiation\\HttpMethodOverrideListener' => 'ZF\\ContentNegotiation\\Factory\\HttpMethodOverrideListenerFactory',
      'ZF\\ContentValidation\\ContentValidationListener' => 'ZF\\ContentValidation\\ContentValidationListenerFactory',
      'ZF\\Rest\\OptionsListener' => 'ZF\\Rest\\Factory\\OptionsListenerFactory',
      'ZF\\Rpc\\OptionsListener' => 'ZF\\Rpc\\Factory\\OptionsListenerFactory',
      'ZF\\Versioning\\AcceptListener' => 'ZF\\Versioning\\Factory\\AcceptListenerFactory',
      'ZF\\Versioning\\ContentTypeListener' => 'ZF\\Versioning\\Factory\\ContentTypeListenerFactory',
      'ZF\\Versioning\\VersionListener' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'doctrine.cli' => 'DoctrineModule\\Service\\CliFactory',
      'ZfApigilityDoctrineQueryProviderManager' => 'ZF\\Apigility\\Doctrine\\Server\\Query\\Provider\\Service\\QueryProviderManagerFactory',
      'ZfApigilityDoctrineQueryCreateFilterManager' => 'ZF\\Apigility\\Doctrine\\Server\\Query\\CreateFilter\\Service\\QueryCreateFilterManagerFactory',
      'DoctrineORMModule\\CliConfigurator' => 'DoctrineORMModule\\Service\\CliConfiguratorFactory',
      'Doctrine\\ORM\\EntityManager' => 'DoctrineORMModule\\Service\\EntityManagerAliasCompatFactory',
      'ZfrCors\\Mvc\\CorsRequestListener' => 'ZfrCors\\Factory\\CorsRequestListenerFactory',
      'ZfrCors\\Options\\CorsOptions' => 'ZfrCors\\Factory\\CorsOptionsFactory',
      'ZfrCors\\Service\\CorsService' => 'ZfrCors\\Factory\\CorsServiceFactory',
      'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\UsuariosResource' => 'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\UsuariosResourceFactory',
      'Gestao_De_Contratos\\V1\\Rest\\Empresas\\EmpresasResource' => 'Gestao_De_Contratos\\V1\\Rest\\Empresas\\EmpresasResourceFactory',
      'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\EnderecosResource' => 'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\EnderecosResourceFactory',
      'Gestao_De_Contratos\\V1\\Rest\\Contratos\\ContratosResource' => 'Gestao_De_Contratos\\V1\\Rest\\Contratos\\ContratosResourceFactory',
      'Gestao_De_Contratos\\V1\\Rest\\Administradores\\AdministradoresResource' => 'Gestao_De_Contratos\\V1\\Rest\\Administradores\\AdministradoresResourceFactory',
    ),
    'aliases' => 
    array (
      'Zend\\Form\\Annotation\\FormAnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\FormElementManager' => 'FormElementManager',
      'console' => 'ConsoleAdapter',
      'Console' => 'ConsoleAdapter',
      'ConsoleDefaultRenderingStrategy' => 'Zend\\Mvc\\Console\\View\\DefaultRenderingStrategy',
      'ConsoleRenderer' => 'Zend\\Mvc\\Console\\View\\Renderer',
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterInterface',
      'FilterManager' => 'Zend\\Filter\\FilterPluginManager',
      'HydratorManager' => 'Zend\\Hydrator\\HydratorPluginManager',
      'InputFilterManager' => 'Zend\\InputFilter\\InputFilterPluginManager',
      'HttpRouter' => 'Zend\\Router\\Http\\TreeRouteStack',
      'router' => 'Zend\\Router\\RouteStackInterface',
      'Router' => 'Zend\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Zend\\Router\\RoutePluginManager',
      'ValidatorManager' => 'Zend\\Validator\\ValidatorPluginManager',
      'ZF\\ApiProblem\\ApiProblemListener' => 'ZF\\ApiProblem\\Listener\\ApiProblemListener',
      'ZF\\ApiProblem\\RenderErrorListener' => 'ZF\\ApiProblem\\Listener\\RenderErrorListener',
      'ZF\\ApiProblem\\ApiProblemRenderer' => 'ZF\\ApiProblem\\View\\ApiProblemRenderer',
      'ZF\\ApiProblem\\ApiProblemStrategy' => 'ZF\\ApiProblem\\View\\ApiProblemStrategy',
      'ZF\\OAuth2\\Provider\\UserId' => 'ZF\\OAuth2\\Provider\\UserId\\AuthenticationService',
      'authentication' => 'ZF\\MvcAuth\\Authentication',
      'authorization' => 'ZF\\MvcAuth\\Authorization\\AuthorizationInterface',
      'ZF\\MvcAuth\\Authorization\\AuthorizationInterface' => 'ZF\\MvcAuth\\Authorization\\AclAuthorization',
    ),
    'delegators' => 
    array (
      'ControllerManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ControllerManagerDelegatorFactory',
      ),
      'Request' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleRequestDelegatorFactory',
      ),
      'Response' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleResponseDelegatorFactory',
      ),
      'Zend\\Router\\RouteStackInterface' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Router\\ConsoleRouterDelegatorFactory',
      ),
      'Zend\\Mvc\\SendResponseListener' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleResponseSenderDelegatorFactory',
      ),
      'ViewHelperManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleViewHelperManagerDelegatorFactory',
      ),
      'ViewManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ViewManagerDelegatorFactory',
      ),
      'ZF\\MvcAuth\\Authentication\\DefaultAuthenticationListener' => 
      array (
        0 => 'ZF\\MvcAuth\\Factory\\AuthenticationAdapterDelegatorFactory',
      ),
    ),
    'invokables' => 
    array (
      'ZF\\Rest\\RestParametersListener' => 'ZF\\Rest\\Listener\\RestParametersListener',
      'DoctrineModule\\Authentication\\Storage\\Session' => 'Zend\\Authentication\\Storage\\Session',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\DateTimeField' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\DateTimeField',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\DefaultRelation' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\DefaultRelation',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedCollection' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\EmbeddedCollection',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedField' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\EmbeddedField',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\ReferencedCollection' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\ReferencedCollection',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\ReferencedField' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\ReferencedField',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedReferenceCollection' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\EmbeddedReferenceCollection',
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedReferenceField' => 'Phpro\\DoctrineHydrationModule\\Hydrator\\ODM\\MongoDB\\Strategy\\EmbeddedReferenceField',
      'doctrine.dbal_cmd.runsql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
      'doctrine.dbal_cmd.import' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand',
      'doctrine.orm_cmd.clear_cache_metadata' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand',
      'doctrine.orm_cmd.clear_cache_result' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand',
      'doctrine.orm_cmd.clear_cache_query' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand',
      'doctrine.orm_cmd.schema_tool_create' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand',
      'doctrine.orm_cmd.schema_tool_update' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand',
      'doctrine.orm_cmd.schema_tool_drop' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand',
      'doctrine.orm_cmd.convert_d1_schema' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ConvertDoctrine1SchemaCommand',
      'doctrine.orm_cmd.generate_entities' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateEntitiesCommand',
      'doctrine.orm_cmd.generate_proxies' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateProxiesCommand',
      'doctrine.orm_cmd.convert_mapping' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand',
      'doctrine.orm_cmd.run_dql' => 'Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand',
      'doctrine.orm_cmd.validate_schema' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand',
      'doctrine.orm_cmd.info' => 'Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand',
      'doctrine.orm_cmd.ensure_production_settings' => 'Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand',
      'doctrine.orm_cmd.generate_repositories' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateRepositoriesCommand',
    ),
    'shared' => 
    array (
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\DateTimeField' => false,
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\DefaultRelation' => false,
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedCollection' => false,
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedField' => false,
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\ReferencedCollection' => false,
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\ReferencedField' => false,
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedReferenceCollection' => false,
      'DoctrineHydrationModule\\Strategy\\ODM\\MongoDB\\EmbeddedReferenceField' => false,
    ),
  ),
  'view_helpers' => 
  array (
    'aliases' => 
    array (
      'form' => 'Zend\\Form\\View\\Helper\\Form',
      'Form' => 'Zend\\Form\\View\\Helper\\Form',
      'formbutton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'form_button' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'FormButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formcaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'form_captcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'formCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'FormCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'captchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha/dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'CaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formcaptchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'form_captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'FormCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha/figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'CaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formcaptchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'form_captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'FormCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha/image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'CaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formcaptchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'form_captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'FormCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha/recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'CaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcaptcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'form_captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'FormCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'form_checkbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'FormCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formcollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'form_collection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'FormCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formcolor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'form_color' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'FormColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formdate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'form_date' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'FormDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formdatetime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'form_date_time' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'FormDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formdatetimelocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'form_date_time_local' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'FormDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formdatetimeselect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'form_date_time_select' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'FormDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formdateselect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_date_select' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'formDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'FormDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_element' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formelement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'FormElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'form_element_errors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formelementerrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'FormElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'form_email' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formemail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'FormEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'form_file' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'FormFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfileapcprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'form_file_apc_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'FormFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formfilesessionprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'form_file_session_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'FormFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formfileuploadprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'form_file_upload_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'FormFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formhidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'form_hidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'FormHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formimage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'form_image' => 'Zend\\Form\\View\\Helper\\FormImage',
      'formImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'FormImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'forminput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'form_input' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'FormInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formlabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'form_label' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'FormLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formmonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'form_month' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'FormMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formmonthselect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'form_month_select' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'FormMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formmulticheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'form_multi_checkbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'FormMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formnumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'form_number' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'FormNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formpassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'form_password' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'FormPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formradio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'form_radio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'FormRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formrange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'form_range' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'FormRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formreset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'form_reset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'FormReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formrow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'form_row' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'FormRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formsearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'form_search' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'FormSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formselect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'form_select' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'FormSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formsubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'form_submit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'FormSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formtel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'form_tel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'FormTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formtext' => 'Zend\\Form\\View\\Helper\\FormText',
      'form_text' => 'Zend\\Form\\View\\Helper\\FormText',
      'formText' => 'Zend\\Form\\View\\Helper\\FormText',
      'FormText' => 'Zend\\Form\\View\\Helper\\FormText',
      'formtextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'form_text_area' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'FormTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formtime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'form_time' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'FormTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formurl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'form_url' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'FormUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formweek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'form_week' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'formWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'FormWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'agacceptheaders' => 'ZF\\Apigility\\Documentation\\View\\AgAcceptHeaders',
      'agAcceptHeaders' => 'ZF\\Apigility\\Documentation\\View\\AgAcceptHeaders',
      'agcontenttypeheaders' => 'ZF\\Apigility\\Documentation\\View\\AgContentTypeHeaders',
      'agContentTypeHeaders' => 'ZF\\Apigility\\Documentation\\View\\AgContentTypeHeaders',
      'agservicepath' => 'ZF\\Apigility\\Documentation\\View\\AgServicePath',
      'agServicePath' => 'ZF\\Apigility\\Documentation\\View\\AgServicePath',
      'agstatuscodes' => 'ZF\\Apigility\\Documentation\\View\\AgStatusCodes',
      'agStatusCodes' => 'ZF\\Apigility\\Documentation\\View\\AgStatusCodes',
      'agtransformdescription' => 'ZF\\Apigility\\Documentation\\View\\AgTransformDescription',
      'agTransformDescription' => 'ZF\\Apigility\\Documentation\\View\\AgTransformDescription',
    ),
    'factories' => 
    array (
      'Zend\\Form\\View\\Helper\\Form' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormButton' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Dumb' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Figlet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Image' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCollection' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormColor' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDate' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeLocal' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElement' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElementErrors' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormEmail' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormFile' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormHidden' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormImage' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormInput' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormLabel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonth' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonthSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMultiCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormNumber' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormPassword' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRadio' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRange' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormReset' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRow' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSearch' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSubmit' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormText' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTextarea' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormUrl' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormWeek' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgAcceptHeaders' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgContentTypeHeaders' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgServicePath' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgStatusCodes' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Documentation\\View\\AgTransformDescription' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Hal' => 'ZF\\Hal\\Factory\\HalViewHelperFactory',
    ),
  ),
  'controller_plugins' => 
  array (
    'aliases' => 
    array (
      'CreateConsoleNotFoundModel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'createConsoleNotFoundModel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'createconsolenotfoundmodel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'Zend\\Mvc\\Controller\\Plugin\\CreateConsoleNotFoundModel::class' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'getidentity' => 'ZF\\MvcAuth\\Identity\\IdentityPlugin',
      'getIdentity' => 'ZF\\MvcAuth\\Identity\\IdentityPlugin',
      'routeParam' => 'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParam',
      'queryParam' => 'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParam',
      'bodyParam' => 'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParam',
      'routeParams' => 'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParams',
      'queryParams' => 'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParams',
      'bodyParams' => 'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParams',
      'getinputfilter' => 'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin',
      'getInputfilter' => 'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin',
      'getInputFilter' => 'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin',
    ),
    'factories' => 
    array (
      'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\MvcAuth\\Identity\\IdentityPlugin' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Hal' => 'ZF\\Hal\\Factory\\HalControllerPluginFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParam' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParam' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParam' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\RouteParams' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\QueryParams' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentNegotiation\\ControllerPlugin\\BodyParams' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\ContentValidation\\InputFilter\\InputFilterPlugin' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'console' => 
  array (
    'router' => 
    array (
      'routes' => 
      array (
        'doctrine_cli' => 
        array (
          'type' => 'symfony_cli',
        ),
      ),
    ),
  ),
  'input_filters' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\InputFilter\\InputFilterAbstractServiceFactory',
      1 => 'Zend\\InputFilter\\InputFilterAbstractServiceFactory',
    ),
  ),
  'route_manager' => 
  array (
    'factories' => 
    array (
      'symfony_cli' => 'DoctrineModule\\Service\\SymfonyCliRouteFactory',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'zf-apigility' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/apigility',
        ),
        'may_terminate' => false,
        'child_routes' => 
        array (
          'documentation' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/documentation[/:api[-v:version][/:service]]',
              'constraints' => 
              array (
                'api' => '[a-zA-Z][a-zA-Z0-9_.%]+',
              ),
              'defaults' => 
              array (
                'controller' => 'ZF\\Apigility\\Documentation\\Controller',
                'action' => 'show',
              ),
            ),
          ),
        ),
      ),
      'oauth' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/oauth',
          'defaults' => 
          array (
            'controller' => 'ZF\\OAuth2\\Controller\\Auth',
            'action' => 'token',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'revoke' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/revoke',
              'defaults' => 
              array (
                'action' => 'revoke',
              ),
            ),
          ),
          'authorize' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/authorize',
              'defaults' => 
              array (
                'action' => 'authorize',
              ),
            ),
          ),
          'resource' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/resource',
              'defaults' => 
              array (
                'action' => 'resource',
              ),
            ),
          ),
          'code' => 
          array (
            'type' => 'literal',
            'options' => 
            array (
              'route' => '/receivecode',
              'defaults' => 
              array (
                'action' => 'receiveCode',
              ),
            ),
          ),
        ),
      ),
      'doctrine_orm_module_yuml' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/ocra_service_manager_yuml',
          'defaults' => 
          array (
            'controller' => 'DoctrineORMModule\\Yuml\\YumlController',
            'action' => 'index',
          ),
        ),
      ),
      'home' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'gestao_de_contratos.rest.usuarios' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '[/v:version]/usuarios[/:usuarios_id]',
          'defaults' => 
          array (
            'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller',
            'version' => 1,
          ),
          'constraints' => 
          array (
            'version' => '\\d+',
          ),
        ),
      ),
      'gestao_de_contratos.rest.empresas' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '[/v:version]/empresas[/:empresas_id]',
          'defaults' => 
          array (
            'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller',
            'version' => 1,
          ),
          'constraints' => 
          array (
            'version' => '\\d+',
          ),
        ),
      ),
      'gestao_de_contratos.rest.enderecos' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '[/v:version]/enderecos[/:enderecos_id]',
          'defaults' => 
          array (
            'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller',
            'version' => 1,
          ),
          'constraints' => 
          array (
            'version' => '\\d+',
          ),
        ),
      ),
      'gestao_de_contratos.rest.contratos' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '[/v:version]/contratos[/:contratos_id]',
          'defaults' => 
          array (
            'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller',
            'version' => 1,
          ),
          'constraints' => 
          array (
            'version' => '\\d+',
          ),
        ),
      ),
      'gestao_de_contratos.rest.administradores' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '[/v:version]/administradores[/:administradores_id]',
          'defaults' => 
          array (
            'controller' => 'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller',
            'version' => 1,
          ),
          'constraints' => 
          array (
            'version' => '\\d+',
          ),
        ),
      ),
    ),
  ),
  'asset_manager' => 
  array (
    'resolver_configs' => 
    array (
      'paths' => 
      array (
        0 => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\zfcampus\\zf-apigility\\config/../asset',
      ),
    ),
  ),
  'zf-apigility' => 
  array (
    'db-connected' => 
    array (
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'ZF\\Apigility\\Documentation\\Controller' => 'ZF\\Apigility\\Documentation\\ControllerFactory',
      'ZF\\OAuth2\\Controller\\Auth' => 'ZF\\OAuth2\\Factory\\AuthControllerFactory',
      'DoctrineModule\\Controller\\Cli' => 'DoctrineModule\\Service\\CliControllerFactory',
      'Application\\Controller\\IndexController' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
    'abstract_factories' => 
    array (
      0 => 'ZF\\Rest\\Factory\\RestControllerFactory',
      1 => 'ZF\\Rpc\\Factory\\RpcControllerFactory',
    ),
  ),
  'zf-content-negotiation' => 
  array (
    'controllers' => 
    array (
      'ZF\\Apigility\\Documentation\\Controller' => 'Documentation',
      'ZF\\OAuth2\\Controller\\Auth' => 
      array (
        'ZF\\ContentNegotiation\\JsonModel' => 
        array (
          0 => 'application/json',
          1 => 'application/*+json',
        ),
        'Zend\\View\\Model\\ViewModel' => 
        array (
          0 => 'text/html',
          1 => 'application/xhtml+xml',
        ),
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => 'HalJson',
      'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => 'HalJson',
      'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => 'HalJson',
      'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => 'HalJson',
      'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => 'HalJson',
    ),
    'accept_whitelist' => 
    array (
      'ZF\\Apigility\\Documentation\\Controller' => 
      array (
        0 => 'application/vnd.swagger+json',
        1 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/hal+json',
        2 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/hal+json',
        2 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/hal+json',
        2 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/hal+json',
        2 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/hal+json',
        2 => 'application/json',
      ),
    ),
    'selectors' => 
    array (
      'Documentation' => 
      array (
        'Zend\\View\\Model\\ViewModel' => 
        array (
          0 => 'text/html',
          1 => 'application/xhtml+xml',
        ),
        'ZF\\Apigility\\Documentation\\JsonModel' => 
        array (
          0 => 'application/json',
        ),
      ),
      'HalJson' => 
      array (
        'ZF\\Hal\\View\\HalJsonModel' => 
        array (
          0 => 'application/json',
          1 => 'application/*+json',
        ),
      ),
      'Json' => 
      array (
        'ZF\\ContentNegotiation\\JsonModel' => 
        array (
          0 => 'application/json',
          1 => 'application/*+json',
        ),
      ),
    ),
    'content_type_whitelist' => 
    array (
      'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/json',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => 
      array (
        0 => 'application/vnd.gestao_de_contratos.v1+json',
        1 => 'application/json',
      ),
    ),
    'x_http_method_override_enabled' => false,
    'http_override_methods' => 
    array (
    ),
  ),
  'view_manager' => 
  array (
    'template_path_stack' => 
    array (
      0 => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\zfcampus\\zf-apigility-documentation\\config/../view',
      1 => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\zfcampus\\zf-oauth2\\config/../view',
      'zf-apigility-doctrine' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\zfcampus\\zf-apigility-doctrine\\config/../view',
      2 => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\module\\Application\\config/../view',
    ),
    'display_exceptions' => true,
    'template_map' => 
    array (
      'oauth/authorize' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\zfcampus\\zf-oauth2\\config/../view/zf/auth/authorize.phtml',
      'oauth/receive-code' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\zfcampus\\zf-oauth2\\config/../view/zf/auth/receive-code.phtml',
      'zend-developer-tools/toolbar/doctrine-orm-queries' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\doctrine\\doctrine-orm-module\\config/../view/zend-developer-tools/toolbar/doctrine-orm-queries.phtml',
      'zend-developer-tools/toolbar/doctrine-orm-mappings' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\vendor\\doctrine\\doctrine-orm-module\\config/../view/zend-developer-tools/toolbar/doctrine-orm-mappings.phtml',
      'layout/layout' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\module\\Application\\config/../view/layout/layout.phtml',
      'application/index/index' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\module\\Application\\config/../view/application/index/index.phtml',
      'error/404' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\module\\Application\\config/../view/error/404.phtml',
      'error/index' => 'C:\\Projetos\\desafio_soluti\\desafio_soluti_back\\module\\Application\\config/../view/error/index.phtml',
    ),
    'display_not_found_reason' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'strategies' => 
    array (
      0 => 'ViewJsonStrategy',
    ),
  ),
  'zf-api-problem' => 
  array (
  ),
  'zf-configuration' => 
  array (
    'config_file' => 'config/autoload/development.php',
  ),
  'zf-oauth2' => 
  array (
    'grant_types' => 
    array (
      'client_credentials' => true,
      'authorization_code' => true,
      'password' => true,
      'refresh_token' => true,
      'jwt' => true,
    ),
    'api_problem_error_response' => true,
  ),
  'zf-mvc-auth' => 
  array (
    'authentication' => 
    array (
    ),
    'authorization' => 
    array (
      'deny_by_default' => false,
    ),
  ),
  'zf-hal' => 
  array (
    'renderer' => 
    array (
    ),
    'metadata_map' => 
    array (
      'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\UsuariosEntity' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.usuarios',
        'route_identifier_name' => 'usuarios_id',
        'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\UsuariosCollection' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.usuarios',
        'route_identifier_name' => 'usuarios_id',
        'is_collection' => true,
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Empresas\\EmpresasEntity' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.empresas',
        'route_identifier_name' => 'empresas_id',
        'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Empresas\\EmpresasCollection' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.empresas',
        'route_identifier_name' => 'empresas_id',
        'is_collection' => true,
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\EnderecosEntity' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.enderecos',
        'route_identifier_name' => 'enderecos_id',
        'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\EnderecosCollection' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.enderecos',
        'route_identifier_name' => 'enderecos_id',
        'is_collection' => true,
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Contratos\\ContratosEntity' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.contratos',
        'route_identifier_name' => 'contratos_id',
        'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Contratos\\ContratosCollection' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.contratos',
        'route_identifier_name' => 'contratos_id',
        'is_collection' => true,
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Administradores\\AdministradoresEntity' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.administradores',
        'route_identifier_name' => 'administradores_id',
        'hydrator' => 'Zend\\Hydrator\\ArraySerializable',
      ),
      'Gestao_De_Contratos\\V1\\Rest\\Administradores\\AdministradoresCollection' => 
      array (
        'entity_identifier_name' => 'id',
        'route_name' => 'gestao_de_contratos.rest.administradores',
        'route_identifier_name' => 'administradores_id',
        'is_collection' => true,
      ),
    ),
    'options' => 
    array (
      'use_proxy' => false,
    ),
  ),
  'filters' => 
  array (
    'factories' => 
    array (
      'Zend\\Filter\\File\\RenameUpload' => 'ZF\\ContentNegotiation\\Factory\\RenameUploadFilterFactory',
      'zendfilterfilerenameupload' => 'ZF\\ContentNegotiation\\Factory\\RenameUploadFilterFactory',
    ),
  ),
  'validators' => 
  array (
    'factories' => 
    array (
      'Zend\\Validator\\File\\UploadFile' => 'ZF\\ContentNegotiation\\Factory\\UploadFileValidatorFactory',
      'zendvalidatorfileuploadfile' => 'ZF\\ContentNegotiation\\Factory\\UploadFileValidatorFactory',
      'ZF\\ContentValidation\\Validator\\DbRecordExists' => 'ZF\\ContentValidation\\Validator\\Db\\RecordExistsFactory',
      'ZF\\ContentValidation\\Validator\\DbNoRecordExists' => 'ZF\\ContentValidation\\Validator\\Db\\NoRecordExistsFactory',
      'ZF\\Apigility\\Doctrine\\Server\\Validator\\NoObjectExists' => 'ZF\\Apigility\\Doctrine\\Server\\Validator\\NoObjectExistsFactory',
      'ZF\\Apigility\\Doctrine\\Server\\Validator\\ObjectExists' => 'ZF\\Apigility\\Doctrine\\Server\\Validator\\ObjectExistsFactory',
    ),
  ),
  'input_filter_specs' => 
  array (
  ),
  'zf-content-validation' => 
  array (
    'methods_without_bodies' => 
    array (
    ),
  ),
  'zf-rest' => 
  array (
    'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\Controller' => 
    array (
      'listener' => 'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\UsuariosResource',
      'route_name' => 'gestao_de_contratos.rest.usuarios',
      'route_identifier_name' => 'usuarios_id',
      'collection_name' => 'usuarios',
      'entity_http_methods' => 
      array (
        0 => 'GET',
        1 => 'PATCH',
        2 => 'PUT',
        3 => 'DELETE',
      ),
      'collection_http_methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
      ),
      'collection_query_whitelist' => 
      array (
      ),
      'page_size' => 25,
      'page_size_param' => NULL,
      'entity_class' => 'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\UsuariosEntity',
      'collection_class' => 'Gestao_De_Contratos\\V1\\Rest\\Usuarios\\UsuariosCollection',
      'service_name' => 'Usuarios',
    ),
    'Gestao_De_Contratos\\V1\\Rest\\Empresas\\Controller' => 
    array (
      'listener' => 'Gestao_De_Contratos\\V1\\Rest\\Empresas\\EmpresasResource',
      'route_name' => 'gestao_de_contratos.rest.empresas',
      'route_identifier_name' => 'empresas_id',
      'collection_name' => 'empresas',
      'entity_http_methods' => 
      array (
        0 => 'GET',
        1 => 'PATCH',
        2 => 'PUT',
        3 => 'DELETE',
      ),
      'collection_http_methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
      ),
      'collection_query_whitelist' => 
      array (
      ),
      'page_size' => 25,
      'page_size_param' => NULL,
      'entity_class' => 'Gestao_De_Contratos\\V1\\Rest\\Empresas\\EmpresasEntity',
      'collection_class' => 'Gestao_De_Contratos\\V1\\Rest\\Empresas\\EmpresasCollection',
      'service_name' => 'Empresas',
    ),
    'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\Controller' => 
    array (
      'listener' => 'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\EnderecosResource',
      'route_name' => 'gestao_de_contratos.rest.enderecos',
      'route_identifier_name' => 'enderecos_id',
      'collection_name' => 'enderecos',
      'entity_http_methods' => 
      array (
        0 => 'GET',
        1 => 'PATCH',
        2 => 'PUT',
        3 => 'DELETE',
      ),
      'collection_http_methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
      ),
      'collection_query_whitelist' => 
      array (
      ),
      'page_size' => 25,
      'page_size_param' => NULL,
      'entity_class' => 'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\EnderecosEntity',
      'collection_class' => 'Gestao_De_Contratos\\V1\\Rest\\Enderecos\\EnderecosCollection',
      'service_name' => 'Enderecos',
    ),
    'Gestao_De_Contratos\\V1\\Rest\\Contratos\\Controller' => 
    array (
      'listener' => 'Gestao_De_Contratos\\V1\\Rest\\Contratos\\ContratosResource',
      'route_name' => 'gestao_de_contratos.rest.contratos',
      'route_identifier_name' => 'contratos_id',
      'collection_name' => 'contratos',
      'entity_http_methods' => 
      array (
        0 => 'GET',
        1 => 'PATCH',
        2 => 'PUT',
        3 => 'DELETE',
      ),
      'collection_http_methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
      ),
      'collection_query_whitelist' => 
      array (
      ),
      'page_size' => 25,
      'page_size_param' => NULL,
      'entity_class' => 'Gestao_De_Contratos\\V1\\Rest\\Contratos\\ContratosEntity',
      'collection_class' => 'Gestao_De_Contratos\\V1\\Rest\\Contratos\\ContratosCollection',
      'service_name' => 'Contratos',
    ),
    'Gestao_De_Contratos\\V1\\Rest\\Administradores\\Controller' => 
    array (
      'listener' => 'Gestao_De_Contratos\\V1\\Rest\\Administradores\\AdministradoresResource',
      'route_name' => 'gestao_de_contratos.rest.administradores',
      'route_identifier_name' => 'administradores_id',
      'collection_name' => 'administradores',
      'entity_http_methods' => 
      array (
        0 => 'GET',
        1 => 'PATCH',
        2 => 'PUT',
        3 => 'DELETE',
      ),
      'collection_http_methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
      ),
      'collection_query_whitelist' => 
      array (
      ),
      'page_size' => 25,
      'page_size_param' => NULL,
      'entity_class' => 'Gestao_De_Contratos\\V1\\Rest\\Administradores\\AdministradoresEntity',
      'collection_class' => 'Gestao_De_Contratos\\V1\\Rest\\Administradores\\AdministradoresCollection',
      'service_name' => 'Administradores',
    ),
  ),
  'zf-rpc' => 
  array (
  ),
  'zf-versioning' => 
  array (
    'content-type' => 
    array (
    ),
    'default_version' => 1,
    'uri' => 
    array (
      0 => 'gestao_de_contratos.rest.usuarios',
      1 => 'gestao_de_contratos.rest.empresas',
      2 => 'gestao_de_contratos.rest.enderecos',
      3 => 'gestao_de_contratos.rest.contratos',
      4 => 'gestao_de_contratos.rest.administradores',
    ),
  ),
  'doctrine' => 
  array (
    'cache' => 
    array (
      'apc' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ApcCache',
        'namespace' => 'DoctrineModule',
      ),
      'apcu' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ApcuCache',
        'namespace' => 'DoctrineModule',
      ),
      'array' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ArrayCache',
        'namespace' => 'DoctrineModule',
      ),
      'filesystem' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
        'directory' => 'data/DoctrineModule/cache',
        'namespace' => 'DoctrineModule',
      ),
      'memcache' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
        'instance' => 'my_memcache_alias',
        'namespace' => 'DoctrineModule',
      ),
      'memcached' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
        'instance' => 'my_memcached_alias',
        'namespace' => 'DoctrineModule',
      ),
      'predis' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\PredisCache',
        'instance' => 'my_predis_alias',
        'namespace' => 'DoctrineModule',
      ),
      'redis' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\RedisCache',
        'instance' => 'my_redis_alias',
        'namespace' => 'DoctrineModule',
      ),
      'wincache' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
        'namespace' => 'DoctrineModule',
      ),
      'xcache' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\XcacheCache',
        'namespace' => 'DoctrineModule',
      ),
      'zenddata' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
        'namespace' => 'DoctrineModule',
      ),
    ),
    'authentication' => 
    array (
      'odm_default' => 
      array (
      ),
      'orm_default' => 
      array (
        'objectManager' => 'doctrine.entitymanager.orm_default',
      ),
    ),
    'authenticationadapter' => 
    array (
      'odm_default' => true,
      'orm_default' => true,
    ),
    'authenticationstorage' => 
    array (
      'odm_default' => true,
      'orm_default' => true,
    ),
    'authenticationservice' => 
    array (
      'odm_default' => true,
      'orm_default' => true,
    ),
    'connection' => 
    array (
      'orm_default' => 
      array (
        'configuration' => 'orm_default',
        'eventmanager' => 'orm_default',
        'params' => 
        array (
          'host' => '',
          'port' => '',
          'user' => '',
          'password' => '',
          'dbname' => '',
          'charset' => 'utf8',
          'driverOptions' => 
          array (
            0 => 'SET NAMES utf8',
          ),
        ),
        'driverClass' => 'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver',
      ),
    ),
    'configuration' => 
    array (
      'orm_default' => 
      array (
        'metadata_cache' => 'array',
        'query_cache' => 'array',
        'result_cache' => 'array',
        'hydration_cache' => 'array',
        'driver' => 'orm_default',
        'generate_proxies' => true,
        'proxy_dir' => 'data/DoctrineORMModule/Proxy',
        'proxy_namespace' => 'DoctrineORMModule\\Proxy',
        'filters' => 
        array (
        ),
        'datetime_functions' => 
        array (
        ),
        'string_functions' => 
        array (
        ),
        'numeric_functions' => 
        array (
        ),
        'second_level_cache' => 
        array (
        ),
      ),
    ),
    'driver' => 
    array (
      'orm_default' => 
      array (
        'class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
        'drivers' => 
        array (
        ),
      ),
    ),
    'entitymanager' => 
    array (
      'orm_default' => 
      array (
        'connection' => 'orm_default',
        'configuration' => 'orm_default',
      ),
    ),
    'eventmanager' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'sql_logger_collector' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'mapping_collector' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'formannotationbuilder' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'entity_resolver' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'migrations_configuration' => 
    array (
      'orm_default' => 
      array (
        'directory' => 'data/DoctrineORMModule/Migrations',
        'name' => 'Doctrine Database Migrations',
        'namespace' => 'DoctrineORMModule\\Migrations',
        'table' => 'migrations',
        'column' => 'version',
        'custom_template' => NULL,
      ),
    ),
    'migrations_cmd' => 
    array (
      'generate' => 
      array (
      ),
      'execute' => 
      array (
      ),
      'migrate' => 
      array (
      ),
      'status' => 
      array (
      ),
      'version' => 
      array (
      ),
      'diff' => 
      array (
      ),
      'latest' => 
      array (
      ),
    ),
  ),
  'doctrine_factories' => 
  array (
    'cache' => 'DoctrineModule\\Service\\CacheFactory',
    'eventmanager' => 'DoctrineModule\\Service\\EventManagerFactory',
    'driver' => 'DoctrineModule\\Service\\DriverFactory',
    'authenticationadapter' => 'DoctrineModule\\Service\\Authentication\\AdapterFactory',
    'authenticationstorage' => 'DoctrineModule\\Service\\Authentication\\StorageFactory',
    'authenticationservice' => 'DoctrineModule\\Service\\Authentication\\AuthenticationServiceFactory',
    'connection' => 'DoctrineORMModule\\Service\\DBALConnectionFactory',
    'configuration' => 'DoctrineORMModule\\Service\\ConfigurationFactory',
    'entitymanager' => 'DoctrineORMModule\\Service\\EntityManagerFactory',
    'entity_resolver' => 'DoctrineORMModule\\Service\\EntityResolverFactory',
    'sql_logger_collector' => 'DoctrineORMModule\\Service\\SQLLoggerCollectorFactory',
    'mapping_collector' => 'DoctrineORMModule\\Service\\MappingCollectorFactory',
    'formannotationbuilder' => 'DoctrineORMModule\\Service\\FormAnnotationBuilderFactory',
    'migrations_configuration' => 'DoctrineORMModule\\Service\\MigrationsConfigurationFactory',
    'migrations_cmd' => 'DoctrineORMModule\\Service\\MigrationsCommandFactory',
  ),
  'hydrators' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Phpro\\DoctrineHydrationModule\\Service\\DoctrineHydratorFactory',
    ),
    'factories' => 
    array (
      'DoctrineModule\\Stdlib\\Hydrator\\DoctrineObject' => 'DoctrineORMModule\\Service\\DoctrineObjectHydratorFactory',
    ),
  ),
  'zf-apigility-doctrine-query-provider' => 
  array (
    'aliases' => 
    array (
      'default_odm' => 'ZF\\Apigility\\Doctrine\\Server\\Query\\Provider\\DefaultOdm',
      'default_orm' => 'ZF\\Apigility\\Doctrine\\Server\\Query\\Provider\\DefaultOrm',
    ),
    'factories' => 
    array (
      'ZF\\Apigility\\Doctrine\\Server\\Query\\Provider\\DefaultOdm' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZF\\Apigility\\Doctrine\\Server\\Query\\Provider\\DefaultOrm' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'zf-apigility-doctrine-query-create-filter' => 
  array (
    'aliases' => 
    array (
      'default' => 'ZF\\Apigility\\Doctrine\\Server\\Query\\CreateFilter\\DefaultCreateFilter',
    ),
    'factories' => 
    array (
      'ZF\\Apigility\\Doctrine\\Server\\Query\\CreateFilter\\DefaultCreateFilter' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'form_elements' => 
  array (
    'aliases' => 
    array (
      'objectselect' => 'DoctrineModule\\Form\\Element\\ObjectSelect',
      'objectradio' => 'DoctrineModule\\Form\\Element\\ObjectRadio',
      'objectmulticheckbox' => 'DoctrineModule\\Form\\Element\\ObjectMultiCheckbox',
    ),
    'factories' => 
    array (
      'DoctrineModule\\Form\\Element\\ObjectSelect' => 'DoctrineORMModule\\Service\\ObjectSelectFactory',
      'DoctrineModule\\Form\\Element\\ObjectRadio' => 'DoctrineORMModule\\Service\\ObjectRadioFactory',
      'DoctrineModule\\Form\\Element\\ObjectMultiCheckbox' => 'DoctrineORMModule\\Service\\ObjectMultiCheckboxFactory',
    ),
  ),
  'zenddevelopertools' => 
  array (
    'profiler' => 
    array (
      'collectors' => 
      array (
        'doctrine.sql_logger_collector.orm_default' => 'doctrine.sql_logger_collector.orm_default',
        'doctrine.mapping_collector.orm_default' => 'doctrine.mapping_collector.orm_default',
      ),
    ),
    'toolbar' => 
    array (
      'entries' => 
      array (
        'doctrine.sql_logger_collector.orm_default' => 'zend-developer-tools/toolbar/doctrine-orm-queries',
        'doctrine.mapping_collector.orm_default' => 'zend-developer-tools/toolbar/doctrine-orm-mappings',
      ),
    ),
  ),
  'zfr_cors' => 
  array (
  ),
  'db' => 
  array (
    'adapters' => 
    array (
      'dummy' => 
      array (
      ),
    ),
  ),
);