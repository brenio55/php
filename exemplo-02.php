<?php
    $images = scandir("images");
    // var_dump($images);
    // echo json_encode($images);

    $data = array();

    foreach($images as $img) { //array inteira | como  |array separadamente
        if (!in_array($img, array(
            '.',
            '..'
        ))){ //1 = onde estou procurando. 2 = o que estou procurando
            $filename = 'images'.DIRECTORY_SEPARATOR.$img;
            $info = pathinfo($filename);

            $info["size"] = filesize($filename);
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
            $info['url'] = "http://localhost/dir/".str_replace("\\", "/", $filename);

            array_push($data, $info);
        }
    }

    echo json_encode($data);
?>