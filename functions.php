<?php

function dump(...$dump) {
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
}

function dd(...$dump) {
    dump($dump);
    die();
}

function view($view, $data = []) {
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require "views/template/app.php";
}
