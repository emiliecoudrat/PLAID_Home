
<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf-8"> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <title><?php echo $title; ?></title> -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid wrapper">
		<header>
	<!--la div header-->
			<div class="header">
			<div class="mask"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="titres">
							<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>
							<h2>Le site où la <span id="lose">lose</span> se sent bien.</h2>
						</div>
					</div>
				</div>
			</div>
		</header>	


<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid container-navbar">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="index.php"><li><p>home</p></li></a> -->
    
    <!-- Collect the nav links, forms, and other content for toggling -->
<!--     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav">
        	<li><a href="article.html"><p>en mode plaid</p></a></li>
        	<li><a href="article.html"><p>we are family</p></a></li>
        	<li><a href="https://twitter.com/intent/tweet?hashtags=plaidfilter%2C&original_referer=&related=jasoncosta&share_with_retweet=never&text=My%20story%20is%20about%20what%27s%20happening%20today&tw_p=tweetbutton"><p>#plaidfilter</p></a></li>
        	<li>c<p>devenir plaider</p></a></li>
		</ul>
	</div>	 -->

	<?php
    wp_nav_menu( array(
      'menu' => 'menu_principal',
      'theme_location' => 'menu_principal',
      'depth' => 2,
      'container' => 'div',
      'container_class' => 'collapse navbar-collapse row',
      'container_id' => 'bs-example-navbar-collapse-1',
      'menu_class' => 'nav navbar-nav',
      'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
      'walker' => new wp_bootstrap_navwalker())
    );
  	?>
		</div>
	</div><!-- /.container-fluid -->		
</nav>