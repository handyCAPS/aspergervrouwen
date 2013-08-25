<?php 
	get_header();
 ?>

<article id="welkom">
				<h2>Featured article</h2>
				<p>
					<img src="http://placecage.com/150/100" class="left">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</article><!--  end welkom  -->
			<div id="logo">
				<div id="logoImageWrap">
					<img src="<?php echo THEMEPATH; ?>/images/women-small.jpg" alt="Asperger Vrouwen">
				</div><!--  end logoImageWrap  -->
				<h1>Asperger Vrouwen</h1>
			</div><!--  end logo  -->
		</div><!--  end headerWrap  -->
	</header>
	<div id="contentWrap">
		<div id="sideBarWrap">
			<?php get_sidebar(); ?>
		</div><!--  end sideBarWrap  -->
		<div id="mainContentWrap">
			<article>
				<h2>Titel h2 die wat langer is</h2>
				<p>
					<img src="http://placecage.com/100/100" class="left">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</article>
			<article>
				<h2>Titel h2</h2>
				<p>
					<img src="http://fillmurray.com/100/100" class="right">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</article>
			<article>
				<h2>Titel h2</h2>
				<p>
					<img src="http://placekitten.com/100/100" class="left">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</article>
		</div><!--  end mainContentWrap  -->
	</div><!--  end contentWrap  -->

	<?php get_footer(); ?>