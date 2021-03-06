<?php
    /* Main Header template */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php wp_head() ?>
</head>
<body>
<main>
<header>
    <nav class="header-nav">
           <?php
           wp_nav_menu( $arg = [
               'theme_location' => 'primary'
           ]);
           ?>
    </nav>
</header>