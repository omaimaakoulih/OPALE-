<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RHpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Espace Resources Humain</title>
    <style>
        .topcontainer{
            display: flex;
            flex-direction: column;
            align-items:center;
            width:100%;
        }
        .profilinfo{
            position:relative;
            top:20px;
        }
        .info{
            background-color:white;
            flex-direction: row;
            width:100%;
            border-radius:1rem;
        }
        .RHinfo{
            flex-direction:column;
        }
        .profilphoto{
            background-color:#F0F0F0;
            height:400px;
            width:300px;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        .container .navbar .links .a{
            color:black;
            text-decoration: none;
        }
        .container .navbar .links div{
            height:45px;
            width:60px;
        }
        .container .navbar .links{
            width:85%;
        }
        .container .navbar .links svg{
            height:32px;
        }
        .container .navbar .links .li1 a{
            color: #B8B8B8;
            text-decoration: none;
        }
        .container .navbar{
            background-color:#AABF7E;
            height:55px;
        }
        header .links a:hover{
            background-color:#3B6064;
            border:0px;
        }
        .li1 {
            background-color: #131412;
        }
        .modifybuttonRH div a{
            text-decoration:none;
            color:black;
        }
        .modifybuttonRH div{
            border:0px black groove;
            border-radius:2rem;
            width:200px;
            height:30px;
           text-align:center;
           background-color:#6AAB9C;
        }
        .modifybuttonRH div:hover{
            cursor:pointer;
        }
        .modifybuttonRH{
            margin-top:20px;
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:center;
        }
        body{
            /*
            background-image: url("../assets/images/Abstract Wallpaper With Geometric Shapes (3).png");
            background-repeat: no-repeat;
            background-size: cover;
            height: auto;
            */
            max-width:1183px;
            min-width:835px;
            background-color:#F8F9FD;
        }
        .container{
            max-width:1650px;
                }
        form{
            position: relative;
            display: flex;
            flex-direction:row;
            justify-content:center ;
            align-items: center;
            visibility:hidden;
        }
        form div{
            margin:2px;
        }
        form div label{
            font-style:italic;
            font-weight:bolder;
            margin-right:25px;
        }
        form div .nom{
        position: relative;
        right:20px;
        }
        form div input{
            position: relative;
            left:10px;
            width:300px;
            height:40px;
        }
        form #nom{
            margin-right: 10px;
            margin-left:7px;
        }
        .formvisible{
            position: relative;
            top:10px;
            display: flex;
            flex-direction:column;
            justify-content:center ;
            align-items: center;
            visibility:visible;
        }
        .topcontainermodif{
            display: flex;
            flex-direction: column;
            width:95%;
            box-shadow: 1px 0px 10px black;
            height:1100px;
            position:relative;
            left:30px;
            right:30px;
            top:20px;
            border-radius: 2rem;

        }
        .button{
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:center;
            position:relative;
            top:10px;
        }
        .button button{
            border-radius:2rem;
            width:150px;
            height:30px;
            text-align:center;
            border:0px;
            background-color:#344F1F;
            color:white;
        }
        header .links a:hover{
            color:white;
            background-color: #3B6064;
            border:0px black groove;
            text-align: center;
            padding: 5px;
            border-radius: 2rem;
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
    include ("connectdatabase.php");
     $matricule = $_GET['matricule'];
    ?>
    <div class="topcontainer">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
              <img class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" src="../assets/logo/Opal (2).png" style="width:100px; height:100px; position:relative; bottom:5px;"><use xlink:href="../assets/logo/Opal (1).png"/></svg>
            </a>
      
            
      
            <div class="col-md-3 text-end">
              <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='http://localhost/Opale/pages/RHlogout.php'" style="background-color:#3B6064; color:white;">Logout</button>
            </div>
          </header>
            <div class="container">
                <div class="navbar">
                    <div class="links">
                    <div>
                        <?php
                    echo '<a href="http://localhost/Opale/pages/RHdashboard.php?&matricule='.$matricule.'" id="dashboard" class="a" title="Dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg></a>';
                    ?>
                  </div>
                    <div>    <a href="#" id="employeers" class="a" title="Employees"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                          </svg></a>
                          <?php
                         echo '<ul class="ul">
                              <li class="li1"><a href="http://localhost/Opale/pages/employersRH.php?&matricule='.$matricule.'">La table des employés</a></li>
                              <li class="li2"><a href="http://localhost/Opale/pages/AjouterEmployers.php?&matricule='.$matricule.'" style="text-decoration:none; color:black;">Ajouter des employés</a></li>
                              <li class="li1"><a href="http://localhost/Opale/pages/RHdomandes.php?&matricule='.$matricule.'">Les dommandes</a></li>
                          </ul>';
                          ?>
                          <script>
                              document.addEventListener('DOMContentLoaded',function(){
                                  document.getElementById('employeers').onclick = function(){
                                 var dropdwn =  document.querySelector('ul');
                                 dropdwn.classList.toggle('ul-visible');
                                  }
                              })
                          </script>
                    </div>
                    <div>  
                        <?php  
                        echo '<a href="http://localhost/Opale/pages/AnnacesRH.php?&matricule='.$matricule.'" class="a" title="Annances"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
                            </svg></a>';
                            ?>
                    </div>
                    <div>
                        <?php 
                      echo '<a href="condidattable.php?&matricule='.$matricule.'" class="a" title="Condidats"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
                            <path d="M6 12v-2h3v2H6z"/>
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
                          </svg></a>';
                          ?>
                    </div>
                    <div class="selected">    
                        <a href="#" class="a" title="Profile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg></a>
                    </div>
                    </div>
                    </div>
                    <div class="RHinfo"> 
                        <div class="info">
                            <div class="profilphoto">
                                <?php 
                                
                                $sql = "SELECT * from Opale.employers;";
                                $results = $conn->query($sql);

                               
                                    
                                    $num = mysqli_num_rows($results);
                                    while($num>=1){
                                        $row = $results->fetch_assoc();
                                        if($row['emplidentifiant']==$matricule){
                    
                                    $image=$row['image'];
                                    $nom =$row['nom'];
                                    $email = $row['email'];
                                    $naissdate = $row['datenaiss'];
                                    $poste = $row['poste'];
                                    $salaire = $row['prix'];
                                    $ville = $row['ville'];
                                    $situation = $row['situation'];
                                    $matruc = $row['emplidentifiant'];
                                    $embdate = $row['datedebut'];
                               echo '<img src="../assets/images/'.$image.'" alt="Image du RH">';
                            echo '</div>
                            <div class="profilinfo"> 
                        
                                <table>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                       <td class="td1">Le nom : </td>
                                       <td>'.$nom.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">L\'adresse mail: </td>
                                        <td>'.$email.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">Matricule : </td>
                                        <td>'.$matruc.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">La poste occupé : </td>
                                        <td>'.$poste.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">Le Salaire : </td>
                                        <td>'.$salaire.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">La Date d\'embauche: </td>
                                        <td>'.$embdate.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">La ville : </td>
                                        <td>'.$ville.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">La Situation familiale : </td>
                                        <td>'.$situation.'</td>
                                    </tr>
                                    <tr>
                                        <td class="td1">La date de naissance : </td>
                                        <td>'.$embdate.'</td>
                                    </tr>
                                </table>';
                                
                            
                            echo '</div>
                        </div>
                           <div class="button">
                               <button class="modifier" onclick="modifierinfo(this);">Modifier</button>
                           </div>';
                  echo '<form action="RHinfmodify.php?matricule='.$matricule.'" method="post">
                        <div>
                            <label for="image" >Changer l\'image</label> <br />
                            <input type="file" id="image" name="image" value="'.$image.'" accept="image/png, image/jpeg"">
                        </div>
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
                        <input type="text" id="dateembouche" name="dateembouche" value="'.$embdate.'">
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
                        <label for="situation">La situation </label> <br/>
                        <input type="text" id="situation" name="situation" value="'.$situation.'">
                    </div>
                    <div>
                        <label for="datenaiss">La Date de naiss </label> <br/>
                        <input type="text" id="datenaiss" name="datenaiss" value="'.$naissdate.'">
                    </div>
                    <div> 
                        <input type="submit" id="modifier" name="modifier" value="Modifier">
                    </div>
                 </form>';
                                    }
                 $num = $num-1;
                   }
                 ?>
                    </div>
                    </div>
                    <footer class="py-3 my-4">
                        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                          <li class="nav-item"><a href="RHlogout.php" class="nav-link px-2 text-muted">Log out</a></li>
                        </ul>
                        <p class="text-center text-muted">&copy; 2022 OPALE</p>
                      </footer>
            </div>


    
</body>
</html>