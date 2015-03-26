<?php 
	$de_data = get_option( 'Lezatos_options' ); 
	global $de_data;
	
	if(!empty($de_data['DE_scheme_color'])){
	$de_scheme = $de_data['DE_scheme_color'];
	}else{
	$de_scheme = '';
	}
	
	$de_logo_file = $de_data ['DE_logo']; 
	$de_logo = get_site_url().substr($de_logo_file,10);
	$de_description = $de_data ['DE_website_description'];
	$de_keywords = $de_data ['DE_website_keywords'];
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<html <?php language_attributes(); ?>><head>
<?php if($de_description){ ?>
<meta name="description" content="<?php echo $de_description ?>">
<?php } ?>
<?php if($de_keywords){ ?>
<meta name="keywords" content="<?php echo $de_keywords ?>">
<?php } ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-52010434-1', 'cafetaboo.net');
ga('send', 'pageview');

</script>

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<link rel="shortcut icon" href="http://www.cafetaboo.net/cafetaboo/wp-content/uploads/2014/05/logo5.png" />
	
<!-- ********** wp_head ********** -->
<?php wp_head(); ?>
</head>
<?php $req="" ?>
<?php if($req=="unpassed"):  ?>
<body  <?php body_class( $class );?> >
<?php endif; ?> 
<body>
		<img src="http://cafetaboo.net/cafetaboo/wp-content/uploads/2014/05/star.gif" style="position:absolute;margin-top: 92px;z-index:11;right:1px;" width="130" height="130">
        <img src="http://cafetaboo.net/cafetaboo/wp-content/uploads/2014/05/ordernow-button.gif" alt="ordernow" style="position: relative;float: right;width: 160px;z-index:698;top: 44px; cursor: pointer;" onclick="ChowNow.popup(1369)"/>
		<script> (function(d, s, id) { var js, dt = new Date().getTime(), jst = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://facebook.chownow.com/static/js/iframe.js?'+dt+'#cid=1369'; jst.parentNode.insertBefore(js, jst); }(document, 'script', 'chownow-js')); </script>
		<?php 	
			$current_post_type = get_post_type( $post );
			$current_tax = get_query_var('project_categories');
		 ?>
        
		<?php if(is_home()){ ?>
		<script type='text/javascript' src='<?php echo get_template_directory_uri()?>/js/supersized/js/supersized.3.2.7.js'></script>
		<script type='text/javascript' src='<?php echo get_template_directory_uri()?>/js/supersized/theme/supersized.shutter.min.js'></script>
		 <?php 	include 'slider/fullscreen-slider.php'; } ?>
		<?php wp_reset_query(); ?>    
<div id="canvas">	
<div id="header" class="header">
    <div class="container">
    	<div class="four columns">
        	<div id="mainlogo" class="logo"><div class="inner"><a href="http://www.cafetaboo.net/"><img src="http://cafetaboo.net/cafetaboo/wp-content/uploads/2014/05/logo.png"<?php if ( $de_logo_file ) { echo $de_logo;} else{ echo get_template_directory_uri();
			if($de_scheme=="color-black.css"){echo '/images/logo-black.png';}
			else if($de_scheme=="color-brown.css"){echo '/images/logo-brown.png';}
			else if($de_scheme=="color-purple.css"){echo '/images/logo-purple.png';}
			else{echo '/images/logo.png';}
			?><?php } ?>" alt="logo" /></a></div></div>
        </div>
        <div class="twelve columns">
        	            <div class="twelve columns">
             <!-- ********** mainmenu ********** -->
                    <?php $defaults = array(
                        'theme_location'  => '',
                        'menu'            => '', 
                        'container'       => 'div', 
                        'container_class' => 'menu-container', 
                        'container_id'    => 'mainmenu',
                        'menu_class'      => 'menu', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="nav" class="nav">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    ); ?>
                    <?php wp_nav_menu( $defaults ); ?>
        </div>
    </div>
</div>
</div>
