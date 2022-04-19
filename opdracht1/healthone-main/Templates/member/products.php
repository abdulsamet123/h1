
<!DOCTYPE html>
<html>

<?php
include_once "defaults/head.php";
?>
<body>
<div class="container">
    <?php
    include_once "defaults/header.php";
    include_once "defaults/menu.php";

    include_once "defaults/pictures.php";
    ?>


    <h4>Sportcenter HealthOne</h4>

    <br>
    <div class="container">
         <table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">foto</th>
        <th scope="col">Naam</th>
        <th scope="col">Category</th>
        <th scope="col" class="text-center">Aanpassen</th>
        <th scope="col" class="text-center">Verwijderen</th>
    </tr>
    </thead>


    <?php global $products?>
    <?php $count=1;?>
    <?php foreach ($products as $product):?>
    <tr>
        <th scope="row"><?=$count++?></th>
        <td style="..."><img src="/img/<?=$product->picture?>" class="img-thumbnail img-fluid w-25"></td>
        <td><?=$product->name?></td>
        <td><?=$product->category?></td>
        <td class="text-center">
            <a type="button" class="btn btn-success btn-sm px-3" href="/admin/edit/<?=$product->id?>">Aanpassen
                <i class="bi bi-pencil-square"></i>
            </a>
        </td>
        <td class="text-center">
            <a type="button" class="btn btn-danger btn-sm px-3" href="/admin/delete/<?=$product->id?>">Verwijderen
                <i class="bi bi-dash-square"></i>
            </a>
        </td>
    </tr>
    <?php endforeach;?>
         </table>
    </div>
    <td class="text-center">
        <a type="button" class="btn btn-success btn-sm px-3" href="products.php">add
            <i class="bi bi-dash-square"></i>
        </a>
    </td>


    <br>

    <hr>
    <?php
    include_once "defaults/footer.php";
    ?>
</div>
</body>
</html>
