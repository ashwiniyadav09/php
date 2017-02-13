<?php
$json = '{"software_company":[{
	"indianic":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}]},
	{"Employees":[{"Name":"kunal","age":"22","technology":"drupal"}]}
	],
	"TCS":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}]},
	{"Employees":[{"Name":"kunal","age":"22","technology":"drupal"}]}
	] ,
	"wipro":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}]},
	{"Employees":[{"Name":"kunal","age":"22","technology":"drupal"}]}
	] ,
	"cognizant":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] },
	{"Employees":[{"Name":"manisha","age":"22","technology":"ios"}] } 
	],
	"capgemini":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] },
	{"Employees":[{"Name":"manisha","age":"22","technology":"ios"}] } 
	] ,
	"sterlite":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"web-duniya":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"globus-soft":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"it-infotech":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"collebra":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"amazon":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] },
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] 
}] 
}';
$data = json_decode($json); 

foreach($data as $key=>$value){
	//print_r($value);
	foreach($value as $key1=>$value1){
		// print_r($value1);
		foreach($value1 as $key2=>$value2){
			//print_r($value2);
			foreach($value2 as $key3=>$value3){
				//print_r($value3);
				foreach($value3 as $key4=>$value4){
					//print_r($value4);
					foreach($value4 as $key5=>$value5){
						//print_r($value5);
						foreach($value5 as $key6=>$value6){
							echo "</br>";
							print_r($value6);

						}
					}
				}
			}
		}

	}
}


echo "<pre>";
print_r(json_decode($json));

?>