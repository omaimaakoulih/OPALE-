<?php
if(isset($_POST['modifier'])){

    include("../connectdatabase.php");
    $matricule = $_GET['matricule'];

$image = $_POST['image'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$poste = $_POST['poste'];
$ville = $_POST['ville'];
$situation = $_POST['situation'];
$salaire = $_POST['salaire'];
$dateembouche = $_POST['dateembouche'];
if(!empty($image)){
$sql = "UPDATE Opale.employers SET  image='".$image."',nom='".$nom."',email='".$email."',poste = '".$poste."',ville='".$ville."',situation='".$situation."',prix='".$salaire."',datedebut='".$dateembouche."' where emplidentifiant='".$matricule."';";

mysqli_query($conn,$sql);
mysqli_close($conn);
}
else{
    $sql = "UPDATE Opale.employers SET  nom='".$nom."',email='".$email."',poste = '".$poste."',ville='".$ville."',situation='".$situation."',prix='".$salaire."',datedebut='".$dateembouche."' where emplidentifiant='".$matricule."';";

mysqli_query($conn,$sql);
mysqli_close($conn);
}
header("Location: employepage.php?matricule=".$matricule."");
}
?>