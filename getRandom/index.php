<?php
    if(isset($_GET['data'])){
        $data = json_decode($_GET['data']);
        print_r($data);
       // $numOptions = sizeof($data["options"]);
       // echo $numOptions;
        echo json_encode($data);
    }

?>