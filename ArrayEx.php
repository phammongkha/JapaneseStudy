<?php

$aTest1 = array("a1", "a2", "a3", "a4", "a5", "a5");
echo count($aTest1);

echo "<br>";
array_push($aTest1, "a7", "a8");
array_pop($aTest1);
array_unshift($aTest1, "a0");
array_shift($aTest1);
array_unique($aTest1, SORT_REGULAR);
//$aTest1 = array_slice( $aTest1, 1, 2);

// $length = count($aTest1);
// for ($i = 0; $i < $length; $i++) {
//    echo $aTest1[$i]."<br>";
//}
foreach ($aTest1 as $val) {
    echo $val."<br>";
}

echo "=========================";
$input = array("red", "green", "blue", "yellow");
   array_splice($input, -2, 1, array("black", "maroon"));
   print_r($input);
   print "<br>";
  
   echo str_pad("test1", 20, "0",STR_PAD_BOTH);
   echo "<br>";
   $dNow = date("Y/m/d", time());
   echo $dNow;
   $sDate = "01-05-2020";
   $d1 = date("Y/m/d", strtotime($sDate));
   //$d1 = DateTime::createFromFormat("m-d-Y", "01-05-2020");
   echo $d1;

   echo "<br>". "xin chao";
   $format = 'Y-m-d';
$date = DateTime::createFromFormat($format, '2020-01-15');
echo "Format: $format; " . $date->format("Y/m/d") . "\n";
echo $date->format("Y/m/d");

echo "<br>";
echo "<br>". "xin chao";
$date2 = date("Y/m/d",mktime(7,8,9, date("m")+1, date("d"), date("Y")));
echo $date2;
