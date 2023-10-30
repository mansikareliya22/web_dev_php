<?php
	$person=array(array("name"=>"mansi","age"=>"21","email"=>"manc1@.com",),
	array("name"=>"vishakha","age"=>"22","email"=>"visu2@.com",),
	array("name"=>"mitali","age"=>"23","email"=>"mitu1@.com",),);
	$age=array_column($person,"age");
	print_r($age);
?>