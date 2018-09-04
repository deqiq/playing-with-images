<?php
$url1 = "http://localhost:90/kkk/nnnn.txt";
$url2 = "http://localhost:90/kkk/name.txt";
$number = file_get_contents($url1);
$name = file_get_contents($url2);
$numbers = explode("\n", $number);
$names = explode("\n", $name);




$dir    = 'WALLET';
$files = scandir($dir,0);




// echo($numbers[$qwerty]);
// exit();

$ff = array_slice($files, 2);





$qwerty = 0;
// foreach ($ff as $f) {
// 	echo $f." ";
// 	rename($dir."/".$f, $dir."/".$numbers[$qwerty].".jpg");
// 	$qwerty++;
// }











// exit();



for ($i=2; $i < sizeof($files) ; $i++) {
	//Step 1
	// echo ($i-1)." ".$files[$i]."<br>";
	// echo $files[$i]."<br>";
	// echo ($qwerty+1)."<br>";
	echo ($i-2)."<br>";
	echo $dir."/".$files[$i]."|<br>";
	// echo $dir."/GECE".substr($numbers[$qwerty],0, strlen($numbers[$qwerty])-1).".jpg"."|<br><br>";
	echo $dir."/GECE".substr($numbers[$i-2],0, strlen($numbers[$i-2])-1).".jpg"."|<br><br>";
	rename($dir."/".$files[$i], $dir."/GECE".substr($numbers[$i-2],0, strlen($numbers[$i-2])-1).".jpg");
	// rename($dir."/".$files[$i], $dir."/GECE".$numbers[$qwerty].".jpg");
	// $qwerty++;


	// $d = substr($files[$i], 0, strlen($files[$i]) - 4);
	// $d1 = explode(" ", $d);



	// foreach ($d1 as $kk => $vv) {
	// 	echo  strtoupper($vv[0]).strtolower(substr($vv, 1, strlen($vv)))." ";
	// }
	// echo "<br>";
	
	// $change = "";
	// rename($dir."/".$files[$i], $dir."/".$numbers[$qwerty].".jpg");

	// $uu = (int)$numbers[$i-2]-1; 
	// if($uu<=0){
	// 	echo $files[$i]."<br>";
	// 	$change = $files[$i];
	// }else{
	// 	echo $files[$i]."<br>".$names[$uu]."<br>";	
	// 	$change= "HL".($uu+1).".jpg";
	// }
	// echo $change."<br>";
	// echo "<br><br>";
	// rename($dir."/".$files[$i], $dir."/".$change);
	$qwerty++;
}


// foreach ($files2 as $key => $value) {
// 	echo $key." ".$value."<br>";
// }

// $number= [2,3,4,5,7,15,17,21,22,25, 88,94];



/*
$url = "http://localhost:90/kkk/file.txt";
$page = file_get_contents($url);

$pieces = explode("\n", $page);

foreach ($pieces as $key => $value) {
	$f = substr($value,2, strlen($value));
	echo $f."";
	// $v = explode("\n", $value);
	// // echo(sizeof($v));
	// echo "{\"title\": \"".$v[1]."\",";
	// echo "\"text\": \"";

	// $vv = array_slice($v, 2, sizeof($v));
	// foreach ($vv as $key => $vvv) {
	// 	echo $vvv."\\"."n"."\\"."n";
	// }
	// echo "\"},";
	// // echo "<br>";
	echo "<br>";
}
// echo(sizeof($pieces));




// echo "dddd";



/*
[ {"title": "", "text": ""}, {"title": "", "text": ""}, {"title": "", "text": ""}, {"title": "", "text": ""}
]
*/