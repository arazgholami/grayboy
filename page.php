<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <header class="col-lg-24">
                <a href="<?php bloginfo('home'); ?>">
                    <h1>Araz Gholami</h1>
                    <span>Personal Website</span>
                </a>
            </header>
            <aside class="col-lg-5 col-lg-offset-2 col-md-6 col-sm-8">
                <ul>
                    <?php
                    $topMenu = wp_get_nav_menu_items(get_nav_menu_locations()[top]);
                    foreach ($topMenu as $item){
                        if($post->ID==$item->object_id){ $status = " active"; }
                        else{ $status = ""; }

                        echo "<li class=\"$status\"><a href=\"$item->url\">$item->title</a></li>";
                    }
                    ?>
                </ul>
            </aside>
            <div class="col-lg-14 col-md-18  col-sm-16">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article>
                            <?php

                            the_content("Read More...");

                            $link=get_edit_post_link( $id, $context );
                            if($link){ echo "<a href='$link'>Edit</a>"; }
                            ?>
                        </article>
                    <?php endwhile; ?>
                    <?php posts_nav_link(' ', 'Next Posts', 'Previous Posts'); ?>
                <?php else : ?>
                    <h2>404</h2>
                    <p>There's nothing here. Try search:</p>
                    <form class="search" action="<?php bloginfo('home'); ?>">
                        <input type="text" placeholder="Find..." id="search-input" name="s">
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>