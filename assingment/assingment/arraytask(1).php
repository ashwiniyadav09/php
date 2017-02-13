<?php
echo "<pre>";
mysql_connect('localhost','root','') or die("connection error");
mysql_select_db('learning') or die("db error");
$query = "SELECT * FROM student";
$exe = mysql_query($query);
$node = array();
$count=0;


while($fetch= mysql_fetch_assoc($exe)){
	$pos= 'position-'.$fetch['positions'];

	$node['details'][$pos][$count]['name'] = $fetch['name'];
	$node['details'][$pos][$count]['roll'] = $fetch['roll'];
	$node['details'][$pos][$count]['class'] = $fetch['class'];
	$node['details'][$pos][$count]['position'] = $fetch['positions'];
	$count++;
}
print_r($node);

?>
<?php
// $node = array();
// echo "<pre>";
// $node['details'] = array();
// $node['details']['position-1'] = array();
// $node['details']['position-1'][0]['name'] = 'ashwini';
// $node['details']['position-1'][0]['roll'] = '1234';
// $node['details']['position-1'][0]['class'] = '12';
// $node['details']['position-1'][0]['position'] = '1';

// $node['details']['position-1'][1]['name'] = 'kunal';
// $node['details']['position-1'][1]['roll'] = '4355';
// $node['details']['position-1'][1]['class'] = '12';
// $node['details']['position-1'][1]['position'] = '1';

// $node['details']['position-2'][0]['name'] = 'manisha';
// $node['details']['position-2'][0]['roll'] = '1540126';
// $node['details']['position-2'][0]['class'] = '10';
// $node['details']['position-2'][0]['position'] = '2';

// $node['details']['position-2'][1]['name'] = 'shruti';
// $node['details']['position-2'][1]['roll'] = '1540125';
// $node['details']['position-2'][1]['class'] = '8';
// $node['details']['position-2'][1]['position'] = '3';

//print_r($node);
?>