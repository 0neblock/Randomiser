<?php
header("Content-Type: application/json");
    if(isset($_GET['data'])){
        $data = json_decode($_GET['data']);
        $data = (array)$data;
        $numOptions = sizeof($data["options"]);
        $result = array("status" => "OK", "numOptions" => $numOptions);
        array_push($result, array("result" => "sweg"));
        echo json_encode($result);
    } else {
    
        echo json_encode(array("status" => "ERROR"));
    }

?>