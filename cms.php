<?
	# EXECUTE YOUR CSS
	$css = 'home';

	# IMPORT YOUR BASE TEMPLATE
	include 'manager/home.php';
?>

<? # CONTENTS BLOCK # ?>
<? startblock('content') ?>
<article data-role="page" id="cms101">
	<header data-role="header">
		<button class="btn-tab img-icon-menu"></button>
		<h1>client data management</h1>
		<!-- <a class="btn-cat img-icon-cat" href="#" data-transition="slidedown"> &nbsp; </a> -->
		<nav class="menunav">
			<ul class="unstyled clearfix">
				<li> <a href="#" class="img-icon-settings"> &nbsp; </a> </li>
				<li> <a href="#" class="img-icon-logout"> &nbsp; </a> </li>
				<li> <a> cms 101 </a> </li>
			</ul>
		</nav>
	</header>

	<section data-role="content">

		<div class="accordion" id="accordion">
			<!-- break -->
			<div class="accordion-group list-settings">
				<dl class="accordion-heading clearfix">
					<dt><a class="accordion-toggle">Project Information</a></dt>
					<dd><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> H </a></dd>
				</dl>
				<div id="collapseOne" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul class="unstyled listings">
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="accordion-group list-settings">
				<dl class="accordion-heading clearfix">
					<dt><a class="accordion-toggle">Project Information 2</a></dt>
					<dd><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> H </a></dd>
				</dl>
				<div id="collapseTwo" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul class="unstyled listings">
							<li> <a href="cms.php" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="accordion-group list-settings">
				<dl class="accordion-heading clearfix">
					<dt><a class="accordion-toggle">Project Information 3</a></dt>
					<dd><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> H </a></dd>
				</dl>
				<div id="collapseThree" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul class="unstyled listings">
							<li> <a href="cms.php" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="accordion-group list-settings">
				<dl class="accordion-heading clearfix">
					<dt><a class="accordion-toggle">Project Information 4</a></dt>
					<dd><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> H </a></dd>
				</dl>
				<div id="collapseFour" class="accordion-body collapse">
					<div class="accordion-inner">
						<ul class="unstyled listings">
							<li> <a href="cms.php" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
							<li> <a href="#" data-transition="slide">Lorem ipsum dolor sit amet</a> </li>
						</ul>
					</div>
				</div>
			</div>			
			<!-- break -->
		</div>

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