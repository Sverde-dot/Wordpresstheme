<?php


get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">
        <div style="background-color: #5d01ff;color: #00a0d2">
        <br>
        <h1>CONGRATULATIONS YOU FOUND NOTHING</h1>
        <br>
        </div>
        <br>
		<h2 class="entry-title" style="background-color: #ffd800"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h2>

		<div class="intro-text"><p style="background-color: #00a0d2;color: #ffffff"><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'PrimerTheme' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'PrimerTheme' ),
			)
		);
		?>
        <br>
        <b id="comentario">Pagina de error personalizada</b>
	</div><!-- .section-inner -->


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
