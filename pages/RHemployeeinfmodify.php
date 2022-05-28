<?php
include "connectdatabase.php";

$matricule = $_GET['matruc'];
$RHmatricule = $_GET['matricule'];


$nom = $_POST['nom'];
$email = $_POST['email'];
$poste = $_POST['poste'];
$ville = $_POST['ville'];
$situation = $_POST['situation'];
$salaire = $_POST['salaire'];
$dateembouche = $_POST['dateembouche'];

$sql = "UPDATE Opale.employers SET nom='".$nom."',email='".$email."',poste = '".$poste."',ville='".$ville."',situation='".$situation."',prix='".$salaire."',datedebut='".$dateembouche."' where emplidentifiant='".$matricule."';";

mysqli_query($conn,$sql);
mysqli_close($conn);

header("Location: employeinfoRH.php?matruc=".$matricule."& matricule=".$RHmatricule."");
?>