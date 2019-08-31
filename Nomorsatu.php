<?php

function biodata($name,$age,$address,$hobbies,$is_married,$list_school,$skills,$interest_in_coding){
	$data = new \stdClass();
	$data->name = "Ubaid Alfian Wildy";
	$data->age = 23;
	$data->address = "Bogor jawa Barat";
	$data->hobbies = ["berkuda","berenang","salto"];
	$data->is_married = false;
	$data->list_school = [
		"Name" => "Politeknik Negeri Jakarta",
		"year_in" => "2014",
		"year_out" => "2018",
		"major" => "Computer and Informatics Engineering"
	];
	$data->skills = [
		"skill_name" => "HTML and CSS",
		"level" => "beginner"
		
	];
	$data->interest_in_coding = true;
	// $data->is_married = false;
	$datas = json_encode($data);
	return $datas;
}

echo biodata("name","age","address","hobbies","is_married","list_school","skills","interest_in_coding");





