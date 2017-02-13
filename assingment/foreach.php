<?php
$json = '{"software_company":[{"indianic":[{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}]}]}] }';
$data = json_decode($json); 

foreach($data as $key=> $value){

	foreach($value as $key1=> $value1){

		foreach($value1 as $key2=> $value2){

			foreach($value2 as $key3=> $value3){
				//print_r($value3);

				foreach($value3 as $key4=> $value4){

					foreach($value4 as $key5=> $value5){

						print_r($value5->{'dep-1'});
						echo "</br>";
						print_r($value5->{'dep-2'});
						echo "</br>";
						print_r($value5->{'dep-3'});

						

					}
				}
			}
		}

	}
	// }
}
echo "<pre>"; 

print_r($data);
?>

