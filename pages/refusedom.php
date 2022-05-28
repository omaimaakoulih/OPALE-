<?php

if(isset($_POST['refuse'])){
    include ("connectdatabase.php");
    $id = $_GET['id'];
    $matricule = $_GET['matricule'];

    $sql = "update Opale.dommandes set status='F' where id=".$id.";";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location: RHdomandes.php?&matricule='.$matricule);

}

?>