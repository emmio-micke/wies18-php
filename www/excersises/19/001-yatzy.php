<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yatzy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th>Player 1</th>
            <th>Player 2</th>
            <th>Player 3</th>
            <th>Player 4</th>
        </tr>

        <tr>
            <td>Ettor</td>
            <td><input type="number" id="player1_ones" value="0"></td>
            <td><input type="number" id="player2_ones"></td>
            <td><input type="number" id="player3_ones"></td>
            <td><input type="number" id="player4_ones"></td>
        </tr>

        <tr>
            <td>Tvåor</td>
            <td><input type="number" id="player1_twos"></td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td>Treor</td>
            <td><input type="number" id="player1_threes"></td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td>Fyror</td>
            <td><input type="number" id="player1_fours"></td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td>Femmor</td>
            <td><input type="number" id="player1_fives"></td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td>Sexor</td>
            <td><input type="number" id="player1_sixes"></td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td>Summa</td>
            <td id="playerone_sum"></td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td>Bonus</td>
            <td id="playerone_bonus"></td>
            <td colspan="3"></td>
        </tr>

    </table>

    <button id="calc">Beräkna</button>
</body>
</html>