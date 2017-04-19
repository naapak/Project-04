<h1>we are in single.php</h1>
<?php
get_header();

if (have_posts()):
while ( have_posts()):the_post();

the_author();
the_date();
the_category();
the_tags();
the_post_thumbnail();
the_content();

endwhile;
else:

endif;
get_footer(); 




?>