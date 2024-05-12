<?php get_header(   );?>
<?php
   
        while ( have_posts() ) : the_post();
            // Display post content ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium');?></a>
                <div class="meta-info">
                    <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                    <p>Categories: <?php the_category( ' ' ); ?></p>
                    <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                </div>
                <?php the_content();?>
            </article>
        <?php  endwhile; ?>
<?php get_footer(   );?>