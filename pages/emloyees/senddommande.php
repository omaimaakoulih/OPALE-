<?php
include("../connectdatabase.php");
$matricule = $_GET['matricule'];

if(isset($_POST['submit'])){
$periode =$_POST['period'];
$datedebut=$_POST['datedeb'];
$datefin=$_POST['datefin'];
$type = $_POST['type'];

$sql1 = "SELECT * from Opale.employers where emplidentifiant='".$matricule."';";
$results = $conn->query($sql1);

$row = $results->fetch_assoc();
$nom = $row['nom'];

$sql ="INSERT into Opale.dommandes (period,datedeb,datefin,type,empname,matricule) values ('".$periode."','".$datedebut."','".$datefin."','".$type."','".$nom."','".$matricule."');";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("Location: dommandes.php?matricule=".$matricule."");
}

?>