<?php

$config = [
    'id' => 'app-console',
    'controllerNamespace' => 'app\commands',
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;