<?php

require_once("MyLogger.class.php");
$logger = new MyLogger('testClas2s');
//$logger->setOrigin('TestClass');
$logger->log("Hello World", 'warning');
?>