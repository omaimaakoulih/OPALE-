<?php
$matricule = $_GET['matricule'];
$Id = $_GET['Id'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('../phpmailer/PHPMailer.php');
require_once('../phpmailer/SMTP.php');
require_once('../phpmailer/Exception.php');
$emailsend=$_GET['email'];
$email= new PHPMailer(True);
try{    
$email->isSMTP();
$email->SMTPAuth=true;
$email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$email->Host='smtp.gmail.com';
$email->Port=465;
$email->isHTML();
$email->Username='opalestartup@gmail.com';
$email->Password='Opale-Start';
$email->SetFrom('opalestartup@gmail.com');
$email->Subject = 'Convocation';
$email->Body='Madame/Mademoiselle/Monsieur,
Votre candidature au poste de (poste) au sein de notre société a retenu toute notre attention et nous souhaiterions vous rencontrer. Nous vous proposons un entretien avec Mme/M.Skhiri said, (Respensable RH à Opale), le (date) à (heure) dans nos locaux situés au (adresse) à (ville)';
$email->Addaddress($emailsend);

$email->send();

 include("connectdatabase.php");

 $sql = "UPDATE Opale.condidats SET  etat='accept' where Id=".$Id.";";
 echo $sql;
mysqli_query($conn,$sql);
mysqli_close($conn);


header("Location:condidattable.php?&matricule=".$matricule."");
}
catch(Exception $e){
   echo "ce message ne peut pas etre envoyé";
}
?>