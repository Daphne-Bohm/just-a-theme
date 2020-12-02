<?php get_header(); ?>

    <!--hero-->
    <section class="hero">
        <h1 class="hero-title"><?php bloginfo('description'); ?></h1>
        <button class="btn hero-btn"><a href="#">Book now</a></button>
    </section>

    <!--about-->
    <section class="about-container" id="about">
        <div class="about">
            <hr class= "about-hr-top">
            <h1 class="about-title">A message from<span> John Doe</span></h1>
            <p class="about-text">The classic salone in a nutshell is my childhood dream come true. Ever since I was 8 years old I knew what I wanted to dedicate my life’s work too – being a hairstylist and providing my clients with the highest quality service and confidence-building looks.</p>
        </div>
        <div class="about-grey-box"></div>
        <img class="about-autograph" src="<?php echo get_theme_file_uri('images/autograph.png');?>" alt="John Doe Autograph">
    </section>

    <!--services-->
    <section class="services-container" id="services">
        <h2 class="services-title">Services</h2>
        <ul class="services">
            <li class="service">
                <img src="<?php echo get_theme_file_uri('images/haircut.png');?>" alt="Precision Haircuts">
                <h5>Precision Haircuts</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget est at ligula scelerisque ullamcorper ac nec ipsum. Nullam molestie.</p>
            </li>
            <li class="service">
                <img src="<?php echo get_theme_file_uri('images/lumieres.png');?>" alt="Lumieres De Flux">
                <h5>Lumieres De Flux</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget est at ligula scelerisque ullamcorper ac nec ipsum. Nullam molestie.</p>
            </li>
            <li class="service">
                <img src="<?php echo get_theme_file_uri('images/styling.png');?>" alt="High-Class Styling">
                <h5>High-Class Styling</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget est at ligula scelerisque ullamcorper ac nec ipsum. Nullam molestie.</p>
            </li>
            <li class="service">
                <img src="<?php echo get_theme_file_uri('images/coloring.png');?>" alt="Customized Coloring">
                <h5>Customized Coloring</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget est at ligula scelerisque ullamcorper ac nec ipsum. Nullam molestie.</p>
            </li>
            <li class="service">
                <img src="<?php echo get_theme_file_uri('images/treatments.png');?>" alt="Revitalizing Treatments">
                <h5>Revitalizing Treatments</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget est at ligula scelerisque ullamcorper ac nec ipsum. Nullam molestie.</p>
            </li>
            <li class="service">
                <img src="<?php echo get_theme_file_uri('images/consultations.png');?>" alt="Virtual Consultations">
                <h5>Virtual Consultations</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget est at ligula scelerisque ullamcorper ac nec ipsum. Nullam molestie.</p>
            </li>
        </ul>
    </section>

    <!--Portfolio-->
    <section class="portfolio" id="portfolio">
        <h2 class="portfolio-title">Our Creativity Your Beauty</h2>
        <div class="portfolio-background"></div>
        <div class="portfolio-slider-container">
            <?php echo do_shortcode('[metaslider id="18"]'); ?>
        </div>
    </section>

    <!--Packages-->
    <section class="prices-container" id="prices">
        <h2 class="prices-title">Product Packages</h2>
        <ul class="prices">
            <!--1-->
            <li class="price">
                <div class="price-info">
                    <h5 class="price-info-title make-uppercase">Sunkissed Shine</h5>
                    <button class="price-book-now make-uppercase">Book now +</button>
                </div>
                <ul class="price-details">
                    <li class="price-details-item">Colour Shampoo</li>
                    <li class="price-details-item">Colour Conditioner</li>
                    <li class="price-details-item">Shine Booster</li>
                    <li class="price-details-item">Colour Lustre Oil</li>
                </ul>
            </li>
            <!--2-->
            <li class="price">
                <div class="price-info">
                    <h5 class="price-info-title make-uppercase">Dry Hair, I Care</h5>
                    <button class="price-book-now make-uppercase">Book now +</button>
                </div>
                <ul class="price-details">
                    <li class="price-details-item">Moisture Shampoo</li>
                    <li class="price-details-item">Moisture Conditioner</li>
                    <li class="price-details-item">Moisture Booster</li>
                    <li class="price-details-item">Heat Protection</li>
                </ul>
            </li>
            <!--3-->
            <li class="price">
                <div class="price-info">
                    <h5 class="price-info-title make-uppercase">The Volume Turned Up</h5>
                    <button class="price-book-now make-uppercase">Book now +</button>
                </div>
                <ul class="price-details">
                    <li class="price-details-item">Volume Shampoo</li>
                    <li class="price-details-item">Volume Conditioner</li>
                    <li class="price-details-item">Volume Lift Styling Spray</li>
                    <li class="price-details-item">Volume Finishing Hairspray</li>
                </ul>
            </li>
            <!--4-->
            <li class="price">
                <div class="price-info">
                    <h5 class="price-info-title make-uppercase">Summer Hair Repair</h5>
                    <button class="price-book-now make-uppercase">Book now +</button>
                </div>
                <ul class="price-details">
                    <li class="price-details-item">Repair Shampoo</li>
                    <li class="price-details-item">Repair Conditioner</li>
                    <li class="price-details-item">Volume Lift Styling Spray</li>
                    <li class="price-details-item">Volume Finishing Hairspray</li>
                </ul>
            </li>
        </ul>
        <div class="other-prices">
            <button class="btn make-uppercase other-prices-btn">Other prices +</button>
        </div>
    </section>

    <!--Team-->
    <section class="team" id="team">
        <h2 class="team-title">Meet The Team</h2>
        <div class="team-slider-container">
            <?php echo do_shortcode('[metaslider id="35"]'); ?>
        </div>
    </section>

    <!-- Customers -->
    <section class="customers" id="customers">
        <div class="customers-slider-container">
            <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
        </div>
    </section>

    <!-- Blogs homepage -->
    <section class="blogs-homepage-container">
        <h2 class="blogs-homepage-title">Our blogs</h2>
        <ul class="blogs-homepage">

            <?php 
            
                $homepagePosts = new WP_Query(array(
                    'post_per_page' => 3
                ));

                while($homepagePosts->have_posts()){
                    $homepagePosts->the_post();
                    
                    ?>

                    <li class="blog-homepage">
                        <div class="blog-homepage-thumbnail">
                            <?php
                                if(has_post_thumbnail()){
                                ?>
                                    <img src="<?php the_post_thumbnail_url('small-thumb'); ?>" alt="<?php the_title(); ?> thumbnail">
                                <?php }
                            ?>
                        </div>
                        <div class="blog-homepage-text">
                            <p class="blog-homepage-category make-uppercase"><?php single_cat_title(); ?></p>
                            <h5 class="blog-homepage-title"><?php the_title(); ?></h5>
                            <a href="<?php the_permalink(); ?>">More +</a>
                        </div>
                    </li>
                
                <?php }
            
            ?>
            
        </ul>
    </section>

<?php get_footer(); ?>