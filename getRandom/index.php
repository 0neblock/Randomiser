<?php
    if(isset($_GET['data'])){
        $data = json_decode($_GET['data']);
        echo json_encode($data);
    }

?>