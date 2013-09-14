<?php 
	get_header();
 ?>

			<article id="featured" class="content_div">
			<?php 
				$featureQuery = new WP_Query('category_name=featured');
				if($featureQuery->have_posts()): while($featureQuery->have_posts()): $featureQuery->the_post();

			 ?>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<small>Geplaatst op <?php the_date(); ?> door <?php the_author(); ?></small>
				<p>
				<?php 
					if (has_post_thumbnail()) {
						the_post_thumbnail();
					}
					the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="lees_meer"> Lees meer ...</a>
				<?php edit_post_link(); ?>
				</p>
			<?php endwhile; else : ?>
				<p>
					Hier hoort een featured article te staan Kim !
				</p>
			<?php endif;?>	
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
			<!-- <?php  wp_reset_postdata();  ?> -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<article <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<small class="post_meta">Geplaatst op <?php the_date(); ?> door <?php the_author_posts_link(); ?></small>
				<div class="content_div">
					<?php 
					if (has_post_thumbnail()) {
						the_post_thumbnail();
					}
					the_excerpt(); 
					?>
					<a href="<?php the_permalink(); ?>">Lees meer ...</a>
					<?php
					edit_post_link(); 
					?>
				</div><!--  end content_div  -->
			</article>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, niets gevonden.'); ?></p>
			<?php endif; ?>
			
		</div><!--  end mainContentWrap  -->
	</div><!--  end contentWrap  -->

	<?php get_footer(); ?>