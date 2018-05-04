<?php

error_reporting(E_ALL);

$fatFree = require 'vendor/bcosca/fatFree-core/base.php';

$fatFree->set('ONERROR', function($fatFree) {
    echo $fatFree->get('ERROR.text');
})

// define route
?>