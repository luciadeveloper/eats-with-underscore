<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eats
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-image-wrapper">
		<a href="<?php esc_url( get_permalink()) ?>">   <!-- el link necesita un texto-->
			<picture>
				<?php the_post_thumbnail('blog-thumbnail');?>
			</picture>
		</a>
	</div>
	<div class="article-content-wrapper">
		<header class="entry-header">
			<div class="entry-meta">
				<time><?php the_date('F j, Y'); ?></time>
			</div><!-- .entry-meta -->
			<h2 class="entry-title">
				<a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark">	
					<?php the_title()?>
				</a>
			</h2>
			
			
		</header><!-- .entry-header -->

		<div class="entry-content"> <!--excerpt & read more-->
			<?php the_excerpt()  ?>
		</div><!-- .entry-content -->
		<a href="<?php esc_url( get_permalink() ) ?>" rel="bookmark" class="read-more">	
			<?php _e('Read more', 'eats')?>
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
