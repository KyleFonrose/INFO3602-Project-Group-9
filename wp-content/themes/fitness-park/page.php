<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fitness_Park
 */

get_header();

$sidebar = esc_attr( get_post_meta($post->ID, 'fitness_park_page_layouts', true ) );

if(!$sidebar){
    $sidebar = get_theme_mod('fitness_park_sidebar_options','right');
}

if ($sidebar == 'no' ) { 

    $col = 12;

} elseif ($sidebar == 'right' || $sidebar == 'left'){

    $col = 8;

}

?>
<div id="content" class="blog-post">
    <div class="container">
        <div class="row">

        	<?php if ($sidebar == 'left') { get_sidebar(); } ?>

			<div id="primary" class="content-area col-lg-<?php echo intval($col ); ?> col-md-<?php echo intval($col ); ?> col-sm-12 col-xs-12 ">
				<main id="main" class="site-main">
				<!-- display content of page-->
					<?php
						while ( have_posts() ) :
							the_post();
							the_content();


						endwhile; // End of the loop.
					?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<?php if ($sidebar == 'right') { get_sidebar(); } ?>
		</div>
	</div>
</div>
<?php get_footer();