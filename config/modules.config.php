<?php

/**
 * The list of modules application.
 */

$modules = [
    'Zend\Router',
    'Zend\I18n',
    'Zend\Mvc\I18n',
    'Zend\Navigation',
    'Zend\Mvc\Plugin\FlashMessenger',
    'Zend\Mvc\Console',
    'ExValidate',
    'DoctrineModule',
    'DoctrineORMModule',
    'ExDoctrine',
    'AsseticBundle',
    'ExAssetic',
    'ZfcTwig',
    'ExTwig',
    'Bupy7\Form',
    'ZfcRbac',
    'ExRbac',
    'Application',
    'User',
    'DmitriiBorisenko\ZF3TimeZone'
];
if (APP_ENV_DEV) {
    $modules = array_merge($modules, [
        'ZfSnapPhpDebugBar',
        'ExDebugBar',
    ]);
}
return $modules;
