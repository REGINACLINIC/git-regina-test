<!DOCTYPE html>
<html>
<head>
	<?php require_once(dirname(__FILE__).'/../common-parts/html_header.php'); ?>
</head>
<body>
	
	<div id="wrap">
		<header>
			<?php require_once(dirname(__FILE__).'/../common-parts/header.php'); ?>
		</header>
		<article>
			<?php require_once(dirname(__FILE__).'/../common-parts/bannar.php'); ?>
			<?php require_once(dirname(__FILE__).'/parts/chapter00.php'); ?>
			<?php require_once(dirname(__FILE__).'/parts/chapter01.php'); ?>
			<?php require_once(dirname(__FILE__).'/parts/chapter02.php'); ?>
			<?php require_once(dirname(__FILE__).'/parts/chapter04.php'); ?>
			<?php require_once(dirname(__FILE__).'/parts/chapter05.php'); ?>
			<?php require_once(dirname(__FILE__).'/../common-parts/plan.php'); ?>
			<?php require_once(dirname(__FILE__).'/../common-parts/message.php'); ?>
			<?php require_once(dirname(__FILE__).'/../common-parts/qa.php'); ?>
			<?php require_once(dirname(__FILE__).'/../common-parts/clinic.php'); ?>
		</article>
		<footer>
			<?php require_once(dirname(__FILE__).'/../common-parts/footer.php'); ?>
		</footer>
	</div>
	<?php require_once(dirname(__FILE__).'/../common-parts/html_footer.php'); ?>
</body>
</html>