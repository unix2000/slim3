<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Slim\\Views\\' => array($vendorDir . '/slim/php-view/src', $vendorDir . '/slim/twig-view/src'),
    'Slim\\Middleware\\' => array($vendorDir . '/tuupola/slim-basic-auth/src', $vendorDir . '/tuupola/slim-jwt-auth/src'),
    'Slim\\HttpCache\\' => array($vendorDir . '/slim/http-cache/src'),
    'Slim\\Csrf\\' => array($vendorDir . '/slim/csrf/src'),
    'Slim\\' => array($vendorDir . '/slim/slim/Slim'),
    'Respect\\Validation\\' => array($vendorDir . '/respect/validation/library'),
    'RKA\\Middleware\\' => array($vendorDir . '/akrabat/rka-scheme-and-host-detection-middleware/src', $vendorDir . '/akrabat/rka-ip-address-middleware/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src'),
    'Noodlehaus\\' => array($vendorDir . '/hassankhan/config/src'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'Interop\\Container\\' => array($vendorDir . '/container-interop/container-interop/src/Interop/Container'),
    'Firebase\\JWT\\' => array($vendorDir . '/firebase/php-jwt/src'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
    'DavidePastore\\Slim\\Validation\\' => array($vendorDir . '/davidepastore/slim-validation/src'),
    'DavidePastore\\Slim\\RestrictRoute\\' => array($vendorDir . '/davidepastore/slim-restrict-route/src'),
    'DavidePastore\\Slim\\Config\\' => array($vendorDir . '/davidepastore/slim-config/src'),
);
