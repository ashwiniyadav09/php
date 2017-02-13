<?php
$data = new stdclass;
$data->info['name'] = 'ashwini';
$data->info['age'] = '23';

$data->info['class'] = array();
$data->info['class']['c-1'] = 'class-1';
$data->info['class']['c-2'] = 'class-2';
$data->info['class']['c-3'] = 'class-3';

$data->marks = array();
$data->marks['m-1'] = '43';
$data->marks['m-2'] = '32';
$data->marks['m-3'] = '23';

// foreach conditions.....
$count=1;
$val = 65;
 foreach($data as $key=>$value){

 	if($key=='marks'){
 		foreach($value as $key1=>$value1){
 			
 				//$data->marks[$key1] = '45';
 				//	if($key1=='m-3' && $key1=='m-2' && $key1=='m-1'){
 				$data->marks['m-'.$count] = $val;
 				// $data->marks['m-2'] = '76';
 				// $data->marks['m-1'] = '43';
 			//}
 				
$count++;
$val++;
 			
 		}

 	}
 // echo "<pre>";
 // print_r($value);
 	//foreach($value as $key1=>$value1 ){
// 		 // echo "<pre>";
// 		 // print_r($value1);
// 		if($value['class']['c-1']=='class-1'){
// 			$data->info['class']['c-1'] = 'class-4';

 		}

// 	}
// }

echo "<pre>";
print_r($data);
?>
