<?php

//zad1
$imie = "Paweł";
$nazwisko = " Filipek";
echo $imie.$nazwisko;

//zad2
$dane = $imie.$nazwisko." 25 lat";
echo "<p>".$dane."</p>";

//zad3
for ($i = 10; $i <= 1000; $i++){  
   
    $parzysta = $i%2;
    if ($parzysta == 0){
    echo $i.", ";
}
}

//zad4
$studenci = array("4IIZ"=>array("Jan Kowalski", "Adam Nowak"),
    "6IIZ"=>array("Jan Matejko", "Adam mickiewicz"));

echo '<pre>';
print_r($studenci);
echo '</pre>';


echo '<html>
<body>
    <style type="text/css">
    table, tr td{
        border: 1px solid black;
    }
    table{
        border-collapse: collapse;
    }</style>
    <table>';
//zad5
foreach ($studenci as $indeks => $student) {

    echo '<tr><td>'.$indeks.'</td>';
    for ($i = 0; $i < count($student); $i++){
        echo '<td>'.$student[$i].'</td>';
    }
    echo '</tr>';
}
echo '</table></body></html>';
?>