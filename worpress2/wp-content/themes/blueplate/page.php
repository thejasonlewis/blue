<?php

get_header();

if(have_posts()) :
    while (have_posts()): the_post(); ?>
        <div class="page">
            <h2><?php the_title()?></h2>
            <?php the_content(); ?>
        </div>

    <?php endwhile;
else:
    echo '<p>no content found</p>';
endIf;

get_footer();
?>