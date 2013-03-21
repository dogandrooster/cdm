<?
	# EXECUTE YOUR CSS
	$css = 'home';

	# IMPORT YOUR BASE TEMPLATE
	include 'manager/home.php';
?>

<? # CONTENTS BLOCK # ?>
<? startblock('content') ?>
<article data-role="page">
	<header data-role="header">
		<button class="btn-tab img-icon-menu"></button>
		<h1>welcome</h1>
		<a class="btn-cat img-icon-cat" href="#" data-transition="slidedown"> &nbsp; </a>
		<nav class="">
			<ul class="unstyled clearfix">
				<li> <a href="#" class="img-icon-user"> &nbsp; </a> </li>
				<li> <a href="#" class="img-icon-lock"> &nbsp; </a> </li>
			</ul>
		</nav>
	</header>

	<section data-role="content">
		<form action="default.php" method="get" class="class-form">
			<h2>sign in</h2>
			<fieldset>
				<label for="#">username</label>
				<input type="text" name="username" class=":required">
			</fieldset>
			<fieldset>
				<label for="#">password</label>
				<input type="password" name="password" class=":required">
			</fieldset>
			<button type="submit" data-transition="slide" name="login">sign in</button>
		</form>	
	</section>

	<footer data-role="footer">
		<ul class="ftrnav unstyled">
			<li> <a href="data.php" class="img-icon-data"> &nbsp; </a> </li>
			<li> <a href="faqs.php" class="img-icon-faqs"> &nbsp; </a> </li>
			<li> <a href="cms.php" class="img-icon-cms"> &nbsp; </a> </li>
			<li> <a href="map.php" class="img-icon-map"> &nbsp; </a> </li>
		</ul>
	</footer>
</article>
<? endblock(); ?>



<? # CSS & JAVASCRIPT PLUGINS BLOCK # ?>
<? startblock('head') ?>
<? endblock(); ?>

<? startblock('script') ?>
<? endblock(); ?>