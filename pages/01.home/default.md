---
title: Home
media_order: 'bg1.jpg,bg4.jpg'
process:
    markdown: true
    twig: true
twig_first: false
---

<!-- SLIDER -->
<section id="slider">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url({{ page.media['bg1.jpg'].url }}">
                <div class="carousel-caption container">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1>studentenscouting</h1>
                            <h2>Avontuur</h2>
                            <p>Op kamp in binnen- en buitenland</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url({{ page.media['bg1.jpg'].url }})">
                <div class="carousel-caption container">
                    <div class="row">
                        <h1>studentenscouting</h1>
                        <h2>Feest</h2>
                        <p>Uitgaan in eigen stad, en losgaan op evenementen</p>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url({{ page.media['bg4.jpg'].url }})">
                <div class="carousel-caption container">
                    <div class="row">
                        <h1>Martinistam</h1>
                        <h2>Groningen</h2>
                        <p>Keer op keer benoemd tot de leukste studentenstad van Nederland</p>
                    </div>
                </div>
            </div>
            <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>
    </div> <!--/#home-carousel-->
</section>
<!-- /SLIDER -->

<!-- SERVICES -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Waar</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-university"></i> Amsterdam</h2>
                        <p>Op dit moment is er geen studentenstam actief in onze hoofdstad. Heb je zin om hier iets nieuws op te starten? Neem vooral contact met ons op!</p>
                        <a href="http://www.studentenscoutingamsterdam.nl">Lees meer</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-cogs"></i> Delft</h2>
                        <p>Een studentenstam die gewoon al langer bestaat dan Scouting Nederland! Vuurspuwen is een vaak terugkerende activiteit, best riskant bij een gebouw dat het Kruithuis heet.</p>
                        <a href="http://www.delftschezwervers.nl">Lees meer</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-laptop"></i> Enschede</h2>
                        <p>Tussen alle serieuze technici in Enschede zijn ook toffe mensen op de campus die bijvoorbeeld midden in de winter een barbecue te houden.</p>
                        <a href="http://www.radixenschede.nl">Lees meer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-glass"></i> Groningen</h2>
                        <p>Prominent aanwezig op regionale en nationale evenementen, maar vooral een bron van gezelligheid in eigen stad.</p>
                        <a href="https://martinistam.nl">Lees meer</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-key"></i> Leiden</h2>
                        <p>De jongste studentenstam in het rijtje, maar al ontzettend actief. Een reuzenrad bouwen, of de oude binnenstad verkennen, het kan allemaal!</p>
                        <a href="https://www.facebook.com/sleutelstam">Lees meer</a>
                    </div>

                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-coffee"></i> Nijmegen</h2>
                        <p>Net onder de rivieren is gelukkig nog meer te beleven dan alleen de Vierdaagse.</p>
                        <a href="https://www.facebook.com/studentenstam">Lees meer</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 st-service">
                        <h2><i class="fa fa-leaf"></i> Wageningen</h2>
                        <p>Het zou toch raar zijn als bij de universiteit voor alle liefhebbers van geitenwollen sokken en vegetarische burgers geen studentenstam te vinden zou zijn?</p>
                        <a href="http://www.yggdrasilstam.nl">Lees meer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /SERVICES -->


<!-- ABOUT US -->
<section id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="about-us text-center">
                    <h4>Wat is studentenscouting?</h4>
                    <p>Eigenlijk precies wat de naam suggereert. Studentenscouting is gericht op scouts die studeren en graag bij een vereniging willen die perfect aansluit op hun interesses. Het is inmiddels al te vinden in zeven verschillende steden, en de verenigingen zijn ook actief op landelijke evenementen. Aangezien de activiteiten meestal doordeweeks zijn, is dit makkelijk te combineren met een lidmaatschap bij een andere groep.</p>
                </div>
            </div>
            <div class="col-sm-6 our-office">
                <div id="office-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://studentenscouting.nl/img/bg2.jpg" alt="">
                        </div>
                        <a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i
                                class="fa fa-angle-left"></i></a>
                        <a class="office-carousel-right" href="#office-carousel" data-slide="next"><i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div> <!--/#office-carousel-->
            </div>
        </div>
    </div>
</section>
<!-- /ABOUT US -->
<!-- TESTIMONIAL -->
<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="overlay"></div>
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="st-testimonials">

                    <div class="item active text-center">
                        <p>"Ok het mag dan twee jaar geduurd hebben. Maar dan heb je me toch een website!"</p>
                        <div class="st-border"></div>
                        <div class="client-info">
                            <h5>Tim Mein</h5>
                            <span>Prominent lid Martinistam</span>
                        </div>
                    </div>

                    <div class="item text-center">
                        <p>"Ik ben geen bemoeial, ik regel gewoon heel veel."</p>
                        <div class="st-border"></div>
                        <div class="client-info">
                            <h5>Yke Wijnker</h5>
                            <span>Babbelbox</span>
                        </div>
                    </div>


                    <div class="item text-center">
                        <p>"Vo voor de leden!"</p>
                        <div class="st-border"></div>
                        <div class="client-info">
                            <h5>Evelien Visscher</h5>
                            <span>Voorzitter Sleutelstam</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /TESTIMONIAL -->


<!-- CONTACT -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1>Contact</h1>
                    <span class="st-border"></span>
                </div>
            </div>
            <div class="col-sm-4 contact-info">
                <p class="contact-content">
                    Wil je meer weten over studentenscouting? Ben je van plan om een studentenstam op te richten in jouw stad en wil je graag advies en ondersteuning hierbij? Of ben je benieuwd wat een studentenstam voor jou kan betekenen op regionaal of nationaal niveau?
                    <br><br>
                    Stuur dan je vraag naar info@studentenscouting.nl
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /CONTACT -->
