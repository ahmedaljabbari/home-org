<?php get_header(); ?>
<h2>Upcoming things to do:</h2>
<?php while(have_posts()){
    the_post();
    
}
?>
<?php get_footer(); ?>