<?php 
include("connectdatabase.php");
$matricule = $_GET['matricule'];


$nom =$_POST['nom'];
$email = $_POST['email'];
$naissdate = $_POST['naissdate'];
$poste = $_POST['poste'];
$salaire = $_POST['salaire'];
$ville = $_POST['ville'];
$situation = $_POST['situation'];
$matric = rand(10000,100000); /* l ageneration d'un matricule aleatoire */
$embdate = $_POST['embdate'];

    echo "etap1";
$sql="INSERT INTO Opale.employers (nom,email,datenaiss,poste,prix,ville,situation,emplidentifiant,datedebut,image)
                            values('$nom','$email','$naissdate','$poste',$salaire,'$ville','$situation','OPL-$matric','$embdate','employeprofil.png');";

mysqli_query($conn,$sql);
echo "etape2";
mysqli_close($conn);

header("Location: AjouterEmployers.php?&matricule=".$matricule."");



?>