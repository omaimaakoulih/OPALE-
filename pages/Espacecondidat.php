<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./condidatEspace.css">
    <title>Espace Condidat</title>
    <style>

    body{   /*
            background-image: url("../assets/images/Cream\ and\ Green\ Geometric\ Background\ \(6\).png");
            background-repeat: no-repeat;
            background-size: cover;
            */
            min-width: 745px;
            background-color:#F8F9FD;
    }
        header .links a:hover{
    color:white;
    background-color: #3B6064;
    border:0px black groove;
    text-align: center;
    padding: 5px;
    border-radius: 2rem;
     }
     .choix .text a{
    text-decoration: none;
    border:0px black groove;
    border-radius: 1rem;
    width:20px;
    height:300px;
    padding: 10px;
    background-color: #3B6064;
    color:white;
     }
     .choix .text h1{
         color:#AABF7E;
     }
     .choix .text h1:hover{
         color:#3B6064;
         transition:2s;
     }
     .etapes h1{
    text-decoration: underline;
    color: #3B6064;
    font-size: 27px;
    }
    .cartes .carte span{
    color:#3B6064;
    font-size: x-large;
    }
    .choix{
    display: flex;
    flex-direction: row;
    flex-wrap:wrap;
    justify-content:center;
    align-items:center;
    width:100%;
    height:340px;
    margin-bottom:30px;
} 
.choix .text{
    position:relative;
    width:45%;
    height:300px;
    border-radius:2rem;
}
header .links{
    width:50%;
}

    </style>
</head>
<body>
    <div class="topcontainer">
    <div class="container" style="position: relative; bottom: 20px;">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" src="../assets/logo/Opal (2).png" style="width:100px; height:100px; position:relative; bottom:5px;"><use xlink:href="../assets/logo/Opal (1).png"/></svg>
              </a>
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="landing.html" class="nav-link px-2 link-dark">Landing page</a></li>
                <li><a href="http://localhost/Opale/pages/Espacecondidat.php" class="nav-link px-2 link-secondary">Espace sondidat</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
              </ul>
        
              <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='http://localhost/Opale/pages/loginpages.html'" style="background-color:#3B6064; color:white;">Login</button>
              </div>
            </header>
          </div>
          <div class="choix" style="position:relative; top:50px; left:30px;">
            <div class="text" style="min-width:350px;">
                <div>
                <h1>OPAL</h1>
                <p>Plus de <span>1000</span> employés dans notre entreprise. <br /> <br/>
                Si vous étes à la recherche d'un emploi, <br/>vous pouvez poustuler auprés de notre entreprise <span>OPAL</span> en accédent à ce lien : </p>
                </div>
                <div>
                    <a href="./poserCV.php">Poser votre CV</a>
                </div>

            </div>
            <div class="image" style="min-width:390px; height:300px;">
                <img src="../assets/logo/Work time-pana.svg" alt="" style="height:300px; width:500px;">
            </div>
        </div>
        <div class="etapes" style="position:relative; top:30px;">
            <h1>DÉPOSER SON CV : COMMENT ÇA MARCHE ?</h1>
            <div class="cartes">
                <div class="carte">
                    <div>
                        <img src="../assets/images/413_resume.jpg" alt="">
                    </div>
                    <div class="text">Vous déposez votre CV sur <span>OPAL</span></div>
                </div>
                <div class="carte">
                    <div>
                        <img src="../assets/images/4171344.jpg" alt="">
                    </div>
                    <div class="text">Votre profil est <span>consulté</span> par les recruteurs</div>
                </div>
                <div class="carte">
                    <div>
                        <img src="../assets/logo/Interview-pana.svg" alt="">
                    </div>
                    <div class="text">Vous êtes contacté lorsque votre profil <br /> <span>correspond à un poste</span></div>
                </div>
            </div>
        </div>
        <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="landing.html" class="nav-link px-2 text-muted">Landing page</a></li>
                <li class="nav-item"><a href="RHlogin.php" class="nav-link px-2 text-muted">Login</a></li>
                <li class="nav-item"><a href="Espacecondidat.php" class="nav-link px-2 text-muted">Espace Condidat</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
              </ul>
              <p class="text-center text-muted">&copy; 2022 OPALE</p>
            </footer>
          </div>
    </div>
    
</body>
</html>