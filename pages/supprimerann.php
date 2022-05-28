<?php
if(isset($_POST['supprimer'])){
    include ("connectdatabase.php");
    $id = $_GET['id'];
    $matricule = $_GET['matricule'];

    $sql = "delete from  Opale.annances  where id=".$id.";";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location: AnnacesRH.php?&matricule='.$matricule);
}
?>