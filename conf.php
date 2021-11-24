<?php
$serverinimi="localhost";
$kasutajanimi="root";
$parool="";
$andmebaas="panchenko";
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset("UTF8");
?>