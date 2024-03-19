<?php

use Arquitechture\DesignPattern\Log\StdoutLogManager;

require 'vendor/autoload.php';

$logManager = new StdoutLogManager();
$logManager->log('info', 'testing');