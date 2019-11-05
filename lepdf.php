<?php

header('Content-type: application/pdf');

$pdf = file_get_contents('scrum2.pdf'); 
$data = base64_encode($pdf);





echo base64_decode($data);

?>
