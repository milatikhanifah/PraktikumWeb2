<!DOCTYPE html>
<html lang="en">
<head>
    <title>Demo loop</title>
</head>
<body>

<?php
// === PERULANGAN FOR ===
echo "<h3>Perulangan FOR</h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}

echo "<hr>";

// === PERULANGAN WHILE ===
echo "<h3>Perulangan WHILE</h3>";
$angka = 1;
while ($angka <= 5) {
    echo "Angka sekarang: $angka <br>";
    $angka++;
}

echo "<hr>";

// === PERULANGAN DO WHILE ===
echo "<h3>Perulangan DO WHILE</h3>";
$x = 1;
do {
    echo "Nilai x = $x <br>";
    $x++;
} while ($x <= 5);

echo "<hr>";

// === PERULANGAN FOREACH ===
echo "<h3>Perulangan FOREACH</h3>";
$hobi = array("Membaca", "Menulis", "Memasak", "Menyayi");
foreach ($hobi as $h) {
    echo "Saya hobi: $h <br>";
}
?>

</body>
</html>
