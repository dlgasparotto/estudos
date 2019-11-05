<?php

echo 'chegou... ';
echo 'via ' . $_SERVER["REQUEST_METHOD"];
echo file_get_contents("php://input");


?>
