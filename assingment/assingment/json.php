<?php
$json = '{"school":"h.s.m public school",
"class":[{"class-1":[{"student":[{"name":"ashwini","age":"22","subject":"maths","marks":"34" },{"name":"jigaa","age":"22","subject":"maths","marks":"45" },{"name":"shruti","age":"22","subject":"physics","marks":"67" }] }],
"class-2":[{"student":[{"name":"ashwini","age":"22","subject":"maths","marks":"34" },{"name":"kunal","age":"28","subject":"science","marks":"0" },{"name":"naziya","age":"22","subject":"maths","marks":"34" }] }], 
"class-3":[{"student":[{"name":"nikki","age":"22","subject":"geography","marks":"43" },{"name":"shraddha","age":"22","subject":"bio","marks":"87" },{"nikki":"naziya","age":"22","subject":"chemistry","marks":"87" }] }],
"class-4":[{"student":[{"name":"ayush","age":"24","subject":"bio","marks":"34" },{"name":"shri","age":"25","subject":"sanskrit","marks":"34" },{"name":"joy","age":"22","subject":"english","marks":"34" },{"name":"rajesh","age":"22","subject":"physics","marks":"54" }] }],
"class-5":[{"student":[{"name":"kamal","age":"28","subject":"science","marks":"34" },{"name":"astitva","age":"38","subject":"social","marks":"34" },{"name":"kunal","age":"54","subject":"bio","marks":"76" },{"name":"kunaldosi","age":"29","subject":"science","marks":"67" }] }],
"class-6":[{"student":[{"name":"manvi","age":"28","subject":"maths","marks":"34" },{"name":"mani","age":"28","subject":"maths","marks":"34" },{"name":"manish","age":"24","subject":"p.e","marks":"09" },{"name":"manisha","age":"21","subject":"maths","marks":"87" }] }]
}]  }';
echo "<pre>";
print_r(json_decode($json));

?>
