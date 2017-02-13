<?php
function ash($count){
	$drupal_array = array();
	for($i=0; $i<=$count; $i++){
		$drupal_array[$i]['name'] = 'ashwini';
	    $drupal_array[$i]['age'] = $i+10;

	}
	

return $drupal_array;
}
echo "<pre>";
print_r(ash(5));

?>

<?php
function info($name,$age,$company){
	$ash_array = array();
	$ash_array['name'] = 'ashwini';
	$ash_array['age'] = '22';
	$ash_array['company'] = 'indianic';

	return $ash_array;
}
$getdata = info('ashwini','22','indianic');
echo "<pre>";
print_r($getdata);

?>

<?php
function web($name,$company,$tech,$department){
	$array = array();
	$array['name'] = 'naziya';
	$array['company'] = 'indianic';
	$array['tech'] = 'drupal';
	$array['department'] = 'web';

	return $array;
}
 $getdata = web('naziya','indianic','drupal','web');
 echo "<pre>";
 print_r($getdata);

?>
<?php
function web($name,$company,$tech,$department){
	$array = array();
	$array['name'] = 'ashwini';
	$array['company'] = 'indianic';
	$array['tech'] = 'drupal';
	$array['department'] = 'web';

	return $array;
}
$getdata = web('ashwini','indianic','drupal','web');
print_r($getdata);
?>
<?php
function new($name,$company,$tech,$department){
	$array = array();
	$array['name'] = 'ashwini';
	$array['company'] = 'indianic';
	$array['tech'] = 'drupal';
	$array['department'] = 'web';

	return $array;
}
$getdata = new('ashwini','indianic','drupal','web');
print_r($getdata);
?>
<?php
function func($count){
	$array= array();
	for($i=0; $i<=$count; $i++ ){
		$array[$i]['name'] = 'ashwini';
		$array[$i]['company'] = 'indianic';
        $array[$i]['tech'] = 'drupal';
        $array[$i]['department'] = 'web';

	}
	return $array;
}
print_r(func(6));
?>




