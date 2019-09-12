<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sources itinérantes de l'ivresse</title>
    <meta name="description" content="Les sources itinérantes de l’ivresse, c’est un spectacle voix-guitare où il y a à boire et à manger." />
    <?php include 'includes/css.html'; ?>
    <link rel="stylesheet" type="text/css" href="styles/master.css">
    <link rel="stylesheet" type="text/css"
          href="libraries/audioPlayer/green-audio-player.min.css">


</head>
<body>
<?php include 'includes/menu.php'; ?>

<?php include 'includes/library.html'; ?>

<div class="row row-source">
    <div class="col-4">
        <img id="source-vigne" src="media/gallery/images/vignes1000.jpg">
    </div>
    <div class="col itinerance-txt block-txt">
        <h1>Les sources itinérantes de l’ivresse</h1>
        <p>Les sources itinérantes de l’ivresse, c’est un spectacle voix-guitare où il y a à boire et à manger.
            Des « Tapas » pour accompagner ceux qui parlent à côté de leur bouche en fin de soirée, les amants de
            « Play-Bacchus ». L’ivresse est un prétexte pour réécrire le mythe – Pinocchio, la « Gueule de bois marin »–
            , se croire plus fin («Don’t worry, be HP») et mettre en bouteille la pourriture noble
            (« Monsieur Pic-Pic »), désaltérer sa mémoire (« Prescilla Démens »), fuir dans le jeu (« Casino »)
            et en finir avec les conflits («Guerre et vin »). Dans un décor maritime, de touries et de feuilles
            de vigne éclairées par une lampe-à-mort, on boit un bon coup de passé en remontant le fleuve de l’ivresse
            (« Bouteille à la mer ») vers une source que l’on découvre peu à peu… inexistante. Pour se soulager,
            on reverse alors dans le vin («Chanson à déboire ») et la vigne du Nord («Une bière au Touquet»).
            La guitare s’abreuve des coups boisés de la rumba flamenca et des moulinets de la chacarera du Nord de
            l’Argentine. Tournis garanti.</p>
        <p>Armé de ses deux guitares et de son charango, François Degrande fait le tour de la carte des vins en
            chanson dans ce spectacle d’1h30 dont le disque sortira fin 2016. Les formules voix-guitare ou en duo/trio
            avec Cécile Broché (violon) et François Remaud (seconde guitare) n’excluent pas une dégustation…</p>
    </div>
</div>


<div class="player-audio player-audio-source">
    <h2>Tapas</h2>
    <h3>Par François Degrande | Les sources itinérantes de l’ivresse</h3>
    <div class="player5">
        <audio>
            <source src="media/audios/François Degrande - Itinérances - 06 - Tapas.mp3"
                    type="audio/mp3">
        </audio>
    </div>
</div>

<?php include 'includes/footer.php'; ?>


<script src="libraries/audioPlayer/green-audio-player.min.js"></script>
<script>
    new GreenAudioPlayer('.player5');
    $("#a-source").addClass('active');
</script>
</body>
</html>