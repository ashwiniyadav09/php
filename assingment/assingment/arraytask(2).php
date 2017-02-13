<?php
echo "<pre>";
mysql_connect('localhost','root','') or die ("connection error");
mysql_select_db('learning') or die ("db error");

$query = "SELECT * FROM student";
$exe = mysql_query($query);
$node = array();
$count=0;

while($fetch= mysql_fetch_assoc($exe)){
	$teach = 'teachers-'.$fetch['teachers'];
	
	$node['details'][$teach][$count]['name'] = $fetch['name'];
	$node['details'][$teach][$count]['roll'] = $fetch['roll'];
	$node['details'][$teach][$count]['class'] = $fetch['class'];
	$node['details'][$teach][$count]['positions'] = $fetch['positions'];
	$node['details'][$teach][$count]['teachers'] = $fetch['teachers'];
	$count++;
}
print_r($node);

?>
// <?php
// $node = array();
// $node['details'] = array();
// $node['details']['teachers'][0]['name'] = 'ashwini';
// $node['details']['teachers'][0]['roll'] = '5376';
// $node['details']['teachers'][0]['class'] = '12';
// $node['details']['teachers'][0]['positions'] = '1';
// $node['details']['teachers'][0]['teachers'] = 'kunalsir';

// $node['details']['teachers'][1]['name'] = 'manisha';
// $node['details']['teachers'][1]['roll'] = '6557';
// $node['details']['teachers'][1]['class'] = '10';
// $node['details']['teachers'][1]['positions'] = '2';
// $node['details']['teachers'][1]['teachers'] = 'naziya mam';
// echo "<pre>";
// print_r($node);
?>