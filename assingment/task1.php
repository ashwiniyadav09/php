<?php
$node = new stdclass;
$node->college['name'] = 'c.i.t';
$node->college['university'] = 'csvtu'; 
$node->college['degree'] = 'btech';
$node->college['location'] = 'ahemdabad';

$node->subjects['sub-1'] = "data structure";
$node->subjects['sub-2'] = "java";
$node->subjects['sub-3'] = "c";
$node->subjects['sub-4'] ="c++";

$node->students['student-1']['name'] = 'ashwini';
$node->students['student-1']['age'] = '22';
$node->students['student-1']['roll'] = '34555';
$node->students['student-1']['branch'] = 'cse';

$node->students['student-2']['name'] = 'kunal';
$node->students['student-2']['age'] = '29';
$node->students['student-2']['roll'] = '3455';
$node->students['student-2']['branch'] = 'civil';

$node->students['student-3']['name'] = 'naziya';
$node->students['student-3']['age'] = '25';
$node->students['student-3']['roll'] = '34556';
$node->students['student-3']['branch'] = 'mech';

$node->students['student-4']['name'] = 'fhgsfh';
$node->students['student-4']['age'] = '25';
$node->students['student-4']['roll'] = '34556';
$node->students['student-4']['branch'] = 'mgfh';


$data = array();
$data['pos-1']= '1st';
$data['pos-2']= '2nd';
$data['pos-3']= '3rd';
$data['pos-4']= '4th';

foreach($node as $key=>$value){
	$node->position = $data;
}

$data1 = array();
$data1['marks-1']= '34';
$data1['marks-2']= '56';
$data1['marks-3']= '76';

$data1['marks_review']= array();
$data1['marks_review']['science'] = '78';
$data1['marks_review']['maths'] = '65';
$data1['marks_review']['physics'] = '67';
$data1['marks_review']['chemistry'] = '33';

foreach($node as $key=>$value){
	$node->marks = $data1;
}


echo "<pre>";
print_r($node);
?>