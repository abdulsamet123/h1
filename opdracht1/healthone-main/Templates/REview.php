    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->

        <title>Formulier</title>

        </head>

<body>
<?php
include_once('defaults/head.php');
?>



<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    global $product,$name;
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

    <hr>



    <div class="row gy-3">
        <form method="post">
            <div class="mb-3">
                <label for="description" class="col-form-label">
                    description:
                </label>
                <textarea  name="description" class="form-control" id="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="stars" class="col-form-label">
                    stars:
                </label>
                <select name="stars">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="2">4</option>
                    <option value="3">5</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" name="verzenden" class="btn btn-secondary">Save Change</button>
            </div>
        </form>
    </div>
</div>


</body>
</html>
