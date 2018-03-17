<?php

include('functions/gallery.php');
include('functions/lastupdate.php');
include('functions/comments.php');
include('functions/addsupport-thumbnail.php');
include('functions/addsupport-widget.php');

function neoMenu() {
    register_nav_menu('top',__( 'Navigation Menu' ));
    register_nav_menu('bottom',__( 'Footer Menu' ));
}
add_action( 'init', 'neoMenu' );