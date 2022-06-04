<?php get_header(); 

$myExpenses = new WP_Query(array(
    'post_type' => 'expense'
));

?>
<div class="expensesTable">
    <div class="row tabHEAD">
        <b>Date</b>
        <b>Title</b>
        <b>Description</b>
        <b>Price</b>
        <b>Currency</b>
    </div>
<?php while($myExpenses->have_posts()){
    $myExpenses->the_post();                
        $dato = DateTime::createFromFormat('d/m/Y', get_field('date'));
        
        ?>
    <div class="row">
        <span><?php echo $dato->format('d-M-Y'); ?></span>
        <span><?php the_title(); ?></span>
        <span><?php the_content(); ?></span>
        <span class="price"><?php the_field('price'); ?></span>
        <span><?php the_field('currency'); ?></span>
    </div>
        
    

<?php } ?>
    <div class="tabFOOTER">
        <h3>Total</h3>
        <b id="totalPrice"></b>
        
    </div>
</div>

<?php get_footer(); ?>