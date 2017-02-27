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
if (current_user_can("edit_post")) : /*  If the user is logged */ ?>
	<?php get_header(); ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php if (has_category()) : ?>
					<?php $categories = get_categories( array(
						'orderby' => 'name',
						'parent'  => 0));?>
					<?php foreach ( $categories as $category ) : ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: url(<?php echo esc_attr( $url[0] ); ?>) no-repeat center; background-size: cover;">
							<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" rel="bookmark" class="entry-link">
								<header class="entry-header">
									<h1 class="entry-title"><?php echo esc_html($category->name); ?></h1>
								</header><!-- .entry-header -->
								<div class="link-button"><span>View more</span></div>
							</a>
						</article>
					<?php endforeach;?> 
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
	
<?php else : /* If the user isn't logged */ ?>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<style>.cc-alert{left:3em;position:absolute;top:25vh;}</style>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="cc-alert">
			<h1>Hallo, nur fuer registrierte User ... Sorry!</h1>
			<div>Um mehr zu wissen. Want to know more? Click here/hier. Or/Oder 
			<a href="<?php echo esc_url( wp_login_url( home_url() ) ); ?>">click here/hier</a> to login / um sich einzulogen</div>
		</div>
	</body>
<?php endif; ?>
