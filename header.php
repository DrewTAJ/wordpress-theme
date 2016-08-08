<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- <link href="styles/bootstrap.min.css" rel="stylesheet" /> -->
     <!--<link href="styles/bootstap-theme.min.css" rel="stylesheet" />
     <link href="styles/index.css" rel="stylesheet" />
     <link href="style.css" rel="stylesheet" />-->
     <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <?php endif; ?>
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Archive</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>    