<?php

require_once 'b.php';

$robot1 = new robot ("ngok ngok ngok ngek",66);
echo  "suara robot adalah : " .$robot1
->get_suara(). '<br>';
echo "berat robot adalah : " .$robot1
->get_berat(). '<br>';
?>
