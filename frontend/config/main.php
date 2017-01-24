<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'layout' => 'main',
    'sourceLanguage' => 'en',
    'language' => 'en',
    'charset' => 'UTF-8',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
    /*
        'view' => [
            'theme' => [
                'basePath' => '@frontend/themes/newtheme',
                'baseUrl' => '@frontend/themes/newtheme',
                'pathMap' => [
                    '@frontend/views' => '@frontend/themes/newtheme',
                ],
            ],
        ],
    */
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'i18n' => [
             'translations' => [
                 'app*' => [
                     'class' => 'yii\i18n\PhpMessageSource',
                     'basePath' => '@app/messages',
                    // 'sourceLanguage' => 'en-US',
                     'fileMap' => [
                         'app'       => 'app.php',
                         'app/error' => 'error.php',
                     ],
                 ],
             ],
         ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['ru', 'en'],
            'enableDefaultLanguageUrlCode' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'params' => $params,
];
