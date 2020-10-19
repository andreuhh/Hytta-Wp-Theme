<!--
   Template Name: attività
-->
<?php get_header()?>
<main>


    <div class="main__carddiv">

        <h2>Attività</h2>
        <div class="container">                             
            <?php echo do_shortcode('[products limit="12" columns="4" orderby="rating" category="attività"]' ); ?>    
        </div>  
                
    </div>

    </main>

<?php get_footer()?>