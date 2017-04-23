<?php
/**
 * config file for nfsen-ng
 */
namespace settings;

$nfsen_config = array(
    'general' => array(
        'ports' => array(
            80, 22, 53,
        ),
        'sources' => array(
            'gate', 'swi6',
        )
    ),
    'nfdump' => array(
        'binary' => '/usr/bin/nfdump',
        'profiles-data' => '/var/nfdump/profiles-data',
        'profile' => 'live',
    ),
    'db' => array(
        'akumuli' => array(
            //'host' => 'localhost',
            //'port' => 8282,
        ),
        'rrd' => array()
    ),
    'log' => array(
        'priority' => LOG_DEBUG,
    )
);
