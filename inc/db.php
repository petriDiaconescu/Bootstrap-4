<?php

$db = new mysqli('localhost', 'root', 'mysql', 'carolina_spa');

if ($db->connect_error){
  $error = $db->connect_error;
}
