<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package video_out_trial
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<title>Video Out Practice Site</title>
</head>
<body>
<header>

<header>
        <nav class="navbar navbar-expand-lg my_navbar navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img class="mt-2 ms-3" src="<?php echo get_theme_file_uri('/images/video-out-logo.png'); ?>" alt="logo" width="230" height="80">
              </a>
              <button class = "navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mt-4 ">
                  <li class="nav-item">
                    <a class="nav-link " href=" <?php echo site_url('/topics')?> "><h2>Topics</h2></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/about')?>"><h2>About</h2></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/contact')?> "><h2>Contact</h2></a>
                  </li>
				  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('/donate')?> "><h2>Donate</h2></a>
                  </li>
                
                </ul>
              </div>
            </div>
          </nav>
      </header>

    </header>

