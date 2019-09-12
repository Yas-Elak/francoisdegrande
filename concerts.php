<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concerts</title>
    <meta name="description" content="Les concerts à venir" />
    <?php include 'includes/css.html'; ?>
    <link rel="stylesheet" type="text/css" href="styles/master.css">


</head>
<body>
<?php include 'includes/menu.php'; ?>

<?php include 'includes/library.html'; ?>

<?php
$spreadsheet_url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS0k_irX-ynuINfjTGiV2TkJ5iRPgG-lh1iP4hiX0uqOVHCWdZskaUkdzpEyYaPb77dk1q4EJZvHubN/pub?gid=0&single=true&output=csv";

if (!ini_set('default_socket_timeout', 15)) echo "<!-- unable to change socket timeout -->";

if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $concerts[] = $data;
    }
    fclose($handle);
} else
    die("");


//var_dump($spreadsheet_data);

//echo $concerts[0][1];

?>
<div class="gallery-title"><h1>Concerts</h1></div>

<div class="row row-source">

    <?php for ($i = 1; $i < count($concerts); $i++): ?>

        <div class="row row-concert">

            <div class="col-3">
                <?php $srcImage = $concerts[$i][1]; ?>
                <?php if (strlen($concerts[$i][1]) == 0) {
                    echo "<img class='concert-image' src='media/gallery/images/concertdefaut.jpg'/>";
                } else {
                    echo "<img class='concert-image' src=\"${srcImage}\"/>";
                } ?>
            </div>
            <div class="col-9">
                <h4><?php echo $concerts[$i][0] ?></h4>
                <p><?php echo $concerts[$i][2] ?></p>
                <p><strong><?php echo $concerts[$i][3] ?> / <?php echo $concerts[$i][4] ?></strong></p>
                <p><?php echo $concerts[$i][5] ?>
                    <br>
                    <?php echo $concerts[$i][6] ?>
                </p>
                <?php $aLink = $concerts[$i][7]; ?>
                <a href="<?php echo "${aLink}"; ?>"><?php echo $concerts[$i][8]; ?></a>
            </div>

        </div>


    <?php endfor ?>
    <div class="col-8">
    </div>

</div>


<?php include 'includes/footer.php'; ?>

<script>
    $("#a-concerts").addClass('active');
</script>
</body>
</html>
