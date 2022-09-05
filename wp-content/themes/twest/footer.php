<footer>
	<div class="f-content">
		<div class="head-left name-top">
			<h1>John </h1><h1 class="doe">Doe</h1>
		</div>
		<div class="head-rigth">
			<nav class="bottom-menu">
				<ul class="top-menu-list">
					<li class="bottom-menu-item"><a href="#">Home</a></li>
					<li class="bottom-menu-item"><a href="#">About</a></li>
					<li class="bottom-menu-item"><a href="#">Products</a></li>
					<li class="bottom-menu-item"><a href="#">Testimonials</a></li>
					<li class="bottom-menu-item"><a href="#">Contact</a></li>
				</ul>
				<?php wp_nav_menu( [
					'theme_location'  => 'footer',
					'menu'            => '',
					'container'       => 'nav',
					'container_class' => 'bottom-menu',
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
				] );?>
			</nav>
		</div>
	</div>
</footer>
</div>

</body>
</html>
<?php
