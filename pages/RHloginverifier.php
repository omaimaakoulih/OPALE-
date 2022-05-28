<?php 


if(isset($_POST['submit'])){
include ("connectdatabase.php");

$matricule = $_POST['id'];
$password = $_POST['password'];
if(empty($matricule) || empty($password)){
    echo '
    <script>
    alert("Voyez Entrer votre email et mot de passe");
    </script>
    ';
}
else{

$sql = "SELECT * from Opale.RHinfo;";

$results = $conn->query($sql);

$row = $results->fetch_assoc();

    $vmatricule = $row['matricule'];
    $vpassword = $row['passwrd'];

    if($matricule === $vmatricule && $password === $password){
        header("Location: RHpage.php?matricule=".$matricule."");
    }
    else{
        echo '
        <script>
        alert("mot de passe ou email incorrect");
        </script>
    ';
    }
}
}
    
    ini_set('display_errors', 1);

?>