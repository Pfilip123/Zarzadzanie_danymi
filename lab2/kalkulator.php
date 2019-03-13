<!DOCTYPE html>
<html>
<body>

    <?php
    $x = 3;
    $y = 4;

    $a = 3;
    $b=4;
    include 'procesor.php';
    echo dodaj($x,$y).'<br>';
    echo odejmij($x,$y).'<br>';
    echo pomnoz($x,$y).'<br>';
    echo podziel($x,$y).'<br>';
    echo pierwiastek($x,$y).'<br>';
 
    echo '<p>Funkcje statyczne</p>';

    $obiekt = new Procesor;
    echo Procesor.dodaj($a,$b).'<br>';
echo Procesor.odejmij($x,$y).'<br>';
echo Procesor.pomnoz($x,$y).'<br>';
echo Procesor.podziel($x,$y).'<br>';
echo Procesor.pierwiastek($x,$y).'<br>';
    ?>

</body>
</html>