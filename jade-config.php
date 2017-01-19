<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    use Tale\Jade;

    //Include the vendor/autoload.php if you're using composer!
    include('vendor/autoload.php');

    $renderer = new Jade\Renderer([
        'pretty' => true,
        'cache_path' => __DIR__.'/cache',
        'paths' => [__DIR__.'/src/jade']
    ]);

?>
