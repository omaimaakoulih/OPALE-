<?php
include("../connectdatabase.php");
$matricule = $_GET['matricule'];
$id=$_GET['id'];
if(isset($_POST['supprimer'])){
    $sql="delete From Opale.dommandes where matricule='".$matricule."' and id='".$id."';";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("Location: domandesstatus.php?matricule=".$matricule."");
}
?>