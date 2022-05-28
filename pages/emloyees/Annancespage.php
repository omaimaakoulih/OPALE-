<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Annancespage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page Employé</title>
    <script>
        function modifierinfo(element){
            var modifier = document.querySelector('form');
            modifier.classList.toggle('formvisible');
            var container = document.getElementById('conatainer');
            container.classList.toggle('topcontainermodif');

        }
    </script>
    <style>
        .annavespartie table .right{
            width:200px;
            min-width:200px;
        }
        .annavespartie table .rightcol{
            width:500px;
            text-align:justify;
            max-width:700px;
            word-wrap: break-word;
        }
        .annavespartie{
            position:relative;
            top:50px;
            margin-bottom:170px;
        }
        .sidebare .links{
            height:420px;
        }
        body{
            background-image: url("../../assets/images/wave-haikei (4).svg");
            background-repeat: no-repeat;
            background-size: cover;
            height: auto;
        }
        .sidebare .logo img{
            height:90px;
            min-width:63px;
        }
        .contenu .header{
            height:90px;
        }
        .annances{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    width:75%;
    height:auto;
}
.annances .annance{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    width:90%;
    height:auto;
    border:0px black groove;
    border-radius:2rem;
    margin:10px;
    padding:10px;
    box-shadow: 0px 4px 10px black;
    background-color:rgba(255,255,255,0.5);
}
.annances .annance .contenu{
    word-wrap: break-word;
    width:85%;
}
.annances .annance:hover{
    background-color:#28262C;
    color:#C4DACF;
    cursor:pointer;
}
.annaces{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
body{
    background-color:#F8F9FD;
}
    </style>
</head>
<body>
<?php
    include("../connectdatabase.php");
    $matricule = $_GET['matricule'];
    ?>
    <div class="topcontainer">
        <div class="sidebare" style="height:640px; top:-35px;">
            <div class="logo">
                <img src="../../assets/logo/Opal (1).png" alt="OPAL" >
            </div>
            <div class="links" style="position:relative; bottom:5px;">
            <div>
                <?php
                  echo '<a href="./dashboard.php?matricule='.$matricule.'" title="Dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg></a>';
                    ?>
                </div>
                <div>
                    <?php
                    echo '<a href="./employepage.php?matricule='.$matricule.'" title="Profile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg></a>';
                      ?>
                </div>
                <div class="selected">
                    <a href="#" title="Annances"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
                      </svg></a>
                </div>
                <div>
                    <?php
                    echo '<a href="./dommandes.php?matricule='.$matricule.'" title="Les Dommandes"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                      </svg></a>';
                      ?>
                </div>
            </div>

        </div>
        <div class="contenu">
            <div class="header">
                <div>
                    <a href="./logoutempl.php">Logout</a>
                </div>
            </div>
            <div class="annaces">
            <div class="annances">
                    <?php
                    $sql1 = "select * from Opale.annances;";
                    $results1 = $conn->query($sql1);
                    $num = mysqli_num_rows($results1);
                    while($num>=1){
                        $row=$results1->fetch_assoc();
                        $titre = $row['title'];
                        $contenu = $row['contenu'];
                    echo '<div class="annance">
                    <div class="title">
                         <h4>'.$titre.'</h4>
                    </div>
                    <div class="contenu">
                        <p>'.$contenu.'</p>
                    </div>
                </div>';
                    $num = $num-1;
                    }
                    ?>
                </table>
            </div>
            </div>
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Logout</a></li>
                </ul>
                <p class="text-center text-muted">&copy; 2022 OPALE</p>
              </footer>
        </div>
        
    </div>
    </body>
    </html>