<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<!--This document provides the basis of a semantically structured web page 
	authored in XHTML 1.0 Transitional using established Cornell University
	naming conventions.-->

<head>
	<title><?php print $head_title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
	<link rel="shortcut icon" href="<?php print $base_path; ?><?php print(path_to_theme()); ?>/favicon.ico" type="image/x-icon" />
	
    <?php print $head ?>

	<?php print $styles ?>
    <?php if ($logged_in) { ?>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php print $base_path; ?><?php print(path_to_theme()); ?>/styles/admin.css" />
    <?php } ?>
    
    <?php print $scripts ?>
	
	<script type="text/javascript">
function process(form) {
   var urlbase = "search/results/";
   var url = urlbase + escape(form.terms.value);
   if (form.subject.value != 'all') {
   		url += " taxonomy:" + form.subject.value;
   }
   if (form.type.value != 'all') {
    	url += " content_type:" + form.type.value;
   }
   window.location = url;
}
</script>
	
</head>

<body id="front">

	<div id="skipnav">
		<a href="#content">Skip to main content</a>
	</div>

<hr class="hidden" />

<!-- CU Banner -->
<?php if ($banner) { ?>
	<div id="banner">
		<?php print $banner ?>
	</div>
<?php } ?>


<!-- header -->
<?php if ($header) { ?>
<div id="header">
	<?php print $header ?>
</div>
<?php } ?>


<!-- wrap -->
<div id="wrap">

<!-- main -->
<div id="main">
		
	<div id="front_search">
	<?php print $front_search ?>
	</div>
	
	<div id="front_main">
	<?php print $front_main ?>
	</div>
	
	<div id="front_bottom">
	<?php print $front_bottom ?>
	</div>	
	  	
</div><!-- end #main -->
</div><!-- end #wrap -->

<hr class="hidden" />

<!-- footer -->
<div id="footer">
<div id="footer-content">
		<?php print ($footer_message . $footer); ?>
</div><!-- close #footer-content -->
</div><!-- close #footer -->

<?php print $closure ?>
</body>
</html>