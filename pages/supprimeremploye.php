<?php
include "connectdatabase.php";

$matricule = $_GET['matruc'];
$RHmatricule = $_GET['matricule'];

$sql="DELETE FROM Opale.employers where emplidentifiant='$matricule';";

mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: employersRH.php?matricule=".$RHmatricule."");
?>