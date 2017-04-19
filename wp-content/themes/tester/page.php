<h1> This is the page.php </h1>
<?php
get_header();


if (have_posts()):
while (have_posts()): the_post();
the_title();
the_author();
the_date();
the_content();


endwhile;
else:



endif;


get_footer();


















?>