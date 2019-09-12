<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foudre en cavale</title>
    <meta name="description" content="Foudre en cavale est le premier livre de François Degrande. Il est sorti en novembre 2016 chez Bleu
            d’Encre" />

    <?php include 'includes/css.html'; ?>
    <link rel="stylesheet" type="text/css" href="styles/master.css">
    <link rel="stylesheet" type="text/css"
          href="libraries/audioPlayer/green-audio-player.min.css">


</head>
<body>
<?php include 'includes/menu.php'; ?>

<?php include 'includes/library.html'; ?>

<div class="foudre-content">

    <div class="col foudre-txt bloc-txt">
        <h1>Foudre en cavale</h1>
        <p><i>Foudre en cavale</i> est le premier livre de François Degrande. Il est sorti en novembre 2016 chez Bleu
            d’Encre,
            la maison d’édition dirigée par le poète Claude Donnay.
    </div>

    <div class="chronique">
        <h6 id="title-chronique">Chronique d’Eric Allard sur Foudre en cavale</h6>
        <a href="http://lesbellesphrases.skynetblogs.be/archive/2016/12/12/foudre-en-cavale-de-francois-degrande-bleu-d-encre-editions-8679668.html">
            <button type="button" class="btn btn-outline-dark">En savoir plus</button>
        </a>
    </div>
    <div class="col">
        <img id="foudre-cover"  src="media/gallery/images/foudreencavalcover.jpg">
    </div>
    <div class="player-audio player-audio-foudre">
        <h2>Lydia</h2>
        <h3>Par François Degrande</h3>
        <div class="player7">
            <audio>
                <source src="media/audios/François Degrande - Itinérances - 12 - Lydia.mp3"
                        type="audio/mp3">
            </audio>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>


<script src="libraries/audioPlayer/green-audio-player.min.js"></script>
<script>
    new GreenAudioPlayer('.player7');
    $("#a-foudre").addClass('active');
</script>
</body>
</html>