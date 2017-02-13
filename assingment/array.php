<?php
echo "kunal";
$node = new stdclass;
$node->vid =146942;
$node->uid =1;
$node->title ='General article skin';
$node->log = "";
$node->status =1;
$node->comment =1;
$node->promote =0;
$node->sticky =0;
$node->nid =146942;
$node->type ='pe_health_article';
$node->language ='und';
$node->created =1459929563;
$node->changed =1463481679;
$node->tnid =0;
$node->translate =0;
$node->revision_timestamp =1463481679;
$node->revision_uid =0;
$node->body['und'][0]['value'] = 'skin General article
skin General article
skin General article
skin General article
skinGeneral article
skin General article 
skin General article
skinGeneral article
skin General article
skin General article
skinGeneral article
skin General article
skin General article
skinGeneral article
skin General article
skin General article';
$node->summary ="";
$node->summary['format'] = 'filtered_html' ;
$node->summary['safe_value'] ='General article skin
General article skin
General article skin
General article skin
General article skin
General article skin
General article skin
General article skin
General article skin
General article skin
General article skin
General article skin';

$node->field_pe_shoot['field_image']['und']['0']['fid'] = 233;
$node->field_pe_shoot['field_image']['und']['0']['nid'] = 233;
$node->field_pe_shoot['field_image']['und']['0']['filename'] ='influenza_3.jpeg ';
$node->field_pe_shoot['field_image']['und']['0']['uri'] = 'public:influenza_3_1.jpeg';
$node->field_pe_shoot['field_image']['und']['0']['filemime'] = 'image/jpeg';
$node->field_pe_shoot['field_image']['und']['0']['filesize'] = 8500;
$node->field_pe_shoot['field_image']['und']['0']['status'] =1;
$node->field_pe_shoot['field_image']['und']['0']['timestamp'] =1459929563;
$node->field_pe_shoot['field_image']['und']['0']['rdf_mapping'][] = "";

$node->field_image['und']['0']['alt'] ="";
$node->field_image['und']['0']['title'] ="";
$node->field_image['und']['0']['width'] =34;
$node->field_image['und']['0']['height'] =243;

$node->field_pe_attribute_ids['und']['0']['tid'] = 324;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term'] = new stdclass;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->nid = 45;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->vid = 45; 
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->name = 'kunal'; 
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->description = 'gdfgs'; 
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->format = "";
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->weight = 0;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->vocabulary_machine_name = "article_attributes";
$node->field_pe_attribute_ids['und']['0']['field_pe_internal_attribute_id'][] = "";
$node->field_pe_attribute_ids['und']['0']['field_cat_image'][] = "";
$node->field_pe_attribute_ids['und']['0']['rdf_mapping']['rdftype']['0'][] = " skos:Concept";
$node->field_pe_attribute_ids['und']['0']['name']['predicates']['0'] = "qeewq";
$node->field_pe_attribute_ids['und']['0']['name']['predicates']['1'] = "asass";
$node->field_pe_attribute_ids['und']['0']['description']['predicates']['0'] = "asass";
$node->field_pe_attribute_ids['und']['0']['vid']['predicates']['0'] = "asass";
$node->field_pe_attribute_ids['und']['0']['type'] = "rel";
$node->field_pe_attribute_ids['und']['0']['parent']['predicates']['0'] = "asass";
$node->field_pe_attribute_ids['und']['0']['type'] = "rel";


echo "<pre>";
// print_r($node);
// print $node->body['und']['0']['value']
foreach($node as $key=>$value){
	if ($key=='body'){
		print_r($value);
		echo "</br>";
		break;	
		
	}
	

}


echo "<pre>";
print_r($node);

?>







