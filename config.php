<?php

    spl_autoload_register(function ($nameclass){
        $dirClass = "class";
        $filename = $dirClass . DIRECTORY_SEPARATOR . $nameclass . ".php"; //é descrito tb como filepath

        

        if (file_exists($filename)) {
            require_once($filename);
        }
    });

?>