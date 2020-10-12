<?php require_once "upfile.php" ?>
	<div id="navbar" class="navbar-fixed">
		<nav class="transparent z-depth-0">
			<div class="nav-wrapper" id="navwrap">
				<div class="container">
					<a href="index.html" class="brand-logo"><img src="<?= $GLOBALS['path'] ?>/assets/img/itase.svg"></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a class="atext" href="<?= $GLOBALS['path'] ?>">HOME</a></li>
						<li><a class="atext" href="<?= $GLOBALS['path'] ?>/index/about">ABOUT</a></li>
						<li><a class="atext dropdown-trigger" data-target="competition" href="#">COMPETITIONS</a></li>
						<li><a class="atext" href="#footer">CONTACT</a></li>
					</ul>
					<a class="right hide-on-large-only sidenav-trigger" data-target="slide-out"><i class="material-icons">dehaze</i></a>
				</div>
			</div>
		</nav>
	</div>
	<ul id="competition" class="dropdown-content">
		<li><a href="<?= $GLOBALS['path'] ?>/bisnis" class="blue-grey-text text-darken-4">Bisnis Plan Competition</a></li>
		<li><a href="<?= $GLOBALS['path'] ?>/vlog" class="blue-grey-text text-darken-4">Vlog Competiton</a></li>
		<li><a href="<?= $GLOBALS['path'] ?>/index/gtalent" class="blue-grey-text text-darken-4">SI Got Talent Competition</a></li>
		<li><a href="<?= $GLOBALS['path'] ?>/index/badminton" class="blue-grey-text text-darken-4">Badminton Competition</a></li>
		<li><a href="<?= $GLOBALS['path'] ?>/index/pubg" class="blue-grey-text text-darken-4">PUBGM Competition</a></li>
	</ul>