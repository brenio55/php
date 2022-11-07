<form method="POST" enctype="multipart/form-data"> <!-- //este enctype irá dizer que o conteúdo dos arquivos enviados serão em binário -->

    <input type="file" name="fileUpload" id="">
    <button type="submit">Send</button>

</form>



<?php 
    require('config.php');

   if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $file = $_FILES["fileUpload"]; //ESTA VARIÁVEL SUPERGLOBAL SERVE PARA OS ARQUIVOS ENVIADOS POR UPLOAD

        if ($file["error"]){
            throw new Exception("Error: ".$file["error"]);
        }
   }

   //ao enviar arquivos, são criados diretórios temporários para os pacotes de recebimento, dentro do servidor PHP.

   //é bom que seja um diretório a parte, pois caso seja enviado um arquivo PHP ao servidor, ele pode ser executado lá dentro, quebrando a segurança.

   $dirUploads = "uploads"; 

   if (!is_dir($dirUploads)){
        mkdir($dirUploads);
   }

   if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){
    echo "Upload realizado com sucesso";
    }else{
        throw new Exception ("Não foi possível realizar o upload.");
    }

   
?>
