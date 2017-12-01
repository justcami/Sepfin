<?php

$phrase  = $_POST['palabra'];
$espacio = array(" ");
$sin   = array("");
$newphrase = str_replace($espacio, $sin, $phrase);

echo $newphrase;

?>