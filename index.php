<?php 

$texto = 'Bonieky Lacerda';

$texto = file_get_contents('nome.txt');

file_put_contents('nome.txt', 'Charlene');
echo $texto;