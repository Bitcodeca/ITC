<!doctype html>
<html>
	<head>
    <meta charset="utf-8"> 
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<title>ITC</title>
		<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory');?>/img/favicon.png">
		<?php wp_head(); ?>
	</head>
		
	<?php 
        
        if( is_front_page() ):
            $portada = array( 'fondoportada' );
        endif;
        
    ?>
    
    <body ng-app="contactApp" <?php body_class( $portada ); ?>>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-70364405-9', 'auto');
            ga('send', 'pageview');
</script>

        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <?php $page = get_page_by_path( 'portada'); $thumb=$page->ID; ?>
                <div class="navbar-brand"><a href="index.php/?p=<?php echo $thumb; ?>"><img src="<?php echo get_bloginfo('template_directory');?>/img/logoitcnavbar.png" style="position:relative;"></a></div>
                </div>

                
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <?php  wp_nav_menu(array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new Bootstrap_Walker_Nav_Menu() ) ); ?>
                        </div>
            </nav>
        </div>