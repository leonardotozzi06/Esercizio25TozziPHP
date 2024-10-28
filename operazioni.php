<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni</title>
    <style>
        .errore { color: red; }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$n1 = isset($_GET['numero1']) ? $_GET['numero1'] : '';
$n2 = isset($_GET['numero2']) ? $_GET['numero2'] : '';

if ($n1 === '' || $n2 === '') {
    echo '<p class="errore">Errore: almeno uno dei due numeri è vuoto</p>';
    echo '<a href="numeri.html">Torna alla pagina precedente</a>';
} else {
    $num1 = intval($n1);
    $num2 = intval($n2);

    echo "<h2>Numeri inseriti</h2>";
    echo "<ul>";
    echo "<li>Primo numero: $num1</li>";
    echo "<li>Secondo numero: $num2</li>";
    echo "</ul>";

    $somma = $num1 + $num2;
    $sottrazione = $num1 - $num2;
    $moltiplicazione = $num1 * $num2;
    $divisione = $num2 != 0 ? $num1 / $num2 : "<span class='errore'>Impossibile</span>";

    echo "<h2>Risultati delle operazioni</h2>";
    echo "<table>";
    echo "<tr><th>Operazione</th><th>Risultato</th></tr>";
    echo "<tr><td>Addizione</td><td>$somma</td></tr>";
    echo "<tr><td>Sottrazione</td><td>$sottrazione</td></tr>";
    echo "<tr><td>Moltiplicazione</td><td>$moltiplicazione</td></tr>";
    echo "<tr><td>Divisione</td><td>$divisione</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
