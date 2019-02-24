<?php

header("Content-Type: application/json; charset=UTF-8");

include_once 'config/Database.php';
include_once 'models/Student.php';

$db = new Database();
$connection = $db->connect();
$student = new Student($connection);
$stmt = $student->returnOne($_GET['student']);
$count = $stmt->rowCount();
$output = "";

if($count > 0){

    $students = array();
    $students["body"] = array();
    $type = '';

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $p  = array(
            "id" => $id,
            "name" => $name,
            "board_name"=> $board_name,
            "grades"=>$grades,
            "average"=>$average,
            "finalresult"=>$finalresult
        );
        $type = $p['board_name'];
        array_push($students["body"], $p);
    }

    if($type=='CSM'){
        $output =  json_encode($students);
    }else{ 
        $data = array('total_stud' => 500);
        $xml_data = new SimpleXMLElement('<?xml version="1.0"?><data></data>');
        array_to_xml($students,$xml_data);
        $output =  $xml_data->asXML();
    }
} else {
    $output =  json_encode(
        array("body" => array()));
}

echo $output;

function array_to_xml( $data, $xml_data ) {
    foreach( $data as $key => $value ) {
        if( is_numeric($key) ){
            $key = 'item'.$key; 
        }
        if( is_array($value) ) {
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        } else {
            $xml_data->addChild("$key",htmlspecialchars("$value"));
        }
    }
}
?>
