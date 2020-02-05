<?php

get_header();

?>


	<div id="primary" class="content-area grid-container fluid">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

				<?php

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'test-form' );

				endwhile;

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php

get_footer();


