<?php get_header(); ?>

<h1>This is the front page that represents the home page of my site</h1>
<button class="btno">Try To Get</button>
<?php while(have_posts()){
    the_post();

}
?>
<?php get_footer(); ?>