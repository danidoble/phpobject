<?php
/*
 * Created by (c)danidoble 2021.
 */

include __DIR__.'/../vendor/autoload.php';

$danidoble = new \Danidoble\Danidoble();
$danidoble->hi = 'hi';
echo $danidoble->hi."\n";

var_dump($danidoble);