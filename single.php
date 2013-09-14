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
				<div class="content_div"><?php the_content(); edit_post_link(); ?></div>
			</article>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, niets gevonden.'); ?></p>
			<?php endif; ?>
			<ol>
				<?php wp_list_comments(  ); ?>
			</ol>
				<?php if ( 'open' == $post->comment_status ) : ?>
				
				<div id="respond" class="content_div">
				
				<h3><?php comment_form_title(); ?></h3>
				
				<?php cancel_comment_reply_link(); ?>
				
				<?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
				
				<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
				
				<?php else : ?>
				
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				
				<?php if ( $user_ID ) : ?>
				
				<p>Logged in as <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out &raquo;</a></p>
				
				<?php else : ?>
				
				<p>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="author">Name <?php if ( $req ) echo "( required )"; ?></label>
				</p>
				
				<p>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="email">Email ( <?php if ( $req ) echo "required, "; ?>never shared )</label>
				</p>
				
				<p>
				<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
				<label for="url">Website</label>
				</p>
				
				<?php endif; ?>
				
				<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
				
				<p>Some HTML is ok: <code><?php echo allowed_tags(); ?></code></p>
				
				<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /></p>
				<?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>
				
				</form>
				
				<?php endif; // If registration required and not logged in ?>
				</div>
				
				<?php endif; // If comments are open: delete this and the sky will fall on your head ?>
			
			
		</div><!--  end mainContentWrap  -->
	</div><!--  end contentWrap  -->

	<?php get_footer(); ?>