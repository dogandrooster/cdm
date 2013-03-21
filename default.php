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
		<h1>client data management</h1>
		<!-- <a class="btn-cat img-icon-cat" href="#" data-transition="slidedown"> &nbsp; </a> -->
		<nav class="menunav">
			<ul class="unstyled clearfix">
				<li> <a href="#" class="img-icon-settings"> &nbsp; </a> </li>
				<li> <a href="#" class="img-icon-logout"> &nbsp; </a> </li>
				<li> <a> dashboard </a> </li>
			</ul>
		</nav>
	</header>

	<section data-role="content">
		<ul class="unstyled listings">
			<li> <a href="cms.php" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
			<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
		</ul>
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