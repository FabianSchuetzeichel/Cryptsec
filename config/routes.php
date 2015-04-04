<?php
use Cake\Routing\Router;

Router::plugin('Cryptsec', function ($routes) {
    $routes->fallbacks();
});
