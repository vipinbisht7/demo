<?php

function dump($array, $die=false)
{
	echo "<pre>"; print_r($array); echo "</pre>";
	if($die) die;
}

function check_if_value_exists($array, $key, $value)
{
	foreach ($array as $k => $v) {
		if ($v[$key] === $value) {
			return 1;
		}
	}
	return 0;
}

function get_genders()
{
	return array('1'=>'Male', '2'=>'Female');
}

function get_training_type()
{
   $CI =&get_instance();
   $training_type=$CI->common_model->commonDataFunctionFetch('ref_training_type',array(),$where = "", $notablejoin = "", $conditionstr = "", $group_or_orderon="",array('training_type'=>"asc"));   
   return $training_type;
}



function get_training_category()
{
   $CI =&get_instance();
   $training_type=$CI->common_model->commonDataFunctionFetch('ref_training_category',array(),$where = "", $notablejoin = "", $conditionstr = "", $group_or_orderon="",array('category_name'=>"asc"));   
   return $training_type;
}

function get_training_institute()
{
   $CI =&get_instance();
   $training_type=$CI->common_model->commonDataFunctionFetch('ref_training_institute',array(),$where = "", $notablejoin = "", $conditionstr = "", $group_or_orderon="",array('training_institute_name'=>"asc"));   
   return $training_type;
}

function training_institute($var)
{
   $CI =&get_instance();
   $training_type=$CI->common_model->commonDataFunctionFetch('ref_training_institute',array(),array('id'=>$var));   
   return $training_type;
}



function date_formatter($var)
{
	$tms_date=explode("-", $var);
    $tms_date = $tms_date[2] . '-' . $tms_date[1] . '-' . $tms_date[0];
	return $tms_date;
}


function generateRandomString($length = 6) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//get District Name
function districtname($dist)
{ 
   $CI =&get_instance();
   $dist_name=$CI->common_model->commonDataFunctionFetch('ref_district',array('district_name'),array('id'=>$dist));
   $dist_name=$dist_name[0]['district_name'];
   return $dist_name;
}

//get State Name
function statename($stat)
{
	$state_name=$stat;
   $CI =&get_instance();
   $s_name=$CI->common_model->commonDataFunctionFetch('ref_state',array('state_name'),array('id'=>$stat));
   $s_name=$s_name[0]['state_name'];
   return $s_name;
}

function now()
{
    $date = new DateTime();
    $date = $date->format('Y-m-d H:i:s');
    return $date;
}