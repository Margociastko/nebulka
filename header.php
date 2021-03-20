<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title><?php wp_title( '|', true, 'right' );  bloginfo( 'name' ); ?></title>
          <link rel="profile" href="http://gmpg.org/xfn/11" />
          <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
          <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/components/img/favicon.ico'; ?>"/>
          <link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri() . '/components/img/favicon.ico'; ?>" sizes="16x16">
          <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
          <?php wp_head(); ?>
      </head>

      <body <?php body_class();  ?>>

        <nav class="container-fluid" style="background-color: #020C18">
<div class="logo col-xl-2">
  <img src="<?php echo get_template_directory_uri() . '/components/img/nebulaepl-logo.png'; ?>">

</div>
</nav>
