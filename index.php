<?php get_header(); ?>

<?php while(have_posts()){
    the_post();
    echo '<h2>' . get_the_title() . '</h2>';
    echo '<p>' . the_content() . '</p>';
}
?>
<?php get_footer(); ?>