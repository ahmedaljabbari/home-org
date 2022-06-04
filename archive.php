<?php get_header(); ?>

<h1><?php the_archive_title(); ?></h1>
<p><?php the_archive_description(); ?></p>


<?php while(have_posts()){
    the_post();
}
?>
<?php get_footer(); ?>