<?php
include "connectdatabase.php";
echo "OK";
$RHmatricule = $_GET['matricule'];
echo $RHmatricule;
if(isset($_POST['modifier'])){
    echo "OK if";
$image=$_POST['image'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$poste = $_POST['poste'];
$ville = $_POST['ville'];
$situation = $_POST['situation'];
$salaire = $_POST['salaire'];
$dateembouche = $_POST['dateembouche'];
$datenaiss = $_POST['datenaiss'];
if(!empty($image)){
    $sql = "UPDATE Opale.employers SET  image='".$image."',nom='".$nom."',email='".$email."',poste = '".$poste."',ville='".$ville."',situation='".$situation."',prix='".$salaire."',datedebut='".$dateembouche."',datenaiss='".$datenaiss."' where emplidentifiant='".$RHmatricule."';";
    echo $sql;
mysqli_query($conn,$sql);
mysqli_close($conn);
}
else{
$sql = "UPDATE Opale.employers SET nom='".$nom."',email='".$email."',poste = '".$poste."',ville='".$ville."',situation='".$situation."',prix='".$salaire."',datedebut='".$dateembouche."',datenaiss='".$datenaiss."' where emplidentifiant='".$RHmatricule."';";
echo $sql;
mysqli_query($conn,$sql);
mysqli_close($conn);
}
}
header("Location: RHpage.php?matricule=".$RHmatricule."");

?>