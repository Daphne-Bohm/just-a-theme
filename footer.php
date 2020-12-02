
    <?php
        $homepageID = get_the_ID();
    ?>

    <footer>

        <div class="footer-info">
            <div class="contact-container">
                <h3 class="contact-title">Contact</h3>
                <ul class="contact">
                    <li class="contact-item">(310) 798 2672</li>
                    <li class="contact-item">info@classicsalone.com</li>
                    <li class="contact-item">1211 Aviation Blvd, Hermosa Beach, CA 90254, United States</li>
                </ul>
            </div>
            <div class="company-container">
                <h3 class="company-title">Company</h3>
                <ul class="company">
                    <li class="company-item make-uppercase">
                        <a href="<?php if(!$homepageID){ ?> #about <?php } else { ?> /#about <?php } ?>">About</a>
                    </li>
                    <li class="company-item make-uppercase">
                        <a href="<?php if(!$homepageID){ ?> #services <?php } else { ?> /#services <?php } ?>">Services</a></li>
                    <li class="company-item make-uppercase">
                        <a href="<?php if(!$homepageID){ ?> #portfolio <?php } else { ?> /#portfolio <?php } ?>">Portfolio</a>
                    </li>
                    <li class="company-item make-uppercase">
                        <a href="<?php if(!$homepageID){ ?> #prices <?php } else { ?> /#prices <?php } ?>">Prices</a>
                    </li>
                    <li class="company-item make-uppercase">
                        <a href="<?php if(!$homepageID){ ?> #team <?php } else { ?> /#team <?php } ?>">Team</a>
                    </li>
                    <li class="company-item make-uppercase">
                        <a href="<?php if(!$homepageID){ ?> #customers <?php } else { ?> /#customers <?php } ?>">Customers</a>
                    </li>
                    <li class="company-item make-uppercase"><a href="/blogs">Blog</a></li>
                </ul>
            </div>
            <div class="project-container">
                <h3 class="project-title">Do you have a project?</h3>
                <p class="project-text">Leave your email and we will contact you as soon as possible.</p>
                <div class="project-email">
                    <input class="project-input" type="email" placeholder="Your Email">
                    <button class="project-btn btn">send</button>
                </div>
            </div>
        </div>

        <hr>

        <div class="copywrite">
            <p class="copywrite-text">@2020 The Classic Salone. All Rights Reserved</p>
            <h1 class="logo make-uppercase logo-footer">classic salone</h1>
        </div>

    </footer>



    <?php wp_footer(); ?> 
</body>
</html>