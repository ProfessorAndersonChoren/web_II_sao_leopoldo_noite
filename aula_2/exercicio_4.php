<?php
$number = readline('Digite um número: ');

if ($number > 0) {
    echo 'O número inserido é positivo';
} else if ($number < 0) {
    echo 'O número inserido é negativo';
}else{
    echo 'O número inserido é zero';
}
