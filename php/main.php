<?php
	//remoto
	//$xml = simplexml_load_file("https://www.topinvest.com.br/feed/");

	//local
	$xml = file_get_contents("xml/topinvest.xml");
	$feed = simplexml_load_string($xml);
?>
