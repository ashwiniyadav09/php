<?php
global $user;
echo "<pre>";
print_r($user);
foreach($user as $key=>$value){
  //echo $value;
  if($key=='roles'){
    //echo 'test';
  foreach($value as $key1=>$value1){
   // print_r($value1);
    if($key1=='5'){
      //echo 'test';
      $user->roles[$key1] = "sadsf";
    }
  }
  }

}
print_r($user);

exit;

