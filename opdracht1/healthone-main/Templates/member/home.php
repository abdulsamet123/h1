
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
            ?>
            <table>
                <h4>Welkom <?=$_SESSION['user']->first_name?> <?=$_SESSION['user']->last_name?>
                    <br>

            </table>
            Fit en gezond zijn is geen vanzelfsprekenheid.We moeten er zelf wat voor doen. Goede, gezo:
            Bewegen hoort hier ook bij.

            <hr>


            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
