<?php

// view function loads the code from file without need to specify the .php file extension 
if (!function_exists('view')) {
    function view(string $filename, array $data = []): void
    {
        //create variables from the associative array
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        include __DIR__ . '/../../' . $filename . '.php';
    }
}


if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        die();
    }
}

if(!function_exists('print_data')) {
    function print_data($data)
    {
        "<br><pre>";
    
        // print_r(array_keys($data));
        print_r(array_values($data)); 
        "<br><pre>";
    }
}