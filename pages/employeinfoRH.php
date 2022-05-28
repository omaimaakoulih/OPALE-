<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./employeinfoRH.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>page d'un employé</title>
    <style>
        .buttons{
            width:25%;
        }
        form div input{
            width:300px;
        }
        .magepartie .image img{
            border-radius:3rem;
        }
    </style>
    <script>
        function modifierinfo(element){
            var modifier = document.querySelector('form');
            modifier.classList.toggle('formvisible');
            var container = document.getElementById('conatainer');
            container.classList.toggle('topcontainermodif');

        }
    </script>
</head>
<body>
    <?php 
    session_start();
    $matricule = $_GET['matruc'];
    $RHmatricule = $_GET['matricule'];
    ?>
    <div class="topcontainer" id="conatainer">
        <header>
            <div>
                <?php
            echo '<a href="employersRH.php?matruc='.$matricule.'& matricule='.$RHmatricule.'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg></a>';
              ?>
            </div>  
        </header>
        <div class="infos">
            <div class="magepartie">
            <div class="image">
                <?php
                   include "connectdatabase.php";
                     
                   $sql = "SELECT * from Opale.employers where emplidentifiant='".$matricule."';";

                   $results=$conn->query($sql);
                   $row=$results->fetch_assoc();
                   $image=$row['image'];
                   $nom = $row['nom'];
                   $email = $row['email'];
                   $datenaiss = $row['datenaiss'];
                   $poste = $row['poste'];
                   $salaire = $row['prix'];
                   $ville = $row['ville'];
                   $situation = $row['situation'];
                   $matricule = $row['emplidentifiant'];
                   $dateembouche = $row['datedebut'];

               echo '<img src="../assets/images/'.$image.'" alt="">';
                ?>
            </div>
            </div>
            <div class="infopartie">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php 

                  echo '<tr>
                        <td class="td1">Le nom  </td>
                        <td class="td2">'.$nom.'</td>
                    </tr>
                    <tr>
                        <td class="td1">L\'email  </td>
                        <td class="td2">'.$email.'</td>
                    </tr>
                    <tr>
                        <td class="td1">La date d\'embouche  </td>
                        <td class="td2">'.$dateembouche.'</td>
                    </tr>
                    <tr>
                        <td class="td1">La Poste  </td>
                        <td class="td2">'.$poste.'</td>
                    </tr>
                    <tr>
                        <td class="td1">Le salaire  </td>
                        <td class="td2">'.$salaire.'</td>
                    </tr>
                    <tr>
                        <td class="td1">Matricule  </td>
                        <td class="td2">'.$matricule.'</td>
                    </tr>
                    <tr>
                        <td class="td1">La ville  </td>
                        <td class="td2">'.$ville.'</td>
                    </tr>
                    <tr>
                        <td class="td1">La situation  </td>
                        <td class="td2">'.$situation.'</td>
                    </tr>
                    <tr>
                        <td class="td1">La date de naissance  </td>
                        <td class="td2">'.$datenaiss.'</td>
                    </tr>';
                    ?>
                </table>
            </div>
            <div class="buttons">
                    <button id="modifier" onclick="modifierinfo(this);">Modifier</button>
                <div class="supprimer">
                    <?php
                  echo  '<a href="./supprimeremploye.php?matruc='.$matricule.'& matricule='.$RHmatricule.'">Supprimer</a>';
                    ?>
                </div>
            </div>
            <?php
                  echo '<form action="RHemployeeinfmodify.php?matruc='.$matricule.'&matricule='.$RHmatricule.'" method="post">
                     <div>
                        <label for="nom" id="nom">Le nom</label> <br />
                        <input type="text" id="nom" name="nom" value="'.$nom.'">
                     </div>
                     <div>
                         <label for="email">Email </label> <br/>
                         <input type="text" id="email" name="email" value="'.$email.'">
                     </div>
                     <div>
                        <label for="dateembouche">La date d\'embouche </label> <br/>
                        <input type="text" id="dateembouche" name="dateembouche" value="'.$dateembouche.'">
                    </div>
                    <div>
                        <label for="poste">La Poste </label> <br/>
                        <input type="text" id="poste" name="poste" value="'.$poste.'">
                    </div>
                    <div>
                        <label for="salaire">Le Salaire </label><br/>
                        <input type="text" id="salaire" name="salaire" value="'.$salaire.'">
                    </div>
                    <div>
                        <label for="ville">La ville </label> <br/>
                        <input type="text" id="ville" name="ville" value="'.$ville.'">
                    </div>
                    <div>
                        <label for="email">La situation </label> <br/>
                        <input type="text" id="situation" name="situation" value="'.$situation.'">
                    </div>
                    <div> 
                        <input type="submit" id="modifier" name="modifier" value="Modifier">
                    </div>
                 </form>';
                 ?>
        </div>
    </div>

    
</body>
</html>