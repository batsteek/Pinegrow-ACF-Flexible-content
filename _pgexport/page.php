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
                <?php if ( have_rows('homepage_sections') ) : ?>
                    <div id="home-inner">
                        <?php
                            while ( have_rows('homepage_sections') ) : the_row()
                         ?>
                        <?php if ( get_row_layout() == 'intro_section' ) : ?>
                            <section class="acf-section bg-01">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="<?php the_sub_field( 'intro_image'); ?>" class="img-responsive" width="100%" />
                                        <div class="acf-inner-section">
                                            <h2 class="text-center"><?php the_sub_field( 'intro_title'); ?></h2>
                                            <p class="text-center lead"><?php the_sub_field( 'intro_paragraph'); ?></p>
                                            <a class="btn btn-default btn-lg" href="<?php echo esc_url( the_sub_field( 'intro_link') ); ?>"><?php the_sub_field( 'intro_btn_text'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php elseif ( get_row_layout() == 'promo_section' ) : ?>
                            <section class="acf-section bg-01 bg-02">
                                <div class="container-fluid">
                                    <div class="row">
                                        <img src="<?php the_sub_field( 'promo_image'); ?>" class="img-responsive" width="100%" />
                                        <div class="acf-inner-section">
                                            <h2 class="text-center"><?php the_sub_field( 'promo_title'); ?></h2>
                                            <p class="text-center lead"><?php the_sub_field( 'promo_paragraph'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php
                            endwhile;
                        ?>
                    </div>
                <?php else : ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger"> 
                                    <strong><?php _e( 'Please Install/Activate ACF Pro', 'acf_landing' ); ?></strong> 
                                    <?php _e( 'You need ACF Pro in order to run the Example.', 'acf_landing' ); ?> 
                                </div>                                 
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="panel-footer">
            <?php _e( 'Panel footer', 'acf_landing' ); ?>
        </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php wp_footer(); ?>
    </body>
</html>
