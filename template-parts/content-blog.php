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
			<span class="screen-reader-text"><?php the_title()?> </span>
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
