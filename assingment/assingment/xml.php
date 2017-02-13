<?php
echo "<pre>";
$data = 
"<personal>
<school>h.s.m public school </school>
<student>childrens</student>

<info>
<name>ashwini</name>
<age>22</age>
<sub>maths</sub>
<marks>54</marks>
</info>




</personal>";

$abc= simplexml_load_string($data);
$data= json_encode($abc);
$result= json_decode($data);

print_r($result);
?>