<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action( 'lilac_hook_top' ); ?>
    <?php lilac_template_part( 'content', 'content', '404' ); ?>
    <?php do_action( 'lilac_hook_bottom' ); ?>
    <?php wp_footer(); ?>
</body>
</html>