<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <?php
    $_POST['euro'] = 0;
    $_POST['currency'] = 0;
    $resultat = 0;

    $changes = array(
        "dollarsA" => 1.04,
        "dollarsC" => 0.73,
        "yen" => 144.92753,
        "peso" => 0.73,
        "livre" => 0.73,
        "roupie" => 0.73,
        "diram" => 0.73,
        "tutu" => 200
    );

    function calcul($euro, $currency)
    {
        return $euro * $currency;
    }

    if ($_POST["euro"] && $_POST["currency"]) {
        $resultat = calcul($_POST["euro"], $changes[$_POST["currency"]]);
    }




    ?>

    <main>
        <div class="convertisseur ">
            <h4>Convertisseur de monnaie</h4>
            <form action="convertisseur.php" method="POST" class="form-group">

                <div class="montant-parent">
                    <label for="name">Montant(€):</label>
                    <input type="number" name="euro" class="form-control" id="inputMontant" />
                </div>

                <div class="montant-parent">
                    <p> convertir en : </p>
                    <select name="currency" class="form-control" id="exampleFormControlSelect1">

                        <?php foreach ($changes as $key => $change) {
                            $label = ucfirst($key);
                            echo "<option value='$key'>$label</option>";
                        } ?>
                    </select>
                </div>

                <div class="montant-parent">
                    <button type="submit">Convertir</button>
                </div>
            </form>

            <div class="montant-parent">
                <p>Résultat: <?= $resultat ?></p>

            </div>
        </div>

    </main>






    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>