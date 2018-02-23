1 <?php 
2 /** 
3  * @package Adirondack 
4  */ 
5 ?> 
6 
 
7 <?php if ( has_post_thumbnail() ) : 
8 	$image_id = get_post_thumbnail_id(); 
9 	$url = wp_get_attachment_image_src( $image_id, 'post-thumbnail' ); 
10 ?> 
11 
 
12 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: url(<?php echo esc_attr( $url[0] ); ?>) no-repeat center; background-size: cover;"> 
13 	<a href="<?php the_permalink(); ?>" rel="bookmark" class="entry-link"> 
14 		<header class="entry-header"> 
15 			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
16 		</header><!-- .entry-header --> 
17 
 
18 		<!-- <div class="link-button"><span>View </span></div>  -->
19 	</a> 
20 </article><!-- #post-<?php the_ID(); ?> --> 
21 
 
22 <?php else: ?> 
23 
 
24 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
25 	<a href="<?php the_permalink(); ?>" rel="bookmark" class="entry-link"> 
26 		<header class="entry-header"> 
27 			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
28 		</header><!-- .entry-header --> 
29 
 
30 		<div class="entry-summary"> 
31 			<?php the_excerpt(); ?> 
32 		</div> 
33 	</a> 
34 </article><!-- #post-<?php the_ID(); ?> --> 
35 
 
36 <?php endif; ?> 

