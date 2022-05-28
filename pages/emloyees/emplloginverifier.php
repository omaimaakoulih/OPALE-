<?php 

if(isset($_POST['submit'])){
    include("../connectdatabase.php");

$email = $_POST['email'];
$password = $_POST['password'];
if(empty($email) || empty($password)){
    echo '
    <script>
    alert("Voyez Entrer votre email et mot de passe");
    </script>
    ';
}
else{

$sql = "SELECT * from Opale.employers where email='".$email."';";

$results = $conn->query($sql);

$row = $results->fetch_assoc();

    $vpassword = $row['emplidentifiant'];
    $vemail = $row['email'];
    $matricule=$row['emplidentifiant'];

    if($email === $vemail && $password === $vpassword){
        header("Location: employepage.php?matricule=".$matricule."");
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