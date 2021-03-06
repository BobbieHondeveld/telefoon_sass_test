<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Telefoon</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
    <div class="pageHeader">
        <div class="show-for-medium-up">
            <div class="large-12 columns">
                <ul class="menubar">
                    <li><a href="#">home</a></li>
                    <li><a href="#">Werkwijze</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </div>
        </div> 
    </div>
    <div class="cd-fixed-bg cd-bg-1"> 
        <img src="images/bobs.png" width="300" alt="" class="bobsPhoneRepair">
        <div class="row">
            <a href="#startPage"><div class="small-12 columns arrowDown">
                <p>Scroll / klik voor site</p>    
                <img src="images/arrow-down.png" height="150" width="200" alt="">
            </div></a>
      </div>
    </div> 
    <div class="wrapper">
        <section class="main-section">
            <div class="row">
                <div class="small-12 columns" id="startPage"></div>
                <div class="large-12 columns">
                  <h1>Goedkope en snelle Iphone reparaties</h1>
                  <div class="box-shadow panel">
                    <p>vehicula nulla non arcu pulvinar, et semper leo semper. Pellentesque lobortis nisl elit, eu hendrerit arcu lobortis vitae. Donec quis turpis mauris. Nam fermentum magna mattis, dignissim sapien nec, sagittis augue. Donec et turpis at lacus placerat condimentum. Proin ultricies vitae ipsum eget euismod.</p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="large-9 medium-12 columns">
                    <div class="row contentBlocken">
                        <div class="large-12 medium-12 columns">
                            <div>
                                <h1>Telefoons</h1>
                            </div>
                        </div>

                        <!-- tab panel -->
                        <section class="elementPanel withTabs">
                            <div class="title">
                                <ul class="tabs" data-tab role="tablist">
                                    <li class="tab-title active">
                                        <a href="#panel1-1" role="tab" tabindex="1" aria-selected="true" controls="panel1-1">Inclusief verzendkosten</a>
                                   </li>
                                    <li class="tab-title">
                                        <a href="#panel1-2" role="tab" tabindex="2" aria-selected="false" controls="panel1-2">Exclusief verzendkosten</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="tabs-content">
                                    <section role="tabpanel" aria-hidden="false" class="content active" id="panel1-1">
                                        <div class="large-12 columns">
                                            <?php
                                                require_once('exclusief.php'); 
                                            ?>
                                        </div>
                                    </section>
                                    <section role="tabpanel" aria-hidden="true" class="content" id="panel1-2">
                                        <div class="large-12 columns">
                                            <?php
                                                require_once('inclusief.php'); 
                                            ?>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                        <!-- /tab panel -->
                    </div>
                </div>
                <div id="sticky-anchor"></div>
                <div class="row">
                    <div class="large-3 show-for-large-up columns">
                        <div id="sticky" class="box-shadow panel">
                            <div class="steps-center">
                            <h2>Hoe werkt het?</h2>
                                <ol>
                                    <li>Selecteer uw iphone en schade!</li>
                                    <li>Vul uw gegevens in.</li>
                                    <li>Verstuur het formulier.</li>
                                    <li>Wij maken een afspraak met u.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
      
            <script>
                function sticky_relocate() {
                  var window_top = $(window).scrollTop();
                  var div_top = $('#sticky-anchor').offset().top;
                  if (window_top > div_top) {
                      $('#sticky').addClass('stick');
                  } else {
                      $('#sticky').removeClass('stick');
                  }
                }

                $(function () {
                  $(window).scroll(sticky_relocate);
                  sticky_relocate();
                });

                $( ".clickme" ).click(function() {
                    $(this).find('.showtekst').toggle("slow", function () {
                    });

                //$(".plusMinToggle").attr("src", "images/min.png");
                });
                 $(function() {
                    $('a[href*=#]:not([href=#])').click(function() {
                      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                          $('html,body').animate({
                            scrollTop: target.offset().top
                          }, 1000);
                          return false;
                        }
                      }
                    });
                  });

                 $('.clickme').click(function(){
                      if (!$("img.plusMinStyling",this).hasClass('plusMin')) {
                          $("img.plusMinStyling", this).attr('src', 'images/plus.png');
                          $("img.plusMinStyling", this).addClass('plusMin')
                      } else  {
                          $("img.plusMinStyling", this).attr('src', 'images/min.png');
                          $("img.plusMinStyling", this).removeClass('plusMin')
                      }
                  });
            </script>
                                    
        <section id="BestelForm">
            <form action="mailverzonden.php" method="post">
                <div class="row">
                  <div class="large-9 columns">
                    <?php
                        if (isset($_GET['status']) && $_GET['status']==1){
                            ?> 
                                <div data-alert class="alert-box success">
                                  Uw Email is verzonden! Wij Beandwoorden uw email zo spoedig mogelijk.
                                  <a href="#" class="close">&times;</a>
                                </div>
                            <?php
                        }
                    ?>
                    <h1>Vragen/reparatie? vul het formulier in:</h1>
                    <label>Over welke telefoon gaat het?</label>
                    <select name="WhitchPhone">
                        <option value="Ik kan geen keus maken">Niet van toepassing</option>
                        <option value="Iphone 4">Iphone 4</option>
                        <option value="Iphone 4S">Iphone 4S</option>
                        <option value="Iphone 5">Iphone 5</option>
                        <option value="Iphone 5c">Iphone 5c</option>
                        <option value="Iphone 5s">Iphone 5s</option>
                        <option value="Iphone 6">Iphone 6</option>
                        <option value="Iphone 6+">Iphone 6+</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                    <div class="large-3 medium-4 columns">
                        <label>Heeft u een vraag of schade?</label>
                        <input type="radio" name="radioSoort" value="Vragen" required><label for="vragen">Vragen</label>
                        <input type="radio" name="radioSoort" value="Schade" required><label for="schade">Schade</label>
                    </div>
                    <div class="large-3 medium-4 columns">
                        <select name="WhitchDamage">
                          <option value="Niet van toepassing">Schade /Niet van toepassing</option>
                          <option value="Scherm">Scherm</option>
                          <option value="Achterkant">Achterkant</option>
                          <option value="Home knop">Home knop</option>
                          <option value="Trilmodule">Trilmodule</option>
                          <option value="Volume knoppen">Volume knoppen</option>
                          <option value="Hoofd telefoon aansluiting">Hoofdtelefoonaansluiting</option>
                          <option value="Achter camera">Achter camera</option>
                          <option value="Voor camera">Voor camera</option>
                          <option value="Dock connector">Dock connector</option>
                          <option value="Accu">Accu</option>
                          <option value="WI-FI antenne">WI-FI antenne</option>
                          <option value="Ontvangst antene">ontvangst antene</option>
                          <option value="Speaker">speaker</option>
                          <option value="Microfoon">Microfoon</option>
                          <option value="Simkaart houder">Simkaart houder</option>
                        </select>
                    </div>
                    <div class="large-3 medium-4 columns end">
                        <select name="WhitchDamage2">
                          <option value="Niet van toepassing">Meerdere schades /Niet van toepassing</option>
                          <option value="Scherm">Scherm</option>
                          <option value="Achterkant">Achterkant</option>
                          <option value="Home knop">Home knop</option>
                          <option value="Trilmodule">Trilmodule</option>
                          <option value="Volume knoppen">Volume knoppen</option>
                          <option value="Hoofd telefoon aansluiting">Hoofdtelefoonaansluiting</option>
                          <option value="Achter camera">Achter camera</option>
                          <option value="Voor camera">Voor camera</option>
                          <option value="Dock connector">Dock connector</option>
                          <option value="Accu">Accu</option>
                          <option value="WI-FI antenne">WI-FI antenne</option>
                          <option value="Ontvangst antene">ontvangst antene</option>
                          <option value="Speaker">speaker</option>
                          <option value="Microfoon">Microfoon</option>
                          <option value="Simkaart houder">Simkaart houder</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 large-4 columns">
                        <input type="text" name="Fname" placeholder="Voornaam *" required/>
                    </div>
                    <div class="small-6 large-5 columns end">
                        <input type="text" name="Lname" placeholder="Achternaam *" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="small-6 large-4 columns">
                        <input type="text" name="email" placeholder="Email-adres *" required/>
                    </div>
                    <div class="small-6 large-5 columns end">
                        <input type="text" name="telefoonNummer" placeholder="Telefoon nummer"/>
                    </div>
                </div>
                <div class="row">
                    <div class="small-5 large-3 columns">
                        <input type="text" name="plaats" placeholder="Plaats"/>
                    </div>
                    <div class="small-5 large-3 columns">
                        <input type="text" name="straat" placeholder="Straat"/>
                    </div>
                    <div class="small-2 large-3 columns end">
                        <input type="text" name="Hnummer" placeholder="Huisnummer"/>
                    </div>
                </div>                    
                <div class="row">
                    <div class="small-6 large-4 columns">
                        <div class="small-1 columns paddingWeg">
                            <span data-tooltip aria-haspopup="true" class="has-tip" title="Het Imei nummer is uw telefoons numemr die kunt u vinden als u de telefoon aansluit op itunes op de home page. Doet de telefoon het helemaal niet meer dan kunt u dat melden in het invoer vield."><img class="hoverThis" title="" src="images/vraagteken.png" style="padding-top:5px; float:left!important;"></span>
                        </div>
                        <div class="small-11 columns">
                            <input type="text" name="imeiNummer" placeholder="Imei nummer *" style="float:left!important;" required/>
                        </div>
                    </div>
                    <div class="small-6 large-5 columns end">
                        <div class="small-1 columns paddingWeg">
                            <span data-tooltip aria-haspopup="true" class="has-tip" title="Wij gebruiken uw toegangs code alleen voor het testen van uw telefoon na het repareren. Heeft u geen toegangs code dan hoeft u hem ook niet in te voeren."><img src="images/vraagteken.png" style="padding-top:5px; float:left!important;"></span>
                        </div>
                        <div class="small-11 columns">
                            <input type="text" name="ToegangsCode" placeholder="toegangs code"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-9 small-12 columns">
                        <textarea name="Toevoeging" placeholder="belangrijke toevoegingen kunt u hier melden zoals meerdere schades of vragen"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="large-9 small-12 columns end">
                        <button class="small button" type="submit" name="submit" value="Verstuur">Verstuur</button>
                    </div>
                </div>
            </form>
        </section>
    </div>

        <!--Footer-->
        <div class="pageFooter">
          kvk: 123456789
        </div>

        <script src="http://localhost:35729/livereload.js"></script>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/foundation/js/foundation.min.js"></script>
        <script src="js/app.js"></script>

  </body>
</html>