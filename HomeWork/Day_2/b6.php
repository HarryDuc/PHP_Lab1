<?php
// Print tables for 2 to 5
for ($i = 1; $i <= 10; $i++) {
    for ($j = 2; $j <= 5; $j++) {
        $kq = $i * $j;
        printf("%2d x %d = %2d\t", $j, $i, $kq);
    }
    echo "<br>";
}

echo "<br>";

// Print tables for 6 to 9
for ($i = 1; $i <= 10; $i++) {
    for ($j = 6; $j <= 9; $j++) {
        $kq = $i * $j;
        printf("%2d x %d = %2d\t", $j, $i, $kq);
    }
    echo "<br>";
}
?>