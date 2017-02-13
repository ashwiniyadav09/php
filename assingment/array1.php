<?php
//$node = serialize($data);
$data = new stdclass;
$data->uid = 456;
$data->name = 'ashwini';
$data->pass = '$S$DtUolo/.MmrIqEBbAjPEzofQhwuxTdUtJVoXuXelYMVP2MVAz9eE';
$data->mail = 'ash.yadav@gmail.com';
$data->theme = "";
$data->signature = "";
$data->signature_format ='filtered_html';
$data->created = 6778899;
$data->access = 7687987898;
$data->login = 7687979;
$data->status = 1;
$data->timezone = "";
$data->language = "";
$data->picture = 0;
$data->init = 'ash.yadav@indianic.com';
$data->data['ckeditor_default'] = "t";
$data->data['ckeditor_show_toggle'] ='100%';
$data->data['ckeditor_width'] = "en";
$data->data['ckeditor_lang'] = "t";
$data->data['ckeditor_auto_lang'] = "t";
$data->sid = 'ZA_zQpOcObHgS7mF2xOM_58TffSCE_TcxuTqwT70p6w';
$data->ssid = "";
$data->hostname = '127.0.0.1';
$data->timestamp = 567868787;
$data->cache = 0;
$data->session = serialize($data);
$data->roles[2] = "authenticated user";
$data->roles[5] = "pe";

// foreach($data as $key=>$value){
// 	if($key=='roles'){
// 		echo "<pre>";
// 		print_r($value['2']);
// 		echo "</br>";
// 		print_r($value['5']);
// 		echo "</br>";

// 	}
// }

echo "<pre>";
print $data->login;
echo "</br>";

print_r($data);
?>