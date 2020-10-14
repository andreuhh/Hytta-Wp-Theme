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

    <?php 
        while(have_posts()) {
            the_post(); ?>
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
    <?php   }
    ?>


    
    <main>        
        <h2>I servizi</h2>
        <div class="main__service">
            <div class="main__service__items">
                <img src="img/service1.png" width="70px" height="70px" alt="computer icon">
                <p>Prenotazione Online di attività outdoor.</p>
            </div>
            <div class="main__service__items">
                <img src="img/service2.png" width="70px" height="70px" alt="rental icon">
                <p>Noleggio attrezzatura sportiva
                    da negozi o privati.</p>
            </div>
            <div class="main__service__items">
                <img src="img/service3.png" width="70px" height="70px" alt="money icon">
                <p>Possibilità di guadagno noleggiando la propria attrezzatura ad altri utenti del sito.</p>
            </div>
        </div>


        <h2 id="carouselTitle">Qual è il tuo habitat?</h2>
        <div class="carousel-container">
            <div class="carousel-inner">
                <div class="track">
                    <div class="card-container-carousel">
                        <div class="card-carousel">
                            <div class="img-carousel img-1" alt="water sport picture">
                                <p>Acqua</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-container-carousel">
                        <div class="card-carousel">
                            <div class="img-carousel img-2" alt="bmx sport picture">
                                <p>Terra</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-container-carousel">
                        <div class="card-carousel">
                            <div class="img-carousel img-3" alt="zipline sport picture">
                                <p>Aria</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-container-carousel">
                        <div class="card-carousel">
                            <div class="img-carousel img-4" alt="skii sport picture">
                                <p>Neve</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-container-carousel">
                        <div class="card-carousel">
                            <div class="img-carousel img-5" alt="skateboard sport picture">
                                <p>Urban</p>
                            </div>
                        </div>
                    </div>
                    
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
                <section class="cards">
                    
                        <article>
                            <a href="singleActivity.html">
                              <img src="img/card/horse1-card.jpg" alt="horse riding activity">
                            </a>
                            <div class="text">
                                <a href="singleActivity.html">
                                 <h4>Giornata a cavallo sui colli della Maremma</h4>
                                </a>
                                <p>Attività'</p>
                                <p>Categoria: Equitazione</p>
                                <p><i class="fas fa-map-marker-alt"></i><span>  Montieri, Grosseto</span></p>
                                <p><i class="far fa-clock"></i><span>  Durata: 6 ore</span></p>
                                <p>da<span class="orange"> 90€</span></p>
                            </div>
                        </article>
                   
    
                    <article>
                        <img src="img/card/rafting2-card.jpg" alt="rafting activity">
                        <div class="text">
                            <h4>Rafting Marathon sul fiume Noce in Trentino</h4>
                            <p>Attività'</p>
                            <p>Categoria: Rafting</p>
                            <p><i class="fas fa-map-marker-alt"></i><span>  Ossana, Trento</span></p>
                            <p><i class="far fa-clock"></i><span> 4 ore</span></p>
                            <p>da<span class="orange"> 64€</span></p>
                        </div>
                    </article>
    
                    <article>
                        <img src="img/card/surfclass1-card.jpg" alt="surfing course activity">
                        <div class="text">
                            <h4>Corso privato di surf al lido di Ostia</h4>
                            <p>Attività'</p>
                            <p>Categoria: Surf</p>
                            <p><i class="fas fa-map-marker-alt"></i><span> Lido di Ostia</span></p>
                            <p><i class="far fa-clock"></i><span> 2 ore</span></p>
                            <p>da<span class="orange"> 30€</span></p>
                        </div>
                    </article>
    
                    <article>
                        <img src="img/card/yoga1-card.jpg" alt="yoga course">
                        <div class="text">
                            <h4>Lezione privata Yoga e Meditazione a Canazei</h4>
                            <p>ATTIVITA'</p>
                            <p>Yoga e Meditazione</p>
                            <p><i class="fas fa-map-marker-alt"></i><span> Canazei, Trento</span></p>
                            <p><i class="far fa-clock"></i><span> 2 ore</span></p>
                            <p>da<span class="orange"> 50€</span></p>
                        </div>
                    </article>
                </section>
            </div>  
            
            <a href="attivita.html"><button class="btn-secondary" type="button">Vedi altre</button></a>
        </div>

        <div class="main__carddiv">
            <h2>Noleggio: attrezzatura in evidenza</h2>
            <div class="container">
                <section class="cards">
                    <article>
                        <img src="img/card/EBike1-card.jpg" alt="E-bike photo">
                        <div class="text">
                            <h4>JEEP E-bike</h4>
                            <p>Noleggio</p>
                            <p>Categoria: Biciclette</p>
                            <p><i class="fas fa-map-marker-alt"></i><span> Luogo</span></p>
                            <p>da<span class="orange"> 20€</span> (Orario)</p>
                        </div>
                    </article>
    
                    <article>
                        <img src="img/card/skateRent1-card.jpg" alt="Skateboard photo">
                        <div class="text">
                            <h4>Longboard professionale</h4>
                            <p>Noleggio</p>
                            <p>Categoria: Tavole e skate</p>
                            <p><i class="fas fa-map-marker-alt"></i><span> Luogo: Milano</span></p>
                            <p>da<span class="orange"> 20€</span> (Giornaliero)</p>
                        </div>
                    </article>
    
                    <article>
                        <img src="img/card/kayakRent1-card.jpg" alt="Kayak picture">
                        <div class="text">
                            <h4>Kayak aperto individuale</h4>
                            <p>Noleggio</p>
                            <p>Categoria'</p>
                            <p><i class="fas fa-map-marker-alt"></i><span> Luogo</span></p>
                            <p>da<span class="orange"> 15€ </span>(Orario)</p>
                        </div>
                    </article>
    
                    <article>
                        <img src="img/card/bikeGravel1.jpg" alt="Gravel bike picture">
                        <div class="text">
                            <h4>Bici da Corsa</h4>
                            <p>Noleggio</p>
                            <p>Categoria: Biciclette</p>
                            <p><i class="fas fa-map-marker-alt"></i><span> Luogo:</span> Firenze</p>
                            <p>da<span class="orange"> 35€</span> (Giornaliero)</p>
                        </div>
                    </article>
                </section>
            </div>  
            
            <a href="noleggio.html">
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
                <h5>Canyoning in Valsella</h5>
                <div class="containerGallery__price">
                    <p>da <span>50€</span></p>
                </div>
            </div>
            <div class="containerGallery__item2" alt="man in a kayak">
                <h5>Avventura in kajak in Valsella</h5>
                <div class="containerGallery__price">
                    <p>da <span>50€</span></p>
                </div>
            </div>
            <div class="containerGallery__item3" alt="skateboard class">
                <h5>Lezione di skate a Milano</h5>
                <div class="containerGallery__price">
                    <p>da <span>50€</span></p>
                </div>
            </div>
            <div class="containerGallery__item4" alt="snowbike picture">
                <h5>Corso di SnowBike in Trentino</h5>
                <div class="containerGallery__price">
                    <p>da <span>50€</span></p>
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
