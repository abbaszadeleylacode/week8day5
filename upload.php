<?php
$name = $_POST["name"];
$location = $_POST["location"];
   if (!empty($name)&&!empty($location)) {
      $Files = fopen("uploadedfile.txt","a+");
      $target_dir = "uploads/";
         $target_file = date('dmYGis'). basename($_FILES["Photo"]["name"]);
            move_uploaded_file($_FILES["Photo"]["tmp_name"],"uploads/".$target_file);
      $txt = $name."|".$location."|".$targetdir.$target_file ."@@_+_@@";
         fwrite($Files, $txt);
            fclose($Files);
         header("Location:index.php");
     }
      header("Location:index.php");
 ?>