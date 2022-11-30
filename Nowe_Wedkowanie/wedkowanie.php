<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="ISO-8859-2">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link rel="stylesheet" href="styl_1.css?v=213742069">
</head>
<body>

    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>

    <div class="content">
        <div class="dwa_boki_lewe">
            <div class="pierwszy">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                    <?php include 'Script1.php';?>
                </ol>
            </div>

            <div class="drugi">
                <h3>Ryby drapieżne naszych wód</h3>
                <table>
                    <tr><th>L.p.</th><th>Gatunek</th><th>Występowanie</th></tr>
                    <?php include 'Script2.php';?>
                </table>
            </div>
        </div>

        <div class="blok_prawy">
            <img src="sum.jpg" alt="Sum"/>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </div>

    <div class="stopka">
        <p>Stronę wykonał: 03320606017</p>
    </div>
    
</body>
</html>