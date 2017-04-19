<h1>this is archive.php</h1>
<?php 
get_header();

if (have_posts()):
while ( have_posts()):the_post();


$title = get_the_title();
$excert =  get_the_excerpt();
$author = get_the_author();
$date = get_the_date();
$link = get_the_permalink();


echo "<h1>$title</h1>";
echo "<p>$excert</p>";
echo "<p>$date</p>";
echo "<p>$author</p>";
echo "<a href='$link'  >Read more</a>";
echo "<hr>";
endwhile;
else:

endif;


get_footer();



?>