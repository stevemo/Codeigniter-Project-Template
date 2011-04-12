<!DOCTYPE html>  
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php echo css('admin/admin_style.css'); ?>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo css_path('admin/2col.css'); ?>" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
	<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="<?php echo css_path('admin/1col.css'); ?>" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->
	
	
	
	<!-- Grab Google CDNs jQuery, fall back if necessary -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="<?php echo js_path('jquery/jquery-1.5.1.min.js'); ?>"><\/script>')</script>
	
	<title><?php echo lang('cp_admin_home_title') .' - ' .  $template['title']; ?></title>

    <?php echo $template['partials']['metadata']; ?>
</head>
<body>
	
<div id="main">
	<?php echo $template['partials']['header']; ?>
	<?php echo $template['partials']['menu']; ?>	
	<div class="box" id="cols">
		<?php echo $template['partials']['aside']; ?>
		<hr class="noscreen" />		
		<div class="box" id="content">
			<?php echo $template['body']; ?>
		</div>		
	</div>	
	<hr class="noscreen" />		
	<?php echo $template['partials']['footer']; ?>			
</div>

<?php echo js('admin/switcher.js'); ?>
</body>
</html>

