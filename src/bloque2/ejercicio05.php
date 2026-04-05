<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
<h1>Ejercicio 5</h1>
<p> Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for</p>

<table class="table table-striped">

    <thead>

        <tr>

            <th></th>

            <?php

            // Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for

            for ($i = 1; $i <= 10; $i++) {

                echo "<th>$i</th>";

            }

            ?>

        </tr>

    </thead>

    <tbody>

        <?php

        // Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for

        for ($i = 1; $i <= 10; $i++): ?>

            <tr><th><?= $i ?></th>

            <?php for ($j = 1; $j <= 10; $j++): ?>

                <td><?= $i * $j ?></td>

            <?php endfor; ?>

            </tr>

        <?php endfor; ?>

    </tbody>

</table>



</body>
</html>