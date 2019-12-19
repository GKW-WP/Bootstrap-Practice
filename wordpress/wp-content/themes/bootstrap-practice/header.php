<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
​
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
​
    <meta name="description" content="">
    <meta name="author" content="">
​
    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
​
    <?php wp_head(); ?>

</head>
<body>
	<div class="container-fluid p-0">
		<nav class="navbar nav main-nav justify-content-between navbar-dark bg-dark fixed-top">
			<a href="#" class="navbar-brand">Project</a>
		</nav>
		<header>
			<div class="jumbotron">
				<h1>Welcome! This is the header. The big h1.</h1>
			</div>
		</header>
		<nav class="secondary-nav container-fluid navbar nav navbar-dark bg-dark justify-content-end">
			<a class="nav-link" href="#">Link 1</a>
		</nav>
	</div>
