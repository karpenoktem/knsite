<?php

function auri($action, $qs='') {
	global $cfg;
	return $cfg['auri'] . $action . '?' . $qs; 
}

function curi($content) {
	global $cfg;
	return $cfg['curi'] . $content;
}

function default_header() { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
	<head>
		<link href="<?php echo curi('style/common.css'); ?>"
			  rel="stylesheet" type="text/css" />
		<title>ASV Karpe Noktem</title>
	</head>
	<body>
		<div id="wrapper">
		<div id="logo"></div>
		
		<div id="main">	
			<div id="body">
			<?php
}

function default_footer() { ?>
				</div>
			
			<ul id="menu">
				<li><a href="<?php echo auri('default'); ?>">Beginpagina</a></li>
				<li><a href="<?php echo auri('watis') ?>"
					>Over ons</a></li>
				<ul>
					<li><a href="<?php echo auri('watis') ?>"
						>Wat is <abbr title="Karpe Noktem">KN</abbr>?</a></li>
					<li><a href="<?php echo auri('geschiedenis') ?>"
						>Geschiedenis</a></li>
					<li><a href="<?php echo auri('activiteiten') ?>"
						>Activiteiten</a></li>
					<li><a href="<?php echo auri('bestuur') ?>"
						>Bestuur</a></li>
					<li><a href="<?php echo auri('contact') ?>"
						>Contact</a></li>
					<li><a href="<?php echo auri('lidworden') ?>"
						>Lid worden</a></li>
				</ul>
				<li><a href="<?php echo auri('agenda') ?>"
				    >Agenda</a></li>
				<li>Fotos</li>
				<ul>
					<li><a href="http://www.flickr.com/photos/12267979@N04/">Karpe Noktem</a></li>
					<li><a href="http://www.flickr.com/photos/12264801@N04/">Pluk het weekend</a></li>
				</ul>
				<li>Forum</li>
				<li>Merchandise</li>
				<ul>
					<li><a href="<?php echo auri('tshirts') ?>"
						>Tshirts</a></li>
					<li><a href="<?php echo auri('dvds') ?>"
						>DVD's</a></li>
				</ul>
				<li>Downloaden</li>
				<ul>
					<li><a href="<?php echo auri('an') ?>"
						>Akta Nokturna</a></li>
				</ul>
				<li><a href="<?php echo auri('links') ?>"
					>Links</a></li>
			<ul>
		</div>
		<div id="footer">&copy;2007 &mdash; Karpe Noktem</div>
	</body>
</html> <?php
}


?>