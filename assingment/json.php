
<?php
// $json = '{"name":"ashwini","age":"22","city":"korba","others":{"name":"nikki","age":"22","city":"korba",
// "others":{"pin":[{"pid":"435","nid":"343"}]}}}';
// echo "<pre>";
// print_r(json_decode($json));
?>
<?php
$data = 
"<personal>
<name>ashwini</name>
<age>22</age>
<city>korba</city>
<contact>12345</contact>
<contact>53677</contact>
</personal>";
// var_dump($data);
// exit;

$abc = simplexml_load_string($data);

$xyz = json_encode($abc);
$dat = json_decode($xyz);
// print_r($dat);
?>

