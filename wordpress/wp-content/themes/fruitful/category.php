<?php
/**
* @package WordPress
* @subpackage Fruitful theme
* @since Fruitful theme 1.0
*/

get_header(); ?>

<header class="archive-header">
	<h1 class="archive-title"><?php printf( __( '%s', 'fruitful' ), single_cat_title( '', false ) ); ?></h1>
	<?php if ( category_description() ) : // Show an optional category description ?>
		<div class="archive-meta"><?php echo category_description(); ?></div>
	<?php endif; ?>
</header><!-- .archive-header -->
<div class="three columns alpha">
	<?php get_sidebar('blogright'); ?>
</div>
<div class="thirteen columns omega">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>
				<?php //fruitful_content_nav('nav-above'); ?>
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php fruitful_content_nav( 'nav-below' ); ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
