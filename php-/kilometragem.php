<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Kilometragem</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <div class="content-km">
      <form method="get">
        <div class="header">
          <a href="/dashboard/index.html" class="buttonvoltar">Voltar ao Inicio</a>
          <h1 class="tittle1">Calcule a média</h1>
        </div>
        <span class="tittle">Marca do Carro</span>
        <select name="marca" class="form">
          <option value="Selecione"> Selecione
          <option value="hyundai">Hyundai
          <option value="toyota">Toyota
          <option value="fiat">Fiat
          <option value="mercedes">Mercedes
          <option value="peugeout">Peugeout
          <option value="chevrolet">Chevrolet
          <option value="volvo">Volvo
          <option value="renaut">Renaut
          <option value="volkswagen">Volkswagen
          <option value="ford">Ford
          <option value="bmw">BMW
          <option value="honda">Honda
          <option value="audi">Audi
            <select>

              <label class="tittle" for="modelo">
                Modelo
              </label>
              <input class="form" type="text" name="modelo" placeholder="Ex: corsa, uno, etc" required="required">

              <span class="tittle">Tipo de Combustível</span>
              <select name="combustivel" class="form">
                <option value="Selecione"> Selecione
                <option value="gasolina comum"> Gasolina Comum
                <option value="gasolina aditivada"> Gasolina Aditivada
                <option value="etanol"> Etanol
                <option value="etanol aditivado"> Etanol Aditivado
                <option value="gas natural veicular"> GNV (gás natural veicular)
                <option value="diesel"> Diesel
                <option value="diesel aditivado"> Diesel Aditivado

                  <select>

                    <label class="tittle" for="kminicial">
                      Kilometragem Inicial
                    </label>
                    <input class="form" type="number" name="kminicial" placeholder="Em Kilometros" required="required">

                    <label class="tittle" for="kmfinal">
                      Kilometragem Final
                    </label>
                    <input class="form" type="number" name="kmfinal" placeholder="Em Kilometros" required="required">

                    <label class="tittle" for="litros_abastecidos">
                      Litros Abastecidos
                    </label>
                    <input class="form" type="number" name=litros_abastecidos required="required">

                    <input class="button" type="submit" value="Calcular a Média L/KM" name="bt_submit">

                    <?php
                    if (isset($_GET["bt_submit"])) {
                      $m = number_format($m, 2, ',');
                      $kmf = $_GET["kmfinal"];
                      $kmi = $_GET["kminicial"];
                      $lts_abs = $_GET["litros_abastecidos"];
                      $m = ($kmf - $kmi) / $lts_abs;
                      $marca = $_GET["marca"];
                      $modelo = $_GET["modelo"];
                      $combustivel = $_GET["combustivel"];

                      echo '<strong>O seu carro ' . $modelo . ' da marca ' . $marca . ' que é abastecido por ' . $combustivel . ' faz ' . $m . ' KM por litro abastecido<strong>';
                    }
                    ?>
      </form>
    </div>
  </div>
</body>

</html>