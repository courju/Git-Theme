 <?php 
 /** 
 * The main template file. 
 * 
 * This is the most generic template file in a WordPress theme 
 * and one of the two required files for a theme (the other being style.css). 
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists. 
 * Learn more: http://codex.wordpress.org/Template_Hierarchy 
 * 
 * @package Adirondack 
 */ 
  
 get_header(); ?> 
 <?php	if ( is_front_page() && adirondack_has_featured_posts() ): ?> 
 	<?php 
 		// Include the featured content template. 
 		get_template_part( 'featured-content' ); ?> 
 <?php endif;?> 
 <div id="primary" class="content-area"> 
 <main id="main" class="site-main" role="main"> 
 <?php if (has_category()) : ?> 
 	<ul class="entry-list"> 
 		<?php foreach (get_categories() as $cat) : ?> 
 			<li class="entry-list-item"> 
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> 
 							 style="background: url(<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url($cat->term_id); ?>) no-repeat center; background-size: cover;"> 
 					<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" rel="bookmark" class="entry-link"> 
 						<header class="entry-header"> 
 							<h1 class="entry-title"><?php echo esc_html($cat->name); ?> - Beitr&auml;ge (<?php echo esc_html($cat->count); ?>)</h1> 
 						</header> 
 					</a> 
 				</article> 
		</li> 
		<?php endforeach; ?> 
 	</ul> 
<?php else : ?> 
 	<?php get_template_part( 'content', 'none' ); ?> 
 <?php endif; ?> 
<?php get_sidebar(); ?> 
<?php get_footer(); ?> 


