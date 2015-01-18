<?php
function dBug($var, $tags = null) {
    \PhpConsole\Connector::getInstance()->getDebugDispatcher()->dispatchDebug($var, $tags, 1);
}
?>
