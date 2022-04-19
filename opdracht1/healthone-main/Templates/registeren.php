<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    global $message;
    ?>
    <?php if (!empty($message)) : ?>
        <div class= "alert alert-danger "role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
    <form class="row g-3" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword4">
        </div>
        <div class="row g-3">
            <div class="col">
                <input type="last" class="form-control" placeholder="First name" name="firstName" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" name="lastName" aria-label="Last name">
            </div>
        </div>

        <div class="col-12">
            <button type="submit" name="register" class="btn btn-primary">register</button>
        </div>
    </form>

    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>