<?php
$vote = $_REQUEST['vote'];
$reset = $_REQUEST['reset'];
$giveaway = $_REQUEST['giveaway'];
//get content of textfile
$filename = "data.txt";
$content = file($filename);

//put content in array
$array = explode("|", $content[0]);

$no = $array[0];

if ($reset == 1) {
  $no = 0;
}
if ($vote == 1) {
  $no = $no + 1;
}
if ($giveaway == 1) {
  $givewincode = 0;
}

//insert votes to txt file
$insertvote = $no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>



