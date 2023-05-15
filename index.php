<?php 

$array = [
    'nome' => 'Walter',
    'idade' => 37,
    'empresa' => 'PMPR',
    'cor' => 'preto',
    'profissão' => 'Desenvolvedor'
];

$chaves = array_keys($array);
$valores = array_values($array);
print_r($chaves);
echo "<br>";
print_r($valores);

