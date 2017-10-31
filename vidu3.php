<?php

$mangcauhoi = array();
$mangcauhoi[] = "cau hoi 1";
$mangcauhoi[] = "cau hoi 1ư2";
$mangcauhoi[] = "cau hoi 13";
$mangcauhoi[] = "cau hoi 14";
$mangcauhoi[] = "cau hoi 15";
$mangcauhoi[] = "cau hoi 16";
$mangcauhoi[] = "cau hoi 17";
$mangcauhoi[] = "cau hoi 18";
$mangcauhoi[] = "cau hoi 19";
$mangcauhoi[] = "cau hoi 110";



$socauhoicanlay = 6;

$mangIdCacCauHoi = array();

$i=0;
while($socauhoicanlay > $i  )
{
	$id = rand(0,count($mangcauhoi)-1);
	if(!in_array($id, $mangIdCacCauHoi)){
		$mangIdCacCauHoi[]= $id;
		$i++;
	}
}

foreach ($mangIdCacCauHoi as $value) {
	echo $mangcauhoi[$value]."<br>";
}
?>