<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Altura</title>

</head>

<body>

    <div class="container">
        <div class="content">
            <!-- Form -->

            <form method="get">
                <div class="header">
                    <a href="/dashboard/index.html" class="buttonvoltar">Voltar ao Inicio</a>
                    <h1 class="tittle1">Calcule a média</h1>
                </div>
                <label class="tittle" for="Nome_filho">
                    Nome do filho
                </label>
                <input class="form" type="text" name="Nome_filho" required="required">

                <label class="tittle" for="nome_pai">
                    Nome do Pai
                </label>
                <input class="form" type="text" name="nome_pai" required="required">

                <label class="tittle" for="nome_mae">
                    Nome da Mãe
                </label>
                <input class="form" type="text" name="nome_mae" required="required">

                <label class="tittle" for="altura_pai">
                    Altura do Pai
                </label>
                <input class="form" type="number" name="altura_pai" required="required">

                <label class="tittle" for="altura_mae">
                    Altura da Mãe
                </label>
                <input class="form" type="number" name="altura_mae" required="required">

                <input type="submit" class="button" value="Calcule a Altura" name="bt_submit">

                <?php
                if (isset($_GET["bt_submit"])) {

                    $altpai = $_GET["altura_pai"];
                    $altmae = $_GET["altura_mae"];
                    $altfil = ((($altpai + $altmae) / 2) + 0.12);
                    $altfil = str_replace(',', '.', $altfil);

                    echo '<strong>Seu filho poderá chegar até ' . $altfil . ' de acordo com a média da altura dos pais<strong>';
                }

                ?>
            </form>
        </div>
    </div>
</body>

</html>