<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Desafio Top Invest</title>
</head>
<body>
	<?php
		//remoto
		//$xml = simplexml_load_file("https://www.topinvest.com.br/feed/");

		//local
		$xml = file_get_contents("xml/topinvest.xml");
		$feed = simplexml_load_string($xml);

	?>
	<header>
		
	</header>
	<main>
		
	</main>
	<footer>
		
	</footer>
</body>
</html>