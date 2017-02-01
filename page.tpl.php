<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<!--
	This document provides the basis of a semantically structured web page 
	authored in XHTML 1.0 Transitional using established Cornell University
	naming conventions.
-->

<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
	<link rel="shortcut icon" href="<?php print $base_path; ?><?php print(path_to_theme()); ?>/favicon.ico" type="image/x-icon" />
	
    
    <?php print $head ?>
    <!--
        All layout and formatting should be controlled through Cascading Stylesheets (CSS).
        The following link tag should appear in the head of every page in the website. see
        styles/main.css.
    -->
	<?php print $styles ?>
    <?php if ($logged_in) { ?>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php print $base_path; ?><?php print(path_to_theme()); ?>/styles/admin.css" />
    <?php } ?>
    
    <?php print $scripts ?>
	
	
</head>

<body<?php print phptemplate_body_class($left, $right, $secondary_links); ?>>

<!--
	The following link provides a way for people using text-based browsers and
	screen readers to skip over repetitive navigation elements so that they can 
	get directly to the content. It is hidden from general users through CSS.
-->
<div id="skipnav">
	<a href="#content">Skip to main content</a>
</div>

<hr class="hidden" />


<?php if ($banner) { ?>
<!-- The following div contains the Cornell University logo with unit signature -->
<div id="banner">
    <?php print $banner ?>
</div>
<?php } ?>

<!-- The header div contains the main identity and main navigation for the site -->

<?php if ($header) { ?>
<div id="header">
	<?php print $header ?>
</div>
<?php } ?>




<div id="wrap">

<!-- The content div contains the main content of the page -->
<div id="content">

    
    <?php if ($right) { ?>
    <div id="right-sidebar">
		<?php print $right ?>
	</div>
	<?php } ?>
    

	<!--
		The main div contains the main contents of the page. It will be displayed
		as the wide right column with the beige background.
	-->
	<div id="main">
        <?php print $tabs ?>
        <?php print $help ?>
        <?php print $messages ?>
        <?php print $contenttitle; ?>
        <?php print $content ?>
	</div>
    
    
    
    <?php if ($left) { ?>
    <div id="left-sidebar">
		<?php print $left ?>
	</div>
	<?php } ?>
	<hr class="hidden" />
	
		
</div>
</div>

<hr class="hidden" />




<div id="footer">
<!-- The footer-content div contains the Cornell University copyright -->
<div id="footer-content">
	<?php print ($footer_message . $footer); ?>
</div>
</div>

<?php print $closure ?>
</body>
</html>