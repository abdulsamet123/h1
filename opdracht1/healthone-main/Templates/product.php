<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    global $product,$name,$reviews;
    ?>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">sportcenter</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/categories/<?= $product->category_id ?>"> <?= $name ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $product->name ?></li>

        </ol>
    </nav>

<div class="row">
    <div class="col-12">
            <div class="card">
                <img class="img-fluid center-block" width="200px" src='/img/<?= $product->picture ?>'/>

                     <div class="card-body">
                         <h5 class="card-title "><?= $product-> name ?></h5>
                         <p class="card-text"><?= $product-> description ?></p>
                         <a type="button" href="/review/<?=$product->id?>" role="button" class="btn btn-secondary">Add Review</a>
                    </div>
            </div>

    </div>
    <div class="col-12"
        <?php foreach ($reviews as $review ):?>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-title mb-3"><?= $review->description ?>
                        </div>
                        <div> <?= $review->stars?>
                    </div>
                        <div>
                            <?=$review->date?>
                        </div>

                </div>

            </div>
        <?php endforeach;?>

    </div>
    </div>

    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>

</body>
</html>