<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/style.css">
<!--	<link rel="stylesheet" href="assets/itc-slider.css">-->
<!--	<script src="assets/itc-slider.js" ></script>-->
	<?php wp_head();?>
    <title>Document</title>
</head>
<body>
<div class="container">
	<header>
		<div class="head-block">
			<div class="head-nav">
				<div class="head-left name-top">
					<h1>John</h1><h1 class="doe"> Doe</h1>
				</div>
				<div class="head-right">
					<nav class="top-menu">

                        <?php
                        wp_nav_menu( [
	                        'theme_location'  => 'header',
	                        'menu'            => '',
	                        'container'       => 'nav',
	                        'container_class' => 'top-menu',
	                        'container_id'    => '',
	                        'menu_class'      => 'top-menu-list',
	                        'menu_id'         => '',
	                        'echo'            => true,
	                        'fallback_cb'     => 'wp_page_menu',
	                        'before'          => '',
	                        'after'           => '',
	                        'link_before'     => '',
	                        'link_after'      => '',
	                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	                        'depth'           => 0,
	                        'walker'          => '',
                        ] );

                        ?>
					</nav>
				</div>

			</div>
			<div class="head-bottom">
				<div class="info-left">
					<div class="name-top i">
						<h1>John </h1><h1 class="doe">Doe</h1>
					</div>
					<div class="text-top">
						<p class="shrift">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor magna risus sed. Et dictumst vel.</p>
					</div>
					<div class="button-green top-button">
						<a href="" class="text-but shrift">Free Seo Consulting Training</a>
					</div>
				</div>


				<div class="image">
					<img src="assets/img/Man_Img.png">
				</div>
			</div>
		</div>
	</header>
<?php
