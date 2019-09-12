<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El mar menor</title>
    <meta name="description" content="l mar menor s’ouvre sur un chant « La fuente » qui coule d’une source anonyme de la guerre civile espagnole." />

    <?php include 'includes/css.html'; ?>
    <link rel="stylesheet" type="text/css" href="styles/master.css">
    <link rel="stylesheet" type="text/css"
          href="libraries/audioPlayer/green-audio-player.min.css">


</head>
<body>
<?php include 'includes/menu.php'; ?>

<?php include 'includes/library.html'; ?>

<div class="row row-source">

    <div class="col mar-menor-txt bloc-txt">
        <h1>El mar menor</h1>
        <p>El mar menor s’ouvre sur un chant « La fuente » qui coule d’une source anonyme de la guerre civile espagnole.
            Du haut des montagnes ibériques, une galerie de personnages – un ours cantabrique, une sorcière basque en
            manque d’amour – toisent les créatures étranges des mers, telle cette pieuvre (« El mar menor »), près de
            laquelle s’échoue le rêve d’une guitare (« sueño de guitarra »). Des fleurs d’oranger « Azahares » et un
            crime perpétré dans un village blanc « La muerte y el pueblo » révèlent les influences hors d’âge du
            dolorisme andalou et du folklore argentin (« Muchacho »)…
        </p>
        <p>El mar menor, c’est la traduction en musique des voyages de François Degrande en Espagne et en Argentine
            entre 2007 et 2014. La musique s’en ressent : l’accord s’ouvre à la chacarera et à la milonga.
        </p>
        <p>Pour ce premier CD (2014), François Degrande s’est entouré de grands musiciens : Olivier Terwagne (accordéon
            et piano), et Marie-Eve Ronveaux (violoncelle).</p>
    </div>
    <div class="col-4">
        <img id="source-vigne" src="media/gallery/images/mer1000.jpg">
    </div>
</div>


<div class="player-audio player-audio-fuente">
    <h2>La fuente</h2>
    <h3>Par François Degrande | El mar menor</h3>
    <div class="player6">
        <audio>
            <source src="media/audios/La-fuente.mp3"
                    type="audio/mp3">
        </audio>
    </div>
</div>

<?php include 'includes/footer.php'; ?>


<script src="libraries/audioPlayer/green-audio-player.min.js"></script>
<script>
    new GreenAudioPlayer('.player6');
    $("#a-menor").addClass('active');
</script>
</body>
</html>