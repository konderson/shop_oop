<?php
$string="Ученик пошел в школу ";

$patern='/Ученик/';


$resolt=preg_match($patern,$string);

var_dump($resolt);
?>a