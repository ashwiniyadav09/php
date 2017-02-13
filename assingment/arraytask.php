<?php

mysql_connect('localhost','root','') or die("connection error");
mysql_select_db('learning') or die("db error");

$query = "SELECT * FROM student";
$exe = mysql_query($query);
$node = array();
$count=0;
while ($project =  mysql_fetch_assoc($exe))
{
	$projects[] = $project;
}
print "<pre>";print_r($projects);exit;
foreach($projects as $key=>$value){
	$pos= 'position-'.$value['positions'];

	$node['details'][$pos][$key]['name'] = $value['name'];
	$node['details'][$pos][$key]['roll'] = $value['roll'];
	$node['details'][$pos][$key]['class'] = $value['class'];
	$node['details'][$pos][$key]['position'] = $value['positions'];
}
print_r($node);

?>