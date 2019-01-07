<?php
require("classes/Database.php");
require("classes/Submit.php");
require("classes/SubmitData.php");	
require("classes/Mapper.php"); 

function cleanString($data)
{
	$data = trim($data);
	$data = strip_tags($data);
	$data = htmlspecialchars($data, ENT_QUOTES | ENT_HTML5, 'UTF-8');
	return $data;
}

//create object to write the top info of the form
$submit = new Submit(array("date" => date('Y-m-d H:i:s')));
$formId = $submit->getId();

//create object for every field submitted to the database
foreach($_POST as $key => $value)
{
  $data = [];
  $data["name"]= $key;
  $data["value"]= cleanString($value);   
  $data["formId"] =$formId;
  $submitdata = new SubmitData($data);
}

?>