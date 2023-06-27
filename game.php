<?php
$speler1_choice = $_POST['speler1_choice'];
$speler2_choice = $_POST['speler2_choice'];

function Winnaar($keuze1, $keuze2)
{
    if ($keuze1 == $keuze2) {
        return "gelijk!";
    } elseif (
        ($keuze1 == 'steen' && $keuze2 == 'schaar') ||
        ($keuze1 == 'papier' && $keuze2 == 'steen') ||
        ($keuze1 == 'schaar' && $keuze2 == 'papier')
    ) {
        return "speler 1 wint!";
    } else {
        return "speler 2 wint!";
    }
}


$resultaat = Winnaar($speler1_choice, $speler2_choice);
?>

<!DOCTYPE html>
<html>

<head>
    <title>steen papier schaar Resultaat</title>
</head>

<body>
    <h1>steen papier schaar Resultaat</h1>
    <p><?php echo $resultaat; ?></p>
</body>

</html>