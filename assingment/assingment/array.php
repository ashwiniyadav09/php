<?php

$data = new stdclass;
$data->school = 'school';
$data->data['school']['und']['class-1']['student']['name'] = 'ashwini';
$data->data['school']['und']['class-1']['student']['age'] = '22';
$data->data['school']['und']['class-1']['student']['subject'] = 'science';
$data->data['school']['und']['class-1']['student']['marks'] = '65';

$data->data['school']['und']['class-2']['student']['name'] = 'manisha';
$data->data['school']['und']['class-2']['student']['age'] = '22';
$data->data['school']['und']['class-2']['student']['subject'] = 'maths';
$data->data['school']['und']['class-2']['student']['marks'] = '68';

$data->data['school']['und']['class-3']['student']['name'] = 'kunal';
$data->data['school']['und']['class-3']['student']['age'] = '26';
$data->data['school']['und']['class-3']['student']['subject'] = 'sanskrit';
$data->data['school']['und']['class-3']['student']['marks'] = '55';

$data->data['school']['und']['class-4']['student']['name'] = 'shraddha';
$data->data['school']['und']['class-4']['student']['age'] = '21';
$data->data['school']['und']['class-4']['student']['subject'] = 'social';
$data->data['school']['und']['class-4']['student']['marks'] = '67';

$data->data['school']['und']['class-5']['student']['name'] = 'shakshi';
$data->data['school']['und']['class-5']['student']['age'] = '20';
$data->data['school']['und']['class-5']['student']['subject'] = 'physics';
$data->data['school']['und']['class-5']['student']['marks'] = '67';

$data->data['school']['und']['class-6']['student']['name'] = 'rajesh';
$data->data['school']['und']['class-6']['student']['age'] = '32';
$data->data['school']['und']['class-6']['student']['subject'] = 'chemistry';
$data->data['school']['und']['class-6']['student']['marks'] = '54';

$data->data['school']['und']['class-7']['student']['name'] = 'ayush';
$data->data['school']['und']['class-7']['student']['age'] = '21';
$data->data['school']['und']['class-7']['student']['subject'] = 'bio';
$data->data['school']['und']['class-7']['student']['marks'] = '54';

$data->data['details'] = new stdclass;
$data->pricipal = serialize($data);

foreach($data as $key=>$value){
	//print_r($value);
	foreach($value as $key1=>$value1){
		//print_r($value1);
		foreach($value1 as $key2=>$value2){
			//print_r($value2);
			foreach($value2 as $key3=>$value3){
				//print_r($value3);
				foreach($value3 as $key4=>$value4){
					print_r($value4['name']);
					echo "</br>";
				}
			}
		}
	}
}



echo "<pre>";
print_r($data);
?>