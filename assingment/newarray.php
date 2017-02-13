<?php
$node = new stdclass;
$node->software_company['company'] = 'indianic';
$node->software_company[0]['Department'] = 'web';
$node->software_company[0]['Employee']['name'] = 'ashwini';
$node->software_company[0]['Employee']['age'] = '22';
$node->software_company[0]['Employee']['tech'] = 'drupal';
$node->software_company[0]['Employee']['contact'] = '343546';

$node->software_company[1]['Department1'] = 'ios';
$node->software_company[1]['Employee1']['name'] = 'ashwini';
$node->software_company[1]['Employee1']['age'] = '22';
$node->software_company[1]['Employee1']['tech'] = 'drupal';
$node->software_company[1]['Employee1']['contact'] = '343546';

$node->software_company[2]['Department2'] = 'ios';
$node->software_company[2]['Employee2']['name'] = 'ashwini';
$node->software_company[2]['Employee2']['age'] = '22';
$node->software_company[2]['Employee2']['tech'] = 'drupal';
$node->software_company[2]['Employee2']['contact'] = '343546';

 $data = array();
   $data['Department3'] = 'ios';
   $data['Employee3']['name'] = 'ashwini';
   $data['Employee3']['age'] = '22';
   $data['Employee3']['tech'] = 'drupal';
   $data['Employee3']['contact'] = '343546';
   echo "<pre>";
// print_r($data);
  foreach($node as $key=>$value){
  $node->software_company[3] = $data;
  }

$node->details = serialize($node);









echo "<pre>";
print_r($node);
?>