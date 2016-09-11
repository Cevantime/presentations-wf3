<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<script type="text/javascript">
			var baseURL = "<?php echo base_url(); ?>";
		</script>
		
		<link rel="stylesheet" href="<?php echo base_url('assets/local/css/reveal/reveal.css') ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/font-awesome/css/font-awesome.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/local/css/reveal/theme/beige.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/presentable/presentable.min.css') ?>"/>
		<script src="<?php echo base_url('assets/vendor/js/head.min.js'); ?>"></script>
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/highlightjs/styles/github.css'); ?>"/>
		<script type="text/javascript" src="<?php echo base_url('assets/vendor/js/highlightjs/highlight.pack.js'); ?>"></script>
		<link href="<?php echo base_url('assets/local/css/stylesheet.css'); ?>" rel="stylesheet"/>

        <title><?php echo $title_for_layout; ?></title>
    </head>
	<body>
		<div data-module="reveal-init" class="reveal">
			<?php echo $content_for_layout; ?>
		</div>
<!--		<aside id="presentable-icon" class="revealjs">
			<a title="Table of Contents" href="#?">
				<img alt="Table des maitères" src="<?php echo base_url('assets/vendor/css/presentable/icons/revealjs.png'); ?>"/>
			</a>
		</aside>-->
		<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
		<script src="<?php echo base_url('assets/local/js/app.js'); ?>"></script>
	</body>
</html>
