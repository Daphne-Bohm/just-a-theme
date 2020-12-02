<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body>

    <?php
        $homepageID = get_the_ID();
    ?>

    <header>
        <div class="logo-container">
            <a href="/"><h1 class="logo make-uppercase">classic salone</h1></a>
        </div>
        <nav class="navigation-bar">
            <ul class="nav-links make-uppercase">
                <li class="nav-link">
                    <a href="<?php if(!$homepageID){ ?> #about <?php } else { ?> /#about <?php } ?>">About</a>
                </li>
                <li class="nav-link">
                    <a href="<?php if(!$homepageID){ ?> #services <?php } else { ?> /#services <?php } ?>">Services</a></li>
                <li class="nav-link">
                    <a href="<?php if(!$homepageID){ ?> #portfolio <?php } else { ?> /#portfolio <?php } ?>">Portfolio</a>
                </li>
                <li class="nav-link">
                    <a href="<?php if(!$homepageID){ ?> #prices <?php } else { ?> /#prices <?php } ?>">Prices</a>
                </li>
                <li class="nav-link">
                    <a href="<?php if(!$homepageID){ ?> #team <?php } else { ?> /#team <?php } ?>">Team</a>
                </li>
                <li class="nav-link">
                    <a href="<?php if(!$homepageID){ ?> #customers <?php } else { ?> /#customers <?php } ?>">Customers</a>
                </li>
                <li class="nav-link"><a href="/blogs">Blog</a></li>
            </ul>
        </nav>
        <div class="book-now-container">
            <button class="btn book-now"><a href="#">Book now</a></button>
        </div>
        <div class="hamburger-menu"></div>
    </header>
    
