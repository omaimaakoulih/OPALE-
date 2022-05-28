<?php 
if(isset($_POST['submit']) && isset($_FILES['cv'])){
        include "connectdatabase.php";

        $Fname=$_POST['Fname'];
        $Sname=$_POST['Sname'];
        $position = $_POST['position'];
        $applicationdate = $_POST['applicationdate'];
        $email = $_POST['email'];
        $tele = $_POST['tele'];
        $adresse = $_POST['adresse'];
        $datenaiss = $_POST['datenaiss'];
        $file_name = $_FILES['cv']['name'];
        $file_size = $_FILES['cv']['size'];
        $tmp_name = $_FILES['cv']['tmp_name'];
        $error = $_FILES['cv']['error'];

        if($error===0){
            if(!empty($Fname) && !empty($Sname) && !empty($position) && !empty($applicationdate) && !empty($email) && !empty($tele) && !empty($adresse) && !empty($datenaiss)){
                if ($file_size > 1250000000) {
                    $em = "Sorry, your file is too large.";
                    header("Location: poserCV.php?error=$em");
                }
                else{
                    $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
                    $file_ex_lc = strtolower($file_ex);

                    $allowed_exs = array("pdf", "jpeg", "png");
                    if(in_array($file_ex_lc, $allowed_exs)){
                        $new_file_name = uniqid("file-", true).'.'.$file_ex_lc;
                        $fileDestination="cvs/".$new_file_name;
                        move_uploaded_file($tmp_name,$fileDestination);
                        // Insert into Database
                        $sql = "INSERT INTO condidats (Firstname,Secondname,Appdata,email,tele,Adresse,nasdata,cv,position,etat)
                         values ('$Fname','$Sname',STR_TO_DATE('$applicationdate','%d/%m/%Y'),'$email','$tele','$adresse',STR_TO_DATE('$datenaiss','%d/%m/%Y') ,'$new_file_name','$position','wait')";
                        mysqli_query($conn, $sql);
                    }
                    header("Location: sendedcondid.php?");
                }
            }
        }else {
            $em = "unknown error occurred!";
            header("Location: poserCV.php?error=$em"); 
        }

}else{
    header("Location: poserCV.php,error=unknown error last");
}           
?>