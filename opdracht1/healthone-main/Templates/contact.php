<!DOCTYPE html>
<html>
<head>
</head>
<?php
include_once('defaults/head.php');
?>


<body>


<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/contact">Contact</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="card-body text-center">
                <h5 class="card-title">Openingstijden</h5>
                <div class="card-body">
                    <div class="col-12"
                    <?php global $contact ?>
                    <?php foreach ($contact as $review ):?>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="card-title mb-3"><?= $review->tijd ?>
                                </div>
                                <div> <?= $review->dag?>
                                </div>


                            </div>

                        </div>
                        <?php endforeach;?>

                    <hr>
                    <h4>Telefoonnummer: 0641434271</h4>
                    <hr>
                </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="card-body text-center">
                    <h5 class="card-title">Locatie</h5>
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1329.858406702439!2d4.33134515325898!3d51.99512845798715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0x9da6361d0a36ebd1!2sZuidhoornseweg%206A%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1snl!2snl!4v1634204330404!5m2!1snl!2snl" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <hr>
                    </div>
                </div>
            </div>
        </div>


    <?php
    include_once('defaults/footer.php');

    ?>

</body>
</html>