<?php 
/*
  Template Name: General Template
 */

?>
<?php get_header(); ?>
    
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        Services
                    </section>
                    <section class="home-blog">
                        <div class="container">
                            <div class="blog-items">
                            <?php
                                    // get_header(); 
                                    if ( have_posts() ) :
                                        while ( have_posts() ) : the_post();
                                            // Display post content ?>
                                            <article>
                                                <h1><?php the_title(); ?></h1>
                                                <?php the_content();?>
                                            </article>
                                        <?php  endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>