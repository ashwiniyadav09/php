<?php
$node = new stdclass;
$node->restraunt = array();
$node->restraunt['reception'] = 'main_reception';
$node->restraunt['workers'] = array();
$node->restraunt['workers']['worker_1'] = "joy";
$node->restraunt['workers']['worker_2'] = "harry";
$node->restraunt['workers']['worker_3'] = "maria";
$node->restraunt['workers']['worker_4'] = "eliza";

$node->menu = array();
$node->menu['options'] = 'menucard';

$node->menu['dishes'] = array();
$node->menu['dishes']['dish_1'] = 'sandwich';
$node->menu['dishes']['dish_2'] = 'cookies';
$node->menu['dishes']['dish_3'] = 'cakes';
$node->menu['dishes']['dish_4'] = 'waffers';

$node->menu['drinks'] = array();
$node->menu['drinks']['drink_1'] = 'coctails';
$node->menu['drinks']['drink_2'] = 'mocktails';
$node->menu['drinks']['drink_3'] = 'softdrinks';
$node->menu['drinks']['drink_4'] = 'harddrinks';

$node->salary = array();
$node->salary['senior_workers'] = 5000;
$node->salary['junior_workers'] = 2000;

foreach($node as $key=>$value){
	//print_r($value);
	foreach($value as $key1=>$value1){
		// echo "<pre>";
		// print_r($value1);
		// print_r($value1[$key1]);

		if($key1!='reception' && $key1!='options'){

			print_r($value1['worker_1']);

		}
		// if($key1=='dishes'){
		// 	print_r($value1['dish_1']);
		// 	echo "</br>";
		// 	print_r($value1['dish_2']);
		// }


	}
}
echo "<pre>";
print_r($node);
?>