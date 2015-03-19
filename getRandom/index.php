<?php
    if(isset($_POST['data'])){
        $data = json_decode($_POST['data']);
        echo json_encode($data);
    }
echo "hello grithub";
?>