<!-- <?php
$serwer = 'localhost';
$login = 'root';
$haslo = '';
$baza = 'klienci';

$do_bazy = mysqli_connect($serwer, $login, $haslo, $baza);
if (mysqli_connect_errno()) {
    exit("Błąd połączenia z serwerem MySQL:" . mysqli_connect_error());
} else {
    echo "połączono z serwerem baz danych. <br>";
}

$wynik=mysqli_query($do_bazy,'SELECT * FROM Klienci');
echo $wynik;

mysqli_close($do_bazy)

?> -->





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $do_bazy = mysqli_connect('localhost', 'root', 'klienci');

    if (!$do_bazy) {
        echo "Błąd połączenia z serwerem MYSQL";
        ?>
    </body>

    </html>
    <?php
    exit;
    } else {
        $zapytanie = mysqli_query($do_bazy, 'SELECT * FROM Klienci');
        if (!$zapytanie) {
            mysqli_close($do_bazy);
            echo "Błąd w zapytaniu <br>";
            ?>
        </body>

        </html>
        <?php
        exit;
        } else {
            ?>
        <table id='tab1'>
            <tr>
                <td>Nr Klienta</td>
                <td>imie</td>
                <td>nazwisko</td>
                <td>miejscowosc</td>
            </tr>
            <?php
            while ($wiersze = mysqli_fetch_row($zapytanie)) {
                echo '<tr>';
                echo '<td>$wiersze[0]</td>';
                echo '<td>$wiersze[1]</td>';
                echo '<td>$wiersze[2]</td>';
                echo '<td>$wiersze[3]</td>';
                echo '<tr>';
            }
            ?>
        </table>
        <?php
        mysqli_close($do_bazy);
        }
    }
    ?>
</body>

</html>


---------------------------------
