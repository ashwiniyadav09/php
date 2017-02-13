<?php
// function data($count){
// 	$array = array();
// 	for($i=0;$i<=$count;$i++){
// 		$array[$i] = $count;

// 	}
// 	return $array;
// }
// echo "<pre>";
// print_r(data(9));
?>

<?php
// function ash($count){
// 	$array = array();
// 	for($i=0;$i<=$count;$i++){
// 		$array[$i] = $i+2;

// 	}
// 	return $array;

// }

// echo "<pre>";
// print_r(ash(7));
?>



<?php
function ash($count){
	$nikk_array = array();
	for($i=0;$i<=$count;$i++){
		$nikk_array[$i]['name'] = "ashwini".$i;
		$nikk_array[$i]['age'] = $i+20;

		}
	return $nikk_array;
}
echo "<pre>";
print_r(ash(1));
?>
<?php
function ind($count){
	$nikk_array = array();
	for($i=0;$i<=$count;$i++){
		$nikk_array[$i]['name'] = "ashwini".$i;
		$nikk_array[$i]['age'] = $i+20;
	}
	return $nikk_array;
}
echo "<pre>";
print_r(ind(5));


?>
<?php
function drupal($count){
	$nikk_array = array();
	for($i=0;$i<=$count;$i++){
		$nikk_array[$i]['color'] = "red" . $i;
		$nikk_array[$i]['time'] = $i . "PM";
	}
	return $nikk_array;

} 
echo "<pre>";
print_r(drupal(6));
?>








