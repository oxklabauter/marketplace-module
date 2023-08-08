<?php


/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oxklabauter-marketplace-module',
    'title'        => 'Oxid CE Marktplatz',
    'description'  => array(
        'de' => 'Modul für  Oxid CE Marktplatzlösung',
        'en' => 'Module for Oxid CE Portal Solution.',
    ),
    'thumbnail'   => 'out/pictures/picture.png',
    'version'      => '6.3.1',
    'author'       => 'Jens Hergert',
    'url'          => '',
    'email'        => 'jenshergert@hotmail.com',
    
    'extend'       => array(
    \OxidEsales\Eshop\Application\Model\Basket::class => \OxidEsales\LoggerDemo\Model\Basket::class
    ),
    
    'controllers' => array(),
    
    'events'       => array(),
    
    'templates' => array(),

    'blocks' => array(),

    'settings' => array(
        array('group' => 'oepaypal_banners', 'name' => 'oePayPalClientId', 'type' => 'str',    'value' => ''),
    )
);
