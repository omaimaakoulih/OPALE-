<?php
include("connectdatabase.php");
$matricule = $_GET['matricule'];

$title = $_POST['titre'];
$contenu = $_POST['contenu'];

if(!empty($title) && !empty($contenu)){
$sql = "INSERT into Opale.annances (title,contenu) values ('$title','$contenu');";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: AnnacesRH.php?matricule=".$matricule."");
}

?>