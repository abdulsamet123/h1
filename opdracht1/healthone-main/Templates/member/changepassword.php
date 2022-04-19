

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
    <?php if (!empty($message)):?>
    <div class="alert alert-success"role="alert">
         <?=$message?>
    </div>
    <?php endif;?>
    <form class="row g-3" method="post">
        <div class="col-md-12">
            <label for="inputEmail"class="form-label">Email</label>
            <input type="email" name="email" class="form-label"
            id="inputEmail" readonly="readonly" value="<?php if (isset($_SESSION['user']->email)){echo $_SESSION['user']->email;}else{echo "";}?>">
        </div>
        <div class="col-md-6">
            <label for="inputPassword"class="form-label">password</label>
            <input type="text" name="password" class="form-control" id="inputPassword" value="<?php if (isset($_SESSION['user']->password))
            {echo $_SESSION['user']->password;}else{echo "";}?>"placeholder="">
        </div>

        <div class="col-12">
            <button type="submit" name="password" class="btn btn-primary">Aanpassen password</button>
        </div>
    </form>
    <hr>

    <?php
    include_once "defaults/footer.php";
    ?>
</div>
</body>
</html>