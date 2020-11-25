<?php require_once __DIR__."/php/main.php"; ?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Desafio <?= $feed->channel->title ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<figure>
			<a href="<?= $feed->channel->link ?>"><img src="img/logo_topinvest.png"></a>
		</figure>
		<h1><?= $feed->channel->title ?></h1>
	</header>
	<main class="noticias">
		<?php 
			foreach ($feed->channel->item as $post) {
				?>
				<div class="noticia">
					<a href="<?= $post->link ?>" target="_blank">
						<figure></figure>
						<h2><?= $post->title ?></h2>
						<h3><?= $post->pubDate ?></h3>
					</a>
				</div>
				<?php
			}
		?>
	</main>
	<footer>
		<div>
			<p>TopInvest Desafio por <a href="https://github.com/PedroWelbert/topinvestdesafio">Pedro Welbert</a></p>
		</div>
	</footer>
</body>
</html>