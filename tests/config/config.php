<?php

/*
 Config file to use during integration testing
*/
$config = [
    'baseurlpath' => '/',

    'metadata.sources' => [
        ['type' => 'flatfile', 'directory' =>  dirname(__DIR__) . '/metadata'],
    ],

    'module.enable' => [
        'exampleauth' => true
    ],

    'debug' => true,
    'logging.level' => \SimpleSAML\Logger::DEBUG,
    'logging.handler' => 'errorlog',
];
