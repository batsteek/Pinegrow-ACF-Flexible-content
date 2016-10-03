<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'acf_landing' ); ?></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                     

                    <a class="navbar-brand" href="#"><?php _e( 'Brand', 'acf_landing' ); ?></a> 
                </div>                 

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                                           

                    <ul class="nav navbar-nav navbar-right"> 
                        <li>
                            <a href="#"><?php _e( 'Link', 'acf_landing' ); ?></a>
                        </li>                         

                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php _e( 'Dropdown', 'acf_landing' ); ?> <b class="caret"></b></a> 
                            <ul class="dropdown-menu"> 
                                <li>
                                    <a href="#"><?php _e( 'Action', 'acf_landing' ); ?></a>
                                </li>                                 

                                <li>
                                    <a href="#"><?php _e( 'Another action', 'acf_landing' ); ?></a>
                                </li>                                 

                                <li>
                                    <a href="#"><?php _e( 'Something else here', 'acf_landing' ); ?></a>
                                </li>                                 

                                <li class="divider"></li>                                 

                                <li>
                                    <a href="#"><?php _e( 'Separated link', 'acf_landing' ); ?></a>
                                </li>                                 
                            </ul>                             
                        </li>                         
                    </ul>                     
                </div>                 
            </div>             
        </nav>
        <?php if ( function_exists( 'have_rows' ) ) : ?>
            <div id="wrapper">