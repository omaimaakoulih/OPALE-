<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./Annancesstatus.css">
    <title>Dommandes Status</title>
</head>
<body>
<?php
    include("../connectdatabase.php");
    $matricule = $_GET['matricule'];
?>
    <div class="topcontainer" id="conatainer">
        <header>
            <div>
                <?php
              echo '<a href="dommandes.php?matricule='.$matricule.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                ?>
               <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>';
              ?>
            </div>  
        </header>
        <div class="annances">
            <div class="title">
                <h3> >La liste de votre domandes : </h3>
            </div>
            <div class="divs">
                <?php 
                $sql="select * from Opale.dommandes";
                $results = $conn->query($sql);
                    $num = mysqli_num_rows($results);
                    while($num>=1){
                        $row=$results->fetch_assoc();
                        $matriculedb=$row['matricule'];
                        if($matriculedb==$matricule){
               echo '<div class="domande">
                    <p><strong style="color: #5F7044">Date de debut :</strong> '.$row['datedeb'].'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                      </svg><strong style="color: #5F7044">Date de fin   :</strong> '.$row['datefin'].'</p>
                    <p><strong style="color: #5F7044">Durée :</strong>'.$row['period'].' jours</p>
                    <p><strong style="color: #5F7044">Type :</strong>'.$row['type'].'</p>';
                    if($row['status']=="V"){
                    echo '<p><strong style="color: #5F7044">Etat:</strong> <strong style="color:green;">Accepted</strong></p>';
                    }
                    if($row['status']=="F"){
                        echo '<p><strong style="color: #5F7044">Etat:</strong> <strong style="color:red;">Refusé</strong></p>';
                        }
                    if($row['status']==""){
                        echo '<p><strong style="color: #5F7044">Etat:</strong>En attend</p>';
                        }    
                    
                   echo  '<form action="deletedomande.php?matricule='.$matricule.'&id='.$row['id'].'" method="post">
                        <input type="submit" name="supprimer" id="supprimer" value="supprimer" style="background-color: #5F7044; border-radius:2rem; color:white;">
                    </form>
                </div>';
                        }
                $num=$num-1;
                    }
                    mysqli_close($conn);
                ?>
                
            </div>
        </div>
        </div>
    
</body>
</html>