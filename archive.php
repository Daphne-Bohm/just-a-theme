<?php get_header(); ?>

    <section class="blog-container"> 
        <h1 class="blog-title"><?php the_archive_title(); ?></h1>

        <?php 
            
            while(have_posts()){
                the_post();

                ?>
                
                <article class="blog-post">
                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    <div class="blog-post-content">
                        <?php
                            if(has_post_thumbnail()){
                                ?>
                                <img class="blog-post-thumb" src="<?php the_post_thumbnail_url('small-thumb'); ?>" alt="<?php the_title(); ?> thumbnail">
                            <?php }
                        ?>
                        <div class="blog-post-text">
                            <p><?php the_excerpt(); ?></p>
                            <button class="btn make-uppercase blog-read-more-btn"><a href="<?php the_permalink(); ?>">Read more</a></button>
                        </div>
                    </div>
                </article>

            <?php }

        ?>

    </section>

<?php get_footer(); ?>