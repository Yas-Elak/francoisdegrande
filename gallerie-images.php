<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Images</title>
    <?php include 'includes/css.html'; ?>
    <link rel="stylesheet" type="text/css" href="styles/master.css">
    <link rel="stylesheet" type="text/css"
          href="libraries/lightcase/css/lightcase.css">


</head>
<body>
<?php include 'includes/menu.php'; ?>

<?php include 'includes/library.html'; ?>


<div class="gallery-title"><h1>Images</h1></div>


<div class="row row-gallery">
    <a class="col-3" href="media/gallery/2I9A7726.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/2I9A7726.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/2I9A7768.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/2I9A7768.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/ChansonADéboire.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/ChansonADéboire.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/chansonàboire1.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/chansonàboire1.jpg"/>
    </a>
</div>
<div class="row row-gallery">
    <a class="col-3" href="media/gallery/FDegrande_2016.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/FDegrande_2016.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/francois-degrande-couleur.jpg" data-rel="lightcase"> <img
                class="img-gallery"   src="media/gallery/francois-degrande-couleur.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/illustration-Louise-Dupuis.jpg" data-rel="lightcase"> <img
                class="img-gallery"  src="media/gallery/illustration-Louise-Dupuis.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/itifront.jpg" data-rel="lightcase"> <img
                class="img-gallery"  src="media/gallery/itifront.jpg"/>
    </a>
</div>

<div class="row row-gallery">
    <a class="col-3" href="media/gallery/itiback.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/vincentgroupe.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/fd123.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/vincentsortie.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/itiback.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/itiback.jpg"/>
    </a>
    <a class="col-3" href="media/gallery/fd123.jpg" data-rel="lightcase">
        <img class="img-gallery" src="media/gallery/fd123.jpg"/>
    </a>
</div>

<?php include 'includes/footer.php'; ?>

<script src="libraries/lightcase/js/lightcase.js"></script>

<script>
    jQuery(document).ready(function ($) {
        $('a[data-rel^=lightcase]').lightcase();
        $(".a-gallerie").addClass('active');

    });

</script>
</body>
</html>