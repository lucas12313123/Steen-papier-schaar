<!DOCTYPE html>
<html>

<head>
    <title>steen papier schaar</title>
</head>

<body>
    <h1>steen papier schaar</h1>
    <?php
    $resultaat = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    }

    $resultaat = Winnaar($speler1_choice, $speler2_choice);
    ?>

    <form method="post" action="">
        <label for="speler1">Player 1:</label>
        <select name="speler1_choice" id="speler1">
            <option value="steen">steen</option>
            <option value="papier">papier</option>
            <option value="schaar">schaar</option>
        </select>

        <label for="speler2">Player 2:</label>
        <select name="speler2_choice" id="speler2">
            <option value="steen">steen</option>
            <option value="papier">papier</option>
            <option value="schaar">schaar</option>
        </select>

        <input type="submit" value="Play">
    </form>

    <?php if (!empty($resultaat)) : ?>
        <h2>Resultaat: <?php echo $resultaat; ?></h2>
    <?php endif; ?>
</body>

</html>