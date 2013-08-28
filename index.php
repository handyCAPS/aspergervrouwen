<?php 
	get_header();
 ?>

			<article id="featured" class="content_div">
				<div class="corner_wrap"><h2>Featured article</h2></div>
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
				<a href="<?php bloginfo('home'); ?>"><h1><?php bloginfo('title'); ?></h1></a>
			</div><!--  end logo  -->
		</div><!--  end headerWrap  -->
	</header>
	<div id="contentWrap">
		<div id="sideBarWrap">
			<?php get_sidebar(); ?>
		</div><!--  end sideBarWrap  -->
		<div id="mainContentWrap">
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<article <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<div class="content_div"><?php the_content(); ?></div>
			</article>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			
		</div><!--  end mainContentWrap  -->
	</div><!--  end contentWrap  -->

	<?php get_footer(); ?>