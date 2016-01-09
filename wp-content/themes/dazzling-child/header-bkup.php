<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>
<body id="page-top" <?php body_class(); ?>>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo-brand.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="http://sulley.cah.ucf.edu/~dig4104c_006/juscuzcustoms1.0/index.php">Home</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
    				<li class="logo">
                        <a href="index.html"><img src="http://sulley.cah.ucf.edu/~dig4104c_006/juscuzcustoms1.0/wp-content/uploads/2015/11/jus_cuz_logo_white-01.png"></a>
                    </li>
        			<li>
                        <a href="http://sulley.cah.ucf.edu/~dig4104c_006/juscuzcustoms1.0/index.php/gallery/">Gallery</a>
                    </li>
                    <li>
                        <a href="http://sulley.cah.ucf.edu/~dig4104c_006/juscuzcustoms1.0/index.php/blog/">Blog</a>
                    </li>
                    <li>
                        <a href="http://sulley.cah.ucf.edu/~dig4104c_006/juscuzcustoms1.0/index.php/contact/">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
	</nav><!-- .site-navigation -->
<?php
            
                global $post;
                if( get_post_meta($post->ID, 'site_layout', true) ){
                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
                }
                else{
                        $layout_class = of_get_option( 'site_layout' );
                }
                if( is_home() && is_sticky( $post->ID ) ){
                        $layout_class = of_get_option( 'site_layout' );
                }
                ?>
                <div class="row <?php echo $layout_class; ?>">