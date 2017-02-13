<?php
$node = new stdclass;
$node->college = '';
$node->college = array();

$node->college[0]['name'] = 'guj. university';
$node->college[0]['location'] = 'gujrat';
$node->college[0]['degree'] = 'btech';

$node->college[1]['name'] = 'cit';
$node->college[1]['location'] = 'chhattisgarh';
$node->college[1]['degree'] = 'btech';

$node->college[2]['name'] = 'kite';
$node->college[2]['location'] = 'orissa';
$node->college[2]['degree'] = 'mtech';

$node->college[3]['name'] = 'sbcet';
$node->college[3]['location'] = 'rajasthan';
$node->college[3]['degree'] = 'M.E';

$node->college[4]['name'] = 'smu';
$node->college[4]['location'] = 'south';
$node->college[4]['degree'] = 'archeitecture';

$node->Branches = array();
$node->Branches[0]['b1'] = 'computer science';
$node->Branches[0]['b2'] = 'civil';
$node->Branches[0]['b3'] = 'electrical';
$node->Branches[0]['b4'] = 'mech';

$node->subjects = array();
$node->subjects[0]['s1'] = 'computer graphics';
$node->subjects[0]['s2'] = 'civil structure';
$node->subjects[0]['s3'] = 'circuits';
$node->subjects[0]['s4'] = 'automobiles';

//converting array into object...

$newobj = new stdclass;
foreach($node->college as $key=>$value){
	$newobj->$key = $value;
}

echo "<pre>";
print_r($newobj);
?>