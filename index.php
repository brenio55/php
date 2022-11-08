<?php 
    require('config.php');


    $link = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Google_Images_2015_logo.svg/640px-Google_Images_2015_logo.svg.png";
    $content = file_get_contents($link);

    $parse = parse_url($link);

    $basename = basename($parse['path']); //retorna o nome do index numa URL.

    $file = fopen($basename, "w+");
    fwrite($file, $content);
    fclose($file);

?>

<img src="<?=$basename?>" alt="" />
