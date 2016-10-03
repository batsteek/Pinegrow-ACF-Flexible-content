<?php
get_header( 'front-page' ); ?>

<?php if ( class_exists('acf') ) : ?>
    <div id="wrapper" class="acf-wrapper">
        <?php if ( have_rows('homepage_sections') ) : ?>
            <div id="home-inner">
                <?php
                    while ( have_rows('homepage_sections') ) : the_row()
                ?>
                <?php if ( get_row_layout() == 'jumbotron_section' ) : ?>
                    <div class="jumbotron" style="background-color:<?php the_sub_field( 'jumbotron_background_color'); ?>;"> 
                        <div class="container">
                            <h1><?php the_sub_field( 'jumbotron_title'); ?></h1>
                            <p><?php the_sub_field( 'jumbotron_subtitle'); ?></p>
                            <p><a class="btn btn-primary btn-lg" role="button" href="<?php echo esc_url( the_sub_field( 'jumbotron_link') ); ?>"><?php the_sub_field( 'jumbotron_btn_text'); ?></a></p>
                        </div>
                    </div>
                <?php elseif ( get_row_layout() == 'three_columns_section' ) : ?>
                    <section class="acf-section">
                        <div class="container">
                            <div class="row">
                                <div class="acf-inner-section col-sm-4 col-xs-12">
                                    <h2 class="text-center"><?php the_sub_field( 'three_columns_title01'); ?></h2>
                                    <p class="text-center"><?php the_sub_field( 'three_columns_paragraph01'); ?></p>
                                    <a class="btn btn-primary" href="<?php echo esc_url( the_sub_field( 'three_columns_link01') ); ?>"><?php the_sub_field( 'three_columns_btn_tex01'); ?></a>
                                </div>
                                <div class="acf-inner-section col-sm-4 col-xs-12">
                                    <h2 class="text-center"><?php the_sub_field( 'three_columns_title02'); ?></h2>
                                    <p class="text-center"><?php the_sub_field( 'three_columns_paragraph02'); ?></p>
                                    <a class="btn btn-info" href="<?php echo esc_url( the_sub_field( 'three_columns_link02') ); ?>"><?php the_sub_field( 'three_columns_btn_tex03'); ?></a>
                                </div>
                                <div class="acf-inner-section col-sm-4 col-xs-12">
                                    <h2 class="text-center"><?php the_sub_field( 'three_columns_title03'); ?></h2>
                                    <p class="text-center"><?php the_sub_field( 'three_columns_paragraph03'); ?></p>
                                    <a class="btn btn-success" href="<?php echo esc_url( the_sub_field( 'three_columns_link03') ); ?>"><?php the_sub_field( 'three_columns_btn_tex03'); ?></a>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php elseif ( get_row_layout() == 'cta_section' ) : ?>
                    <section class="acf-section bg-03 color-01" style="background-color:<?php the_sub_field( 'cta_background_color'); ?>;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="acf-inner-section">
                                    <h2 class="text-center"><?php the_sub_field( 'cta_title'); ?></h2>
                                    <p class="text-center lead"><?php the_sub_field( 'cta_paragraph'); ?></p>
                                    <a class="btn btn-default btn-lg" href="<?php echo esc_url( the_sub_field( 'cta_link') ); ?>"><?php the_sub_field( 'cta_btn_text'); ?></a>
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
                        <div class="alert alert-info"> 
                            <strong><?php _e( 'INFO', 'pg_acfpro' ); ?></strong> 
                            <?php _e( 'Nothing to Display!.', 'pg_acfpro' ); ?> 
                        </div>                                     
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger"> 
                    <strong><?php _e( 'Activate ACF Pro', 'pg_acfpro' ); ?></strong> 
                    <?php _e( 'You need ACF Pro in order to run the Demo.', 'pg_acfpro' ); ?> 
                </div>                             
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer( 'front-page' ); ?>