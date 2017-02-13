<?php
 echo"<pre>";
$json = '{"detail":[{
	"position":[
	{"name":"ashwini","roll":"1234","class":"12","position":"1"},
	{"name":"naziya","roll":"3445","class":"10","position":"2"},
	{"name":"kunal","roll":"4354","class":"9","position":"4"},
	{"name":"shruti","roll":"4567","class":"6","position":"6"},
	{"name":"manisha","roll":"5669","class":"8","position":"7"}
	],

	"software_company":[
	{"company":"indianic","department":"web","technology":"drupal"},
	{"company":"tcs","department":"web","technology":"wordpress"},
	{"company":"staerlite","department":"mvc","technology":"c.i"},
	{"company":"kpit","department":"ios","technology":"swift"},
	{"company":"collebera","department":"b.p.o","technology":"conversation"}
	],

	 "locations":[
	 {"company":"indianic","location":"iskon","city":"ahemdabad"},
	 {"company":"tcs","location":"gandhinagar","city":"ahemdabad"},
	 {"company":"kpit","location":"p.nagar","city":"delhi"},
	 {"company":"collebera","location":"africa","city":"uganda"}
	 ]

  }]
}';
$data = json_decode($json);

foreach($data as $key=>$value){
	 echo "<pre>";
	 print_r ($value);

	foreach($value as $key1=>$value1){
		// echo "<pre>";
	 // print_r($value);
		foreach($value1 as $key2=>$value2){
			if($key2=='position' || $key2=='software_company' || $key2=='location')
				

			foreach($value2 as $key3=>$value3){
				if($key3=='0')
					//if($key3=='2')
				 // echo "<pre>";
				 // print_r($value3->name);
				 // echo "</br>";
				 // print_r($value3->class);
				 //  echo "</br>";
				 // print_r($value3->location);


					
				foreach($value3 as $key4=>$value4){
					if($key4=='position'){
						$data->detail['0']->position['0']->position = "7";
					}
					if($key4=='roll'){
						$data->detail['0']->position['0']->roll = "54445";
					}
					if($key4=='company'){
						$data->detail['0']->software_company['2']->company = "kpit";
					}
					  if($key4=='city'){
						$data->detail['0']->locations['1']->city = 'korba';
					}


					
					 
					}
				

					
					// print_r($value4);
				}


			}
		}
	}




print_r($data);
?>