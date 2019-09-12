<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>François Degrande</title>
    <meta name="description" content="Découvrez lesalbums de François Degrande" />
    <?php include 'includes/css.html'; ?>
    <link rel="stylesheet" type="text/css" href="styles/master.css">
    <link rel="stylesheet" type="text/css"
          href="libraries/audioPlayer/green-audio-player.min.css">


</head>
<body>
<?php include 'includes/menu.php'; ?>

<?php include 'includes/library.html'; ?>

<!--Les 3 images l'une a côté del'autre-->
<div class="row">
    <div class="col-sm col-img">
        <img class="img-col" src="/media/gallery/images/françois003.jpg">
        <h2 class="img-title">Les sources itinérantes de l’ivresse</h2>
        <div class="testimonial">
            <div class="div-quote-img">
                <img src="/media/gallery/images/quote-circular-button.png" class="quote-icon">
            </div>
            <div class="quotation">
                <p>Les sources itinérantes de l’ivresse, c’est un spectacle voix-guitare où il y a à boire et à manger.
                    Des « Tapas » pour accompagner ceux qui parlent à côté de leur bouche en fin de soirée, les amants
                    de « Play-Bacchus ».</p>
            </div>
            <div class="div-btn-quotation">
                <a href="les-sources-itinerantes-de-l-ivresse.php">
                    <button type="button" class="btn btn-secondary btn-quotation">Lire la suite</button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm col-img">
        <img class="img-col" src="/media/gallery/images/RêveDUneGuitare.jpg">
        <h2 class="img-title">El mar menor</h2>
        <div class="testimonial">
            <div class="div-quote-img">
                <img src="/media/gallery/images/quote-circular-button.png" class="quote-icon">
            </div>
            <div class="quotation">
                <p>El mar menor s’ouvre sur un chant « La fuente » qui coule d’une source anonyme de la guerre civile
                    espagnole. Du haut des montagnes ibériques, une galerie de personnages – un ours cantabrique,
                    une sorcière basque…</p>
            </div>
            <div class="div-btn-quotation">
                <a href="el-mar-menor.php">
                    <button type="button" class="btn btn-secondary btn-quotation">Lire la suite</button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm col-img">
        <img class="img-col" src="/media/gallery/images/Un-coeur-en-or-par-Louise-Dupuis.jpg">
        <h2 class="img-title">Foudre en cavale</h2>
        <div class="testimonial">
            <div class="div-quote-img">
                <img src="/media/gallery/images/quote-circular-button.png" class="quote-icon">
            </div>
            <div class="quotation">
                <p>Foudre en cavale est le premier livre de François Degrande. Il sort fin 2016 chez Bleu d’Encre,
                    la maison d’édition dirigée par le poète Claude Donnay.</p><br>
            </div>
            <div class="div-btn-quotation">
                <a href="foudre-en-cavale.php">
                    <button type="button" class="btn btn-secondary btn-quotation">Lire la suite</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="media/images/photo-besalu-espagne-.jpg">
    <div class="row row-audio">
        <div class="col">
            <img class="img-audio" src="/media/gallery/images/audioivresse.jpg">
            <div class="player-audio">
                <h2>Tapas</h2>
                <h3>Les sources itinérantes de l'ivresse</h3>
                <div class="player1">
                    <audio>
                        <source src="/media/audios/François%20Degrande%20-%20Itinérances%20-%2006%20-%20Tapas.mp3"
                                type="audio/mp3">
                    </audio>
                </div>
            </div>
        </div>
        <div class="col">
            <img class="img-audio" src="/media/gallery/images/imageaudioelmarmenor.jpg">
            <div class="player-audio">
                <h2>La fuente</h2>
                <h3>El Mar Menor</h3>
                <div class="player2">
                    <audio>
                        <source src="/media/audios/La-fuente.mp3"
                                type="audio/mp3">
                    </audio>
                </div>
            </div>
        </div>
        <div class="col">
            <img class="img-audio" src="/media/gallery/images/foudreencavale.jpg">
            <div class="player-audio">
                <h2>Lydia</h2>
                <h3>Foudre en cavale</h3>
                <div class="player3">
                    <audio>
                        <source src="/media/audios/François%20Degrande%20-%20Itinérances%20-%2012%20-%20Lydia.mp3"
                                type="audio/mp3">
                    </audio>
                </div>
            </div>
        </div>
    </div>
    <div class="row  row-audio-podcast justify-content-md-center">
        <img class="img-podcast" src="/media/gallery/images/ranchosmallmid.jpg">
        <div class="player-audio-podcast">
            <div class="col">

<!--                <h3>Podcast : Le monde est un village. Session acoustique</h3>-->
<!--                <div class="player4">-->
<!--                    <audio>-->
<!--                        <source src="/media/audios/podacst.mp3"-->
<!--                                type="audio/mp3">-->
<!--                    </audio>-->
<!--                </div>-->
                <h2>Itinérances</h2>
                <h3>Dans mon rancho</h3>
                <div class="player4">
                    <audio>
                        <source src="/media/audios/Dansmonranchogoodversion.mp3"
                                type="audio/mp3">
                    </audio>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="francoisdegrande" id="bio-francois">
    <h1>François Degrande</h1>
    <img class="img-francois" src="/media/gallery/images/francois-degrande-couleur.jpg">
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#bio-fr" role="tab" data-toggle="tab">Français</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#bio-en" role="tab" data-toggle="tab">Anglais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#bio-nl" role="tab" data-toggle="tab">Néerlandais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#bio-es" role="tab" data-toggle="tab">Espagnol</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="bio-fr">François Degrande chante le voyage, les
            mythes et les plaisirs de la vie. Ses errances s’arrêtent en Espagne pour faire le point autour d’une
            table qui s’étire de l’Andalousie à la Galice. L’Argentine n’est pas loin non plus. Depuis les vignobles
            d’altitude des vallées andines, on devine dans ses chansons la Pampa qui rappelle du pied les plus
            anciens gauchos du plat pays. Parfois, sa route bute contre un arbre généalogique planté par un bâtard
            spirituel ou se termine dans l’enfer du jeu. Le voyage reprend, même prisonnier des mers ou des récits,
            pour écouter les conseils de la nuit.
            <br><br>
            Après un disque en espagnol en 2014 – El mar menor – et un livre en 2016 (Foudre en cavale aux Editions
            Bleu d’Encre), Itinérances (12 titres) est le premier album en français de François Degrande. On y
            trouve de belles collaborations artistiques avec notamment Renaud Crols (violon), Myrddin De Cauter
            (guitare flamenca), Claude Donnay (« Fous d’amour »), Olivier Terwagne (clavier), François Remaud
            (guitare latina) Chris Drouin (percussions), Benoît Host (basse) et d’autres encore…
        </div>
        <div role="tabpanel" class="tab-pane fade" id="bio-en">François Degrande sings travelling, the myths ,the
            pleasures of life. His wanderings cease in Spain to take stock around a table that stretches from
            Andalusia to Basque Country. Argentina is also not far away . Form the vineyards in high of Andean
            valleys his songs reveal the Pampa that reminds of the oldest gauchos of the flat country. His route
            sometimes comes up against a by a spiritual bastard planted family tree or it ends up in the hel of
            gambling. The journey continues , to some extend a prisoner of the seas or stories ,to listen to the
            advice of the night.
            <br><br>
            After a record in Spanish in 2014 , El mar menor, and a book in 2016 ( Foudre en cavale , published by
            Bleu d’Encre), Itinérance ( 12 titels) is the first album in French written by François Degrande. You
            can find nice artistic colours including Renaud Crols ( violin), Myrddin De Cauter ( flamenco guitar),
            Claude Donnay ( “Fous d’amour”), Olivier Terwagne ( keyboard ), François Remaud ( latina guitar), Chris
            Drouin ( drums) , Benoît Host ( bass) and others…
        </div>
        <div role="tabpanel" class="tab-pane fade" id="bio-nl">François Degrande zingt liedjes over reizen, mythes
            en de geneugten van het leven. Hij dwaalt rond tussen Andalusië en Baskenland om rond de tafel de balans
            op te maken. Argentinië is ook niet ver. Vanop de hoger gelegen wijngaarden in de valleien van de Andes
            doen zijn liedjes denken aan de veehoeders van de uitgestrekte vlaktes van de Pampa.
            Soms botst zijn weg tegen een stamboom, geplant door een spirituele bastaard of eindigt hij in de hel
            van het spel. De reis herbegint, zelfs gevangen door de zeeën of de verhalen om naar de raad van de
            nacht te luisteren.
            <br><br>
            Na een CD in het Spaans, El mar menor, in 2014 en een boek Foudre en cavale (bij de uitgeverij Bleu
            d’Encre) in 2016, verschijnt nu Itinérances, het eerste album van François Degrande in het Frans (12
            titels).
            Men vindt er pareltjes van artistieke samenwerking , zoals met Renaud Crols (viool), Myrddin De Cauter
            (flamenco gitaar), Claude Donnay (Fous d’amour), Olivier Terwagne (klavier), François Remaud (latina
            gitaar), Chris Drouin (percussie), Benoît Host (basgitaar), en nog anderen…
        </div>
        <div role="tabpanel" class="tab-pane fade" id="bio-es">François Degrande canta el viaje, los mitos y los
            placeres de la vida. Sus vagabundeos se paran en España para charlar en torno a una mesa que se estira
            desde Andalucía hasta el País vasco. La Argentina tampoco queda lejos. Desde los viñedos de altura de
            los valles andinos, se perfila en sus cantos la Pampa que llama a los antiguos gauchos del país llano. A
            veces su camino entronca con un árbol genealógico sembrado por un bastardo espiritual o se termina en el
            infierno del juego. El viaje vuelve a cobrar vida, incluso prisionero de los mares o de los relatos, para
            escuchar los consejos de la noche.
            <br><br>
            Después de un disco en español en el 2014 – El mar menor – y un libro en el 2016 (Foudre en cavale,
            Editions Bleu d’Encre), Itinérances (12 títulos) es el primer disco en francés de François Degrande.
            Consta de hermosas colaboraciones artísticas con Renaud Crols (violín), Myrddin De Cauter (guitarra
            flamenca), Claude Donnay (letras de “Fou d’amour”), Olivier Terwagne (piano), Chris Drouin
            (percusiones), Benoît Host (bajo eléctrico) y otros…
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>

<script src="libraries/parallax/parallax.min.js"></script>

<script src="libraries/audioPlayer/green-audio-player.min.js"></script>
<script>
    new GreenAudioPlayer('.player1');
    new GreenAudioPlayer('.player2');
    new GreenAudioPlayer('.player3');
    new GreenAudioPlayer('.player4');
    $("#a-accueil").addClass('active');
    $('.parallax-window').parallax({imageSrc: 'media/images/photo-besalu-espagne-.jpg'});

</script>
</body>
</html>