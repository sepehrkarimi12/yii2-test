<?php

/**
 * Debug function with die() after
 * dd($var);
 */
function d($var)
{
    echo "<pre>";
    print_r($var);
    die();
}