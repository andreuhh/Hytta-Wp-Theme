<?php
/**
*Template Name: Home Page
*/
get_header();
?>

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
        <h2>I servizi</h2>
        <div class="main__service">
            <div class="main__service__items">
                <img src="<?php echo get_theme_file_uri('/img/service1.png')?>" width="70px" height="70px" alt="computer icon">
                <p>Prenotazione Online di attività outdoor.</p>
            </div>
            <div class="main__service__items">
                <img src="<?php echo get_theme_file_uri('/img/service2.png')?>" width="70px" height="70px" alt="rental icon">
                <p>Noleggio attrezzatura sportiva
                    da negozi o privati.</p>
            </div>
            <div class="main__service__items">
                <img src="<?php echo get_theme_file_uri('/img/service3.png')?>" width="70px" height="70px" alt="money icon">
                <p>Possibilità di guadagno noleggiando la propria attrezzatura ad altri utenti del sito.</p>
            </div>
        </div>


        <h2 id="carouselTitle">Qual è il tuo habitat?</h2>
        <div class="carousel-container">
            <div class="carousel-inner">
                <div class="track">
                    <a href="<?php echo site_url('/tag-prodotto/acqua/') ?>">
                        <div class="card-container-carousel">
                            <div class="card-carousel">
                                <div class="img-carousel img-1" alt="water sport picture">
                                    <p>Acqua</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="<?php echo site_url('/tag-prodotto/terra/') ?>">
                        <div class="card-container-carousel">
                            <div class="card-carousel">
                                <div class="img-carousel img-2" alt="bmx sport picture">
                                    <p>Terra</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="<?php echo site_url('/tag-prodotto/aria/') ?>">
                        <div class="card-container-carousel">
                            <div class="card-carousel">
                                <div class="img-carousel img-3" alt="zipline sport picture">
                                    <p>Aria</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="<?php echo site_url('/tag-prodotto/neve/') ?>">
                        <div class="card-container-carousel">
                            <div class="card-carousel">
                                <div class="img-carousel img-4" alt="skii sport picture">
                                    <p>Neve</p>
                                </div>
                            </div>
                        </div>
                    </a>


                    <a href="<?php echo site_url('/tag-prodotto/urban/') ?>">
                        <div class="card-container-carousel">
                            <div class="card-carousel">
                                <div class="img-carousel img-5" alt="skateboard sport picture">
                                    <p>Urban</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
    
            <div class="nav-carousel">
                <button class="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>



        <div class="main__carddiv">
            <h2>Attività outdoor in evidenza</h2>
            <div class="container">                             
                <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" category="attività"]' ); ?>    
            </div>  
            
            <a href="<?php echo site_url('/attivita') ?>"><button class="btn-secondary" type="button">Vedi altre</button></a>
        </div>

        <div class="main__carddiv">
            <h2>Noleggio: attrezzatura in evidenza</h2>
            <div class="container">
                <?php echo do_shortcode('[products limit="4" columns="4" orderby="date" category="noleggio"]' ); ?>   
            </div>  
            
            <a href="<?php echo site_url('/noleggio') ?>">
                <button class="btn-secondary" type="button">Vedi altre</button>
            </a>
            
        </div>

        <section class="registerBlock">
            <div class="registerBlock__container">
                <div class="registerBlock__container__item1">
                    <div class="registerBlockText">
                    <h3>Pubblica le tue attività</h3>
                    <p>Pubblica le tue attività e trova nuovi fantastici clienti</p>
                    <a href="partner.html">
                        <button class="btn-secondary-black" type="button">Diventa partner</button>
                    </a>  
                    </div>
                </div>
                <div class="registerBlock__container__item2" alt="girl in a camping photo"></div>
            </div>
        </section>

    <section class="galleryBlock">
        <h2>Le Attività preferite dai nostri utenti</h2>
        <div class="containerGallery">
            <div class="containerGallery__item1" alt="canyoning activity">
                <h5>Canyoning in Valle d'Aosta</h5>
                <div class="containerGallery__price">
                    <p>da <span>50€</span></p>
                </div>
            </div>
            <div class="containerGallery__item2" alt="man in a kayak">
                <h5>Kayak tour sul Lago di Castel Gandolfo</h5>
                <div class="containerGallery__price">
                    <p>da <span>43€</span></p>
                </div>
            </div>
            <div class="containerGallery__item3" alt="skateboard class">
                <h5>Lezione di skate a Milano</h5>
                <div class="containerGallery__price">
                    <p>da <span>27€</span></p>
                </div>
            </div>
            <div class="containerGallery__item4" alt="snowbike picture">
                <h5>Corso di SnowBike in Trentino</h5>
                <div class="containerGallery__price">
                    <p>da <span>39€</span></p>
                </div>
            </div>
        </div>
    </section> 
    
    
    <section class="faq">
        <h2>FAQ</h2>
        <div class="accordion">

            <div class="accordion-item">
                <div class="accordion-item-header">
                    <p>Come funziona Hytta?</p>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nobis velit a consequatur quisquam labore?</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header">
                    <p>Come faccio a registrarmi?</p>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nobis velit a consequatur quisquam labore?</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header">
                    <p>Posso noleggiare ad altri la mia atrezzatura anche se non sono un negozio?</p>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nobis velit a consequatur quisquam labore?</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header">
                    <p>Come faccio a registrarmi?</p>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nobis velit a consequatur quisquam labore?</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    </main>
<?php get_footer(); ?>