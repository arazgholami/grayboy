<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        bloginfo( 'name' );
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo "";
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
        ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Designer, Programmer, Developer">
    <meta name="author" content="Araz Gholami">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://arazgholami.com/xmlrpc.php">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.ico" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="RSS Feed (All)" href="https://arazgholami.com/feed/">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="">
    <meta name="twitter:title" content="Araz Gholami">
    <!--
        And now, the end is near
        And so I face the final curtain
        My friend, I'll say it clear
        I'll state my case, of which I'm certain
        I've lived a life that's full
        I've traveled each and every highway
        But more, much more than this
        I did it my way
        Regrets, I've had a few
        But then again, too few to mention
        I did what I had to do
        And saw it through without exemption
        I planned each charted course
        Each careful step along the byway
        And more, much more than this
        I did it my way
        Yes, there were times, I'm sure you knew
        When I bit off more than I could chew
        But through it all, when there was doubt
        I ate it up and spit it out
        I faced it all and I stood tall
        And did it my way
        I've loved, I've laughed and cried
        I've had my fill my share of losing
        And now, as tears subside
        I find it all so amusing
        To think I did all that
        And may I say - not in a shy way
        Oh no, oh no, not me
        I did it my way
        For what is a man, what has he got
        If not himself, then he has naught
        To say the things he truly feels
        And not the words of one who kneels
        The record shows I took the blows
        And did it my way
        Yes, it was my way
    -->
</head>
<body>
