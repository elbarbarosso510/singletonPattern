<?php
spl_autoload_register(function ($className){
    include 'class/' . $className . '.php';
});

$test = new Monatsabrechnung();
$test->createSalary();

echo '<pre>';
print_r($test);
echo '</pre>';