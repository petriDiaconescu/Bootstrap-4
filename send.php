<?php

function isAjax(){
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
}

if (isAjax()){
  echo 'Hello';
} else {
  die("That's not allowed!");
}
