<?php

define('NOS_ENTRY_POINT', 'front');

require_once __DIR__ . DIRECTORY_SEPARATOR . str_repeat('..' . DIRECTORY_SEPARATOR,
        count(explode(DIRECTORY_SEPARATOR,
            substr(__DIR__, strpos(__DIR__, DIRECTORY_SEPARATOR . 'local' . DIRECTORY_SEPARATOR)))) - 1)
    . 'novius-os' . DIRECTORY_SEPARATOR . 'framework' . DIRECTORY_SEPARATOR . 'bootstrap.php';

$task = new \Smekar\Social\Dashboard\Task_Index();
$task->run();