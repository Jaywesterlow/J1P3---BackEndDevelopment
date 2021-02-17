<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <title>Van HTML naar PHP</title>
    </head>
    <body>
        <?php
            $header = Koptekst;
            $nav = Menu_items;
            $div = Inhoud;
            $footer = Voettekst;
        ?>

        <div class="wrapper">
            <header class="items"><?php echo $header . "<br> Hallooooooooo" ?></header>
            <nav class="items"><?php echo $nav . "<br> ik" ?></nav>
            <div class="items contents"><?php echo $div . "<br> ga" ?></div>
            <footer class="items"><?php echo $footer . "<br> ETEN" ?></footer>
        </div>
    </body>
</html>
