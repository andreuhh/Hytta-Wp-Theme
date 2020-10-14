<?php get_header(); ?>
    <div class="hero">
        <div class="hero__content">
            <h1>Trova la tua prossima attività outdoor</h1>
            <div class="form">

                <div class="input-container">
                    <div class="left">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="right">
                        <input type="text" class="search-field " placeholder="Località">
                    </div>                   
                </div>

                <div class="input-container">
                    <div class="left">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="right">
                        <input type="text" class="search-field " placeholder="Data">
                    </div>                   
                </div>

                <div class="input-container">
                    <div class="left">
                        <i class="fas fa-running"></i>
                    </div>
                    <div class="right">
                        <input type="text" class="search-field " placeholder="Attività">
                    </div>                   
                </div>

                

                <button class="search-btn" type="button">Cerca</button>
            </div>
        </div>
    </div>


    <main>

        <?php 
            while(have_posts()) {
                the_post(); ?>
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
        <?php   }
        ?>
    </main>
    
<?php get_footer(); ?>
