<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="content-tabuada">
            <form method="get">
                <div class="header">
                    <a href="/dashboard/index.html" class="buttonvoltar">Voltar ao Inicio</a>
                    <h1 class="tittle1">Tabuada</h1>
                </div>
                <input class="form" type="number" name="bttab">
                <input class="button" type="submit" name="btsubmit">

                <?php

                $tab = 0;
                if (isset($_GET["bttab"])) {
                    $tab = $_GET["bttab"];
                    $num = 0;
                    while ($num <= 10) {
                        echo  $tab . " x " . $num . " = " . ($num * $tab) . "<br>";
                        $num++;
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>