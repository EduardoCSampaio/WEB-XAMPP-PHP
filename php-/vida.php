<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Tempo de Vida</title>
</head>

<body>
    <div class="container">
        <div class="content">
            <form method="post">
                <div class="header">
                    <a href="/dashboard/index.html" class="buttonvoltar">Voltar ao Inicio</a>
                    <h1 class="tittle1">Calcule a Idade</h1>
                </div>
                <label class="tittle" for="nome">
                    Nome:
                </label>
                <input class="form" type="text" name="nome" required="required">

                <label class="tittle" for="idade">
                    Idade:
                </label>
                <input class="form" type="number" name="idade" required="required">

                <button type="submit" class="button" name="Enviar">Enviar</button>
                <?php
                date_default_timezone_set("America/Sao_Paulo");
                $idade = 1;
                $nome = "";

                if (isset($_POST["Enviar"])) {
                    $nome = $_POST['nome'];
                    $idade = $_POST['idade'];
                    if (!is_numeric($idade) && $idade > 0) {
                        echo "Insira uma idade válida";
                    } else {
                        $mesVida = $idade * 12;
                        $diaVida = 30 - date("d");
                        $horasVida = 24 - date("H");

                        echo "Seu nome é: " . $nome . "<br>";
                        echo "Você tem: " . $idade . " anos<br>";
                        echo "Você viveu por aproximadamente: " . $mesVida . " meses, " . $diaVida . " dias e " . $horasVida . " horas<br>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>