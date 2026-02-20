<?php

$scriptQueue = [];

function add_script($src){
    global $scriptQueue;
    $scriptQueue[] = $src;
}

function print_scripts(){
    global $scriptQueue;
    foreach($scriptQueue as $src){
        echo '<script src="' . $src . '"></script>';
    }
}

$styleQueue = [];

function add_style($link){
    global $styleQueue;
    $styleQueue[] = $link;
}

function print_style(){
    global $styleQueue;
    foreach($styleQueue as $link){
        // echo '<script src="' . $src . '"></script>';
        echo '<link rel="stylesheet" href="'. $link .'">';
    }
}

?>