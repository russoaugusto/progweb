<?php
include("Filho.php");

$pessoa = new Pessoa(75, 28, 1.74);
echo $pessoa;

$filho = new Filho(80, 32, 1.79);
$filho->setTime("dotinha");
echo $filho;
echo "<br>".$filho->getTime()."<br>";