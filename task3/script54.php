<?php
	$student=array(array("id"=>"1","name"=>"mansi","surname"=>"kareliya",)
	,array("id"=>"2","name"=>"vishakha","surname"=>"pandya",)
	,array("id"=>"3","name"=>"mitali","surname"=>"rathod"));
	$result=array_column($student,"name");
	print_r($result);

?>