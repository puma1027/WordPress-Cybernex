<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cybernex</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/commen.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <?php wp_head() ?>
</head>

<body id="main">

<?php if(isJA()) :?>
    <header class="font-weight-bold">
        <div class="page-container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand logo" href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri()?>/image/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/ja/about-jp" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/ja/news" class="nav-link">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/ja/service-jp" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/ja/careers" class="nav-link">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/faq" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item sp">
                            <a href="<?php echo get_site_url();?>/contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item pc">
                            <a href="<?php echo get_site_url();?>/contact" class="nav-link contact-btn">Contact</a>
                        </li>
                    </ul>
                    <div class="language-btn">
                        <?php pll_the_languages(); ?>
                    </div>
                </div>

            </nav>
        </div>
    </header>
<?php else :?>
    <header class="font-weight-bold">
        <div class="page-container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand logo" href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri()?>/image/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/news" class="nav-link">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/service" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/careers" class="nav-link">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo get_site_url();?>/faq" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item sp">
                            <a href="<?php echo get_site_url();?>/contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item pc">
                            <a href="<?php echo get_site_url();?>/contact" class="nav-link contact-btn">Contact</a>
                        </li>
                    </ul>
                    <div class="language-btn">
                        <?php pll_the_languages(); ?>
                    </div>
                </div>

            </nav>
        </div>
    </header>
<?php endif;?>
