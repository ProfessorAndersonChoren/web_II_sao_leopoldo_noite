<?php
require 'Client.php';

$client = new Client('441.461.950-55');
$client->fullname = 'Cauê Gabriel Carlos Eduardo Costa';
$client->phone = '(51) 98825-8237';
$client->status = true;

// Não deveria acontecer
$client->cpf = '';

// echo 'CPF: '.$client->cpf."\n";
// echo 'Nome completo: '.$client-> fullname . "\n";
// echo 'Phone: '.$client-> phone . "\n";
// echo 'Status: '.$client-> status . "\n";

echo $client;
