<!--
   Template Name: Partner
-->
<?php get_header()?>

<div class="hero hero--partner">
        <div class="hero__content">
            <h1>Diventa partner</h1>
            <div class="form">
             <a class="js-trigger" href="#registrati">
                <button class="search-btn" type="button">Registrati</button>
             </a>   
            </div>
        </div>
    </div>

    <main class="partnerName">    
         <div class="textContainer textContainer--partner">

            <div class="textContainer__twoColCont">
                <div class="col50">
                    <h2>Perchè diventare partner?</h2>
                    <p>Indipendentemente dal tipo di alloggio o stanza
                        che vuoi condividere, Hytta rende semplice e sicuro
                        ospitare dei viaggiatori. <br> Spetta a te il controllo
                        completo della disponibilità, dei prezzi, delle
                        regole della casa e della modalità di interazione 
                        con gli ospiti.
                    </p>
                </div>
                <div class="col50 col50--second">
                    <h2>Con noi sei al sicuro</h2>
                    <p>Indipendentemente dal tipo di alloggio o stanza
                        che vuoi condividere, Airbnb rende semplice e
                        sicuro ospitare dei viaggiatori. <br>
                        Spetta a te il controllo completo della disponibilità,
                        dei prezzi, delle regole della casa e della modalità
                        di interazione con gli ospiti.</p>
                </div>
            </div>

            <h2>Passaggi</h2>
            <div class="step step--partner">
         
                <div class="step__item">
                    <div class="step__item--num">
                        <p>1</p>
                    </div>
                    <div class="step__item--text step__item--text--partnerPage">
                      <h5>Registrati al sito come nostro partner</h5>
                      <p>E’ semplice e gratuito. <br>
                           Basta compilare l’apposito form qui sotto.</p>
                    </div>              
                </div>
                
                <div class="step__item">
                  <div class="step__item--num">
                      <p>2</p>
                  </div>
                  <div class="step__item--text step__item--text--partnerPage">
                    <h5>Pubblica gli annunci della tua <br> attività o della tua attrezzatura</h5>
                    <p>Scegli le date, i prezzi che riterrai più oppotuni. <br> 
                        Siamo sempre a disposizione per aiutarti..</p>
                  </div>
                </div>
    
                <div class="step__item">
                  <div class="step__item--num">
                      <p>3</p>
                  </div>
                  <div class="step__item--text step__item--text--partnerPage">
                      <h5>Fai vivere una fantastica <br> avventura ai nostri utenti</h5>
                      <p>Una volta che la tua attrezzatura <br> o la tua attività viene scelta.
                      </p>
                    </div>
    
                </div>
            </div>


            <div class="textContainer__twoColCont textContainer__twoColCont--textImg">
                <div class="col50 col50--afterMob">
                    <p class="col50--bigText">
                        "Registrare la mia attivittà su Hytta 
                        ha ha permesso di farmi conoscere
                        da nuovi, fantasctici clienti."
                    </p>
                    <p class="col50--smallText">Luca, insegnante di bmx</p>
                </div>
                <div class="col50 col50--firstMob">
                    <div class="col50__imgVert">
                        <img src="<?php echo get_theme_file_uri('/img/bmx-coach-last.jpg')?>" alt="bmx coach picture">
                    </div>
                </div>
            </div>


            <h2>Pagamenti</h2>
            <div class="step step--partner">
         
                <div class="step__item">                   
                    <div class="step__item--text step__item--text--partnerPage">
                      <h5>Invia la richiesta di disponibilità</h5>
                      <p>Effettueremo solo una pre-autorizzazione al pagamento.</p>
                    </div>              
                </div>
                
                <div class="step__item">
                  <div class="step__item--text step__item--text--partnerPage">
                    <h5>Ricevi risposta entro 48 ore</h5>
                    <p>In caso di conferma, ti verrà addebitato il costo dell'attività.</p>
                  </div>
                </div>
    
                <div class="step__item">
                  <div class="step__item--text step__item--text--partnerPage">
                      <h5>Ritira la tua attrezzatura</h5>
                      <p>Ritira l'attrezzatura nel punto stabilito dal proprietario.</p>
                    </div>
    
                </div>
            </div>

        </div>

        <!--  FORM   -->

        <div id="registrati"  class="formContainer">
            <form id="form" class="form">
              <h2>Registrati</h2>
              <div class="form-control">
                <label for="username">Username</label>
                <input name="username" type="text" id="username" placeholder="Inserisci username" />
                <small>Error message</small>
              </div>
              <div class="form-control">
                <label for="email">Email</label>
                <input name="email" type="text" id="email" placeholder="Inserisci email" />
                <small>Error message</small>
              </div>
              <div class="form-control">
                <label for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Inserisci password" />
                <small>Error message</small>
              </div>
              <div class="form-control">
                <label for="password2">Conferma Password</label>
                <input
                  name="confPassword"
                  type="password"
                  id="password2"
                  placeholder="Conferma password"
                />
                <small>Error message</small>
              </div>
              <button class="formButton" type="submit">Invia</button>
            </form>
        </div>

        <!-- FINE  FORM   -->

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