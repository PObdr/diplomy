<?php $seznam = $_GET["seznam"];
$pole_deti = preg_split("/\r\n|\n|\r/", $seznam);
$i=1;
foreach ($pole_deti as $radek_ditete) {
      $jedno_dite[$i] = explode(" ",$radek_ditete);
      $i++;
}
$jmeno_seznamu = 'seznam_deti'.date('YmdHis').'.csv';

$file = fopen($jmeno_seznamu, 'w');
foreach ($jedno_dite as $dite) {
      fputcsv($file, $dite);
}
fclose($file);
require_once('./diplomovac.php');
?>