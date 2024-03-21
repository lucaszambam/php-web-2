<?php

require_once __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\Timer;
$timer = new Timer();
// Inicia o temporizador
$timer->start();

for ($i = 0; $i < 1000; $i++) {
    echo $i;
}

// Termina o temporizador
$time = $timer->stop();

echo "\n" . "Tempo de execução: " . $time->asString() . "\n";