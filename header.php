<?php

?>

<!doctype html>

<html <?php language_attributes(); ?> style="font-size:100%">

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
		<?php esc_html_e( 'Skip to content', 'skillstest-base' ); ?>
    </a>
    <header id="masthead" class="site-header"></header>

    <div id="content" class="site-content">
