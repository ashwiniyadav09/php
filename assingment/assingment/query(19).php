<?php
mysql_connect('localhost','root','') or die("connection error");
mysql_select_db('learning') or die("db error");
echo "<pre>";

$query = "SELECT * FROM student";
$student_exe = mysql_query($query);
$node = array();
$fetch_student = mysql_fetch_assoc($student_exe);

while ($fetch_student = mysql_fetch_assoc($student_exe)) {
	$node['detail'][$fetch_student['name']]['name'] = $fetch_student['name'];
	$node['detail'][$fetch_student['name']]['age'] = $fetch_student['age'];
	$node['detail'][$fetch_student['name']]['roll'] = $fetch_student['roll'];
	$node['detail'][$fetch_student['name']]['class'] = $fetch_student['class'];

}
print_r($node);
?>






