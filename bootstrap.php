<?php

define('APP_PATH', __DIR__);

spl_autoload_register("my_autoload");

function my_autoload($class)
{
    $path = $class . '.php';
    if (file_exists($path)) {
        include_once $path;
    } else {
        echo $path . " not exists!!!";
        exit;
    }
}

function dd($item)
{
    echo "<div style=\"
    overflow-wrap: break-word;
    \">";

    print_r("<pre>
            <div style=\"
    text-wrap: wrap;
    background-color: black;
    color:greenyellow;
    font-size:18px;
    padding:15px;
\">");

    var_dump($item);

    print_r("</div><pre>");
    echo "</div>";

}
