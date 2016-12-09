<!DOCTYPE HTML>
<html>

<head>
  <title>Verti by HTML5 UP</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
  <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  <?php wp_head(); ?>
</head>

<body class="homepage">
  <div id="page-wrapper">

    <!-- Header -->
    <div id="header-wrapper">
      <header id="header" class="container">

        <!-- Logo -->
        <div  class ="main-logo" id="logo" >
          <a href="<?php bloginfo('url');?>">
            <img src="<?php bloginfo('template_url');?>/images/logo.jpg" alt=""> 
         </a> 
        </div>

        <!-- Nav -->


        <?php wp_nav_menu(array('theme_location'=>'main_menu' ,
                                    'container' => 'nav',
                                    'container_id'=>'nav',
                                    'menu_class'=>''));?>




          <!--
							<nav id="nav">
								<ul>
									<li class="current"><a href="index.html">Welcome</a></li>
									<li>
										<a href="#">Dropdown</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
								</ul>
							</nav>
-->

      </header>
    </div>