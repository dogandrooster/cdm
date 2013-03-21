<?
	# EXECUTE YOUR CSS
	$css = 'home';

	$que = $_GET['q'];

	# IMPORT YOUR BASE TEMPLATE
	include 'manager/home.php';
?>

<? # CONTENTS BLOCK # ?>
<? startblock('content') ?>
<article data-role="page" id="faqs-list">
	<header data-role="header">
		<button class="btn-tab img-icon-menu"></button>
		<h1>client data management</h1>
		<nav class="menunav">
			<ul class="unstyled clearfix">
				<li> <a href="#" class="img-icon-profile"> &nbsp; </a> </li>
				<li> <a href="#" class="img-icon-logout"> &nbsp; </a> </li>
				<li> <a> faqs </a> </li>
			</ul>
		</nav>
	</header>

	<section data-role="content">
		<dl class="categories clearfix">
			<dt>Lorem ipsum dolor sit amet</dt>
			<dd><a class="img-icon-category" href="faqs.php?q=hello" data-url="#faqs-overview" data-transition="slide"> &nbsp; </a></dd>
			<dt>Lorem ipsum dolor sit amet</dt>
			<dd><a class="img-icon-category" href="#" data-transition="slide"> &nbsp; </a></dd>
			<dt>Lorem ipsum dolor sit amet</dt>
			<dd><a class="img-icon-category" href="#" data-transition="slide"> &nbsp; </a></dd>
			<dt>Lorem ipsum dolor sit amet</dt>
			<dd><a class="img-icon-category" href="#" data-transition="slide"> &nbsp; </a></dd>
			<dt>Lorem ipsum dolor sit amet</dt>
			<dd><a class="img-icon-category" href="#" data-transition="slide"> &nbsp; </a></dd>
			<dt>Lorem ipsum dolor sit amet</dt>
			<dd><a class="img-icon-category" href="#" data-transition="slide"> &nbsp; </a></dd>
			<dt>Lorem ipsum dolor sit amet</dt>
			<dd><a class="img-icon-category" href="#" data-transition="slide"> &nbsp; </a></dd>
		</dl>
	</section>

	<footer data-role="footer">
		<ul class="ftrnav unstyled">
			<li> <a href="#" class="img-icon-data"> &nbsp; </a> </li>
			<li> <a href="#" class="img-icon-faqs"> &nbsp; </a> </li>
			<li> <a href="#" class="img-icon-cms"> &nbsp; </a> </li>
			<li> <a href="#" class="img-icon-map"> &nbsp; </a> </li>
		</ul>
	</footer>
</article>
<!-- END OF FAQS CATEGORIES -->

<article data-role="page" id="faqs-overview">
	<header data-role="header">
		<button class="btn-tab img-icon-menu"></button>
		<h1>client data management</h1>
		<a class="btn-cat img-icon-tab" href="#" data-transition="slidedown"> &nbsp; </a>
		<nav class="menunav">
			<ul class="unstyled clearfix">
				<li> <a href="#" class="img-icon-profile"> &nbsp; </a> </li>
				<li> <a href="#" class="img-icon-logout"> &nbsp; </a> </li>
				<li> <a> faqs </a> </li>
			</ul>
		</nav>
	</header>

	<section data-role="content">
		<? echo $que; ?>
	</section>

	<footer data-role="footer">
		<ul class="ftrnav unstyled">
			<li> <a href="#" class="img-icon-data"> &nbsp; </a> </li>
			<li> <a href="#" class="img-icon-faqs"> &nbsp; </a> </li>
			<li> <a href="#" class="img-icon-cms"> &nbsp; </a> </li>
			<li> <a href="#" class="img-icon-map"> &nbsp; </a> </li>
		</ul>
	</footer>
</article>



<? endblock(); ?>



<? # CSS & JAVASCRIPT PLUGINS BLOCK # ?>
<? startblock('head') ?>
<? endblock(); ?>

<? startblock('script') ?>
<? endblock(); ?>