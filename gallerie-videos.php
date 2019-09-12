<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vidéos</title>
    <?php include 'includes/css.html'; ?>
    <link rel="stylesheet" type="text/css" href="styles/master.css">
    <link rel="stylesheet" type="text/css"
          href="libraries/lightcase/css/lightcase.css">


</head>
<body>
<?php include 'includes/menu.php'; ?>

<?php include 'includes/library.html'; ?>

<div class="gallery-title"><h1>Vidéos</h1></div>

<div class="row row-video">
    <div class=" col-video col-5">
        <h3>Dans mon rancho</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NQlXTfKWnJ4" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <div class=" col-video col-5">

        <h3>Tapas</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/v2RZq-q-NqI" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</div>

<div class="row row-video">

    <div class="col-video col-5">
        <h3>Prescilla Demens</h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QWimpTL6B6I" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>


    </div>
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