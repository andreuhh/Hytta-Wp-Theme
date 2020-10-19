<!--
   Template Name: noleggio
-->
<?php get_header()?>
<main>


    <div class="main__carddiv">

        <h2>Noleggio Attrezzatura</h2>
        <div class="container">                             
            <?php echo do_shortcode('[products limit="8" columns="4" orderby="rating" category="noleggio"]' ); ?>    
        </div>  
                
    </div>

    </main>

<?php get_footer()?>