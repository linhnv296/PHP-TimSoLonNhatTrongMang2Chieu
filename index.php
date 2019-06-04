<?php
$arr = [
    [1, 2, 3, 4, 3, 2, 6, 8, 9],
    [-4, 2, 3, 6, 9, 6, 4, 4, 2],
    [33, -444, 6, 5, 3, 2, 4, 3, 2],
    [1, 3, 5, 6, 7, 65, 4, 3, 2],
    [5, 3, 4, 6, 7, -84, 3, 4, 5],
    [3, 4, 5, 6, 7, 8, 4, 5, 6]
];
$maxnum = $arr[0][0];
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        if ($maxnum < $arr[$i][$j]) {
            $maxnum = $arr[$i][$j];
        }
    }
}
echo "Mang la: ";
for ($i = 0; $i < count($arr); $i++) {
    echo "<br>";
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo "<span style='width: 40px; display: inline-block'>".$arr[$i][$j]."</span>";
    }
}
echo "<br> So Lon Nhat La: ";
echo $maxnum;