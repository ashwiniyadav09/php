<?php
echo "<pre>";
mysql_connect('localhost','root','') or die("connection error");
mysql_select_db('learning') or die("db error");

$query = "SELECT * FROM student";
$exe = mysql_query($query);
$node = array();
$count=0;

while($fetch = mysql_fetch_assoc($exe)){
  $marks = 'marks-'.$fetch['marks'];

	$node['details'][$marks][$count]['name'] = $fetch['name'];
	$node['details'][$marks][$count]['roll'] = $fetch['roll'];
	$node['details'][$marks][$count]['class'] = $fetch['class'];
	$node['details'][$marks][$count]['positions'] = $fetch['positions'];
	$node['details'][$marks][$count]['teachers'] = $fetch['teachers'];
	$node['details'][$marks][$count]['marks'] = $fetch['marks'];

	$count++;

	
}
print_r($node);
?>