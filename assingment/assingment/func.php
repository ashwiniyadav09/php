<?php
function ash($fname,$lname){
	$array = array();
	$array['fname'] = 'ashwini';
	$array['lname'] = '12';
	
	 $array['company']['company-1']= 'indianic';
	 $array['company']['company-2']= 'tcs';
	 $array['company']['company-3']= 'kpit';
	 $array['company']['company-4']= 'sterlite';

	 $array['employee']['name-1']= 'ashwini';
	 $array['employee']['name-2']= 'naziya';
	 $array['employee']['name-3']= 'shruti';
	 $array['employee']['name-4']= 'manisha';

	 $array['technology']['tech-1']= 'drupal';
	 $array['technology']['tech-2']= 'wordpress';
	 $array['technology']['tech-3']= 'mvc';
	 $array['technology']['tech-4']= 'magento';

	 $array['department']['dep-1']= 'design';
	 $array['department']['dep-2']= 'mobile';
	 $array['department']['dep-3']= 'web';
     $array['department']['dep-4']= 'sales';

	

	return $array;
}
$getdata = ash('naziya','abbasi');

echo "<pre>";
print_r($getdata); 
?>

