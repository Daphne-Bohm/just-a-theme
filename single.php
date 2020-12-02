<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <article class="blog-post-container">
        <div class="blog-post-info">
            <h1 class="blog-post-title"><?php the_title(); ?></h1>
            <h3 class="blog-post-category">category: <a href="#"><?php echo get_the_category_list(', ') ?></a></h3>
            
        </div>
        <p class="blog-post-content"><?php the_content(); ?></p>
    </article>
    
    <?php }

  get_footer();

?>