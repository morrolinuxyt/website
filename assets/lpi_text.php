<?php
  $essentials = $e101 = $e102 = "";

  $json_data = file_get_contents('udemy_coupons.json');
  $data = json_decode($json_data, true);

  $essentials = $data["Essentials"];
  $e101 = $data["101"];
  $e102 = $data["102"];

  if(empty($essentials)){
    $essentials = "https://www.udemy.com/course/impara-linux-da-zero-lpi-linux-essentials/?referralCode=9F2C500B1DC009224ABD";
  }
  if(empty($e101)){
    $e101 = "https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione/?referralCode=51B7A99838177C89C187";
  }
  if(empty($e102)){
    $e102 = "https://www.udemy.com/course/impara-linux-dalle-basi-alla-certificazione-lpi-exam-102/?referralCode=7018A3D9DC7C34281A3F";
  }
?>

<div class="long_text">

  <h1>LPIC-1 vs Linux Essentials</h1><br />

  <p>
    <b>Linux Essentials</b> è un corso che parte "da zero" e introduce a GNU/Linux e al mondo dell'Open Source.<br />
    Si rivolge ad un pubblico di utenti alle prime armi con Linux, ma anche a chi ha qualche lacuna da appianare.<br />
    Il programma completo del corso è diviso in 5 sezioni, e spazia su tutti gli aspetti generali di una distribuzione Linux.<br />
    <u>Acquista il corso cliccando sul bottone qui sotto: avrai accesso illimitato al corso al miglior prezzo disponibile!</u><br /><br />
  </p>
    <center> <a class="button hvr-grow-shadow" href="<?php echo $essentials; ?>" target="blank_">LINUX ESSENTIALS</a><br /><br /> </center>
  <p>
    <br/><br/>
    <b> LPIC-1 </b> è il corso di certificazione professionale LPI di primo livello. <br />
    Partendo dalle conoscenze di base, arriverai a conoscere Linux in ogni suo aspetto. <br />
    Dalla diagnostica dei problemi più comuni all'amministrazione di Server e PC Desktop. <br />
    Questo corso parte dalle basi, ma si rivolge ad una utenza leggermente più consapevole, ad esempio:<br />
  </p>
  <ul>
    <li>Studenti di Linux Essentials che vogliono continuare a progredire</li>
    <li>Appassionati di informatica e sistemi operativi che vogliono approfondire le proprie conoscenze</li>
    <li>Sistemisti junior che vogliono conseguire la certificazione LPI di primo livello</li>
  </ul>
  <p>
    Il programma di certificazione per LPIC-1 prevede due esami, <u>acquistando tramite i link qui sotto avrai accesso illimitato al corso al miglior prezzo disponibile!</u> <br /><br />
  </p>
  <center>
      <a class="button same_line_buttons hvr-grow-shadow" href="<?php echo $e101; ?>" target="blank_">EXAM 101 - CORSO</a>
      <a class="button same_line_buttons hvr-grow-shadow" href="<?php echo $e102; ?>" target="blank_">EXAM 102 - CORSO</a>
  </center>
  <p>
    <br /><br />
    Nei miei corsi troverai tutte le risorse necessarie a coprire ogni argomento del programma d’esame, dandoti la giusta preparazione a superarlo.<br /><br />
    Per maggiori informazioni su Linux Professional Institute e sulle certificazioni: <a href="http://www.lpi.org" target="blank_">www.lpi.org</a><br /><br />
    Per ulteriori chiarimenti o domande non esitate a… consultare le FAQ:
  </p>

</div>

<section id="faq">
  <div class="container">
    <h2 class="my-5 text-center">FAQ</h2>
    <div class="tab-content" id="faq-tab-content">
      <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
          <div class="accordion" id="accordion-tab-1">

              <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-1">
                      <h5>
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                            Ci sono limitazioni alla consultazione? Una volta terminato il corso posso continuare a consultarlo o scade l'accesso?
                          </button>
                      </h5>
                  </div>
                  <div class="collapse show" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                      <div class="card-body">
                          <p>
                            Non c'è nessun limite di tempo per l'accesso ai corsi. Puoi studiare con calma e ritornare quando vuoi per ripassare: le video lezioni rimangono a tua disposizione per sempre.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-2">
                      <h5>
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                            A chi posso rivolgermi in caso di dubbi durante il corso?
                          </button>
                      </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                      <div class="card-body">
                          <p>
                            Il docente è sempre a disposizione sulla piattaforma via messaggistica privata o nella sezione D&amp;R per qualsiasi dubbio/domanda/perplessità inerente al corso.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-3">
                      <h5>
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                            Ho seguito il corso, come posso ottenere la certificazione?
                          </button>
                      </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                      <div class="card-body">
                          <p>
                            Per ottenere la certificazione LPI relativa al corso frequentato ("Linux Essentials" o "LPIC-1") devi sostenere l'esame in un centro esami autorizzato Pearson VUE. Ce ne sono in ogni città, per trovare il centro più vicino a casa tua visita <a href="http://www.pearsonvue.com/servlet/vue.web2.core.Dispatcher?webContext=CandidateSite&webApp=TestCenterLocator&requestedAction=register&cid=374"> questo link</a>.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-4">
                      <h5>
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                            Come si svolge l'esame di certificazione?
                          </button>
                      </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                      <div class="card-body">
                          <p>
                            L'esame "Linux Essentials" è composto di 40 domande da rispondere in 60 minuti, mentre tutti gli esami LPIC sono 60 domande in 90 minuti.
                            <br>Tutti gli esami consistono in domande aperte (es: "con quale comando creo un nuovo file vuoto?") e a scelta multipla.
                            <br>Per maggiori informazioni su esami e certificazioni LPI visita le FAQ sul sito ufficiale lpi.org: <a href="https://www.lpi.org/it/about-lpi/frequently-asked-questions">https://www.lpi.org/it/about-lpi/frequently-asked-questions</a>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header" id="accordion-tab-1-heading-5">
                      <h5>
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5">
                            A quando risale l'ultimo aggiornamento? Il corso diventerà obsoleto?
                          </button>
                      </h5>
                  </div>
                  <div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
                      <div class="card-body">
                          <p>
                            Il programma LPI si aggiorna ogni 5 anni. Ad ogni aggiornamento vengono aggiunti nuovi video integrativi per mantenere il corso aggiornato.
                            <br>Ad esempio a inizio 2019 c'è stato un aggiornamento degli obiettivi d'esame per "LPIC-1" dalla versione "4" alla versione "5", ed il corso è stato aggiornato per coprire le nuove competenze. Il prossimo aggiornamento cadrà entro il 2024.
                            <br><br>Per maggiori dettagli su programma del corso e obiettivi d'esame visita:
                            <br>LPIC-1: Exam 101: <a href="https://www.lpi.org/our-certifications/exam-101-objectives">https://www.lpi.org/our-certifications/exam-101-objectives</a>
                            <br>Exam 102: <a href="https://www.lpi.org/our-certifications/exam-102-objectives">https://www.lpi.org/our-certifications/exam-102-objectives</a>
                            <br>Linux Essentials: <a href="https://www.lpi.org/our-certifications/exam-010-objectives">https://www.lpi.org/our-certifications/exam-010-objectives</a>
                          </p>
                      </div>
                  </div>
              </div>

          </div>
      </div>
    </div>
  </div>
