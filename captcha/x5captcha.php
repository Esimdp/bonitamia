<?php
include("../res/x5engine.php");
$nameList = array("umr","t62","yk6","f8x","tpx","pun","3gc","jsc","zjf","hwf");
$charList = array("J","6","K","X","J","F","J","3","R","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
