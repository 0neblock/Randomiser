<?php
    header("Content-Type: application/json");
    if(isset($_POST['data'])){
        $data = json_decode($_POST['data']);
        $data = (array)$data;
        $numOptions = sizeof($data["options"]);
        $result = array("status" => "OK", "numOptions" => $numOptions, "result" => array());
        $result["result"] = $data['options'][array_rand($data['options'])];
        echo json_encode($result);
    } else {
    
        echo json_encode(array("status" => "ERROR"));
    }

?>