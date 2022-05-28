<?php
    $cv=$_GET['cvfile'];
    $file="C:/MAMP/htdocs/Opale/pages/cvs/$cv";
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=".$file);
    header("Content-Transfer-Encoding: binary");
    header("Aaccept-Ranges: bytes");
    @readfile($file);
?>