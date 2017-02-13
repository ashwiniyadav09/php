<?php
mysql_connect('localhost','root','') or die("connection error");
mysql_select_db('learning') or die("db error");
echo "<pre>";

$query = "SELECT * FROM student";
$exe = mysql_query($query);
$node = array();
$node['detail'] = array();
$node['detail']['position'] = array();
$pos = 'position-'.$fetch['position'];

$fetch = mysql_fetch_assoc($exe);
while($fetch = mysql_fetch_assoc($exe)){
	$node['detail'][$fetch['position']]['name'] = $fetch['name'];
	$node['detail'][$fetch['position']]['roll'] = $fetch['roll'];
	$node['detail'][$fetch['position']]['class'] = $fetch['class'];
	$node['detail'][$fetch['position']]['position'] = $fetch['position'];
}
print_r($node);
?>

<?php
// $node = array();
// $node['detail'] = array();
// $node['detail']['position'] = array();
// $node['detail']['position']['name'] = 'kunal';
// $node['detail']['position']['roll'] = '1234';
// $node['detail']['position']['class'] = '12';
// $node['detail']['position']['position'] = '1';
// echo "<pre>";
// print_r($node);
?>