<!--
   Template Name: Chi siamo
-->
<?php get_header()?>

<div class="hero hero--chiSiamo">
        <div class="hero__content" alt="kayak picture">
            <h1>Chi siamo</h1>
        </div>
    </div>
    
    <main class="chiSiamoMain"> 
        <div class="textContainer">
            <h2>Il Progetto</h2>
        <p>
            Due amici, una passione in comune e tanti tanti caffè: 
            è così che è nato Hytta, il marketplace di riferimento 
            per le esperienze outdoor. L’idea è semplice: permettere 
            agli appassionati di prenotare le migliori attività offerte 
            dal territorio Italiano, in modo sicuro e intuitivo.
        </p> 
        <br>
        <p>
            Ce ne sono moltissime, nel nostro Paese, ma spesso accedervi è 
            una corsa a ostacoli. Prima di Freedome, trovare l’esperienza 
            giusta significava visitare decine di siti, inviare un’email 
            dietro l’altra, perdersi tra mille telefonate. 
            Abbiamo deciso di modernizzare l’intero processo, 
            creando un unico luogo dove confrontare, scegliere e 
            prenotare le migliori attività outdoor. 
            Se sei in cerca di adrenalina, avventura o relax, 
            su Hytta ti troverai alla grande.
        </p>

        <h2>La nostra Mission</h2>
        <p>
            Due amici, una passione in comune e tanti tanti caffè: 
            è così che è nato Hytta, il marketplace di riferimento 
            per le esperienze outdoor. 
            L’idea è semplice: permettere agli appassionati di 
            prenotare le migliori attività offerte dal territorio Italiano, 
            in modo sicuro e intuitivo.  
        </p>

        <p>
            Ce ne sono moltissime, nel nostro Paese, ma spesso accedervi è 
            una corsa a ostacoli. Prima di Freedome, trovare l’esperienza 
            giusta significava visitare decine di siti, inviare un’email 
            dietro l’altra, perdersi tra mille telefonate. 
            Abbiamo deciso di modernizzare l’intero processo, 
            creando un unico luogo dove confrontare, scegliere e 
            prenotare le migliori attività outdoor. 
            Se sei in cerca di adrenalina, avventura o relax, 
            su Hytta ti troverai alla grande.
        </p>

        </div>
        
        <h2>I servizi</h2>
        <div class="main__service">
            <div class="main__service__items">
                <img src="<?php echo get_theme_file_uri('/img/service1.png')?>" width="70px" height="70px" alt="">
                <p>Prenotazione Online di attività outdoor.</p>
            </div>
            <div class="main__service__items">
                <img src="<?php echo get_theme_file_uri('/img/service2.png')?>" width="70px" height="70px" alt="">
                <p>Noleggio attrezzatura sportiva
                    da negozi o privati.</p>
            </div>
            <div class="main__service__items">
                <img src="<?php echo get_theme_file_uri('/img/service3.png')?>" width="70px" height="70px" alt="">
                <p>Possibilità di guadagno noleggiando la propria attrezzatura ad altri utenti del sito.</p>
            </div>
        </div>

   
        <section class="registerBlock registerBlock--secondBlock">
            <div class="registerBlock__container registerBlock__container--firstBlock">
                <div class="registerBlock__container__item1">
                    <div class="registerBlockText">
                        <h3>Pubblica le tue attività</h3>
                        <p>Pubblica le tue attività e trova nuovi fantastici clienti</p>
                    <a href="<?php echo site_url('/diventa-partner') ?>">
                        <button class="btn-secondary-black" type="button">Diventa partner</button>
                    </a>
                    </div>
                </div>               
                    <div class="registerBlock__container__item2"></div>
            </div>
        </section>

    
    <section class="registerBlock registerBlock--secondBlock">
        <div class="registerBlock__container">
            <div class="registerBlock__container__item3"></div>
            <div class="registerBlock__container__item1">
                <div class="registerBlockText">
                    <h3>Sei un avventurriero?</h3>
                    <p>Unisciti alla community e inizia la tua prossima avventura.</p>
                    <a href="<?php echo site_url('/mio-account') ?>">
                        <button class="btn-secondary-black" type="button">Registrati</button>
                    </a>
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

<?php get_footer()?>