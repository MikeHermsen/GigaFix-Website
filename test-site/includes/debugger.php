<!-- This script is for debugging the php ;) Always handy when you need to debug. -->
<?php

function header_log($data){
  $bt = debug_backtrace();
  $caller = array_shift($bt);
  $line = $caller['line'];
  $file = array_pop(explode('/', $caller['file']));
  header('log_'.$file.'_'.$caller['line'].': '.json_encode($data));
}

?>