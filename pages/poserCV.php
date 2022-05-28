<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="poserCV.css">
    <style>
        body{
            background-image: url("../assets/images/Abstract\ Pastel\ Background\ \(2\).png");
            background-repeat: no-repeat;
            background-size: cover;
            background-color:#F8F9FD;
      }
      form input{
   border-radius: 0.4rem;
   border: 1px black groove;
   height:40px;
   width:300px;
  }
  .formclass{
      position:relative;
      left:25px;
      display:flex;
      flex-direction:row;
      flex-wrap:wrap;
      justify-content:center;
      align-items:center;
      box-shadow:1px 1px 20px black;
      border-radius: 2rem;
      height:auto;
      width:95%;

  }
  form{
    height:600px;
    position:relative;
    left:-10px;
    width:80%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    border-radius: 0rem;
    box-shadow:0px 0px 0px black;
  }
  form .nameflex{
      display:flex;
      flex-direction:row;
      flex-wrap:wrap;
  }
  form .nameflex input{
      margin:5px;
  }
  header .links{
    width:60%;
  }
    </style>
    <title>Disposer le CV</title>
</head>
<body>
    <div class="topcontainer">
    <div class="container" style="position: relative; bottom: 20px; margin-bottom:63px;">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" src="../assets/logo/Opal (1).png" style="width:100px; height:100px; position:relative; bottom:5px;"><use xlink:href="../assets/logo/Opal (1).png"/></svg>
              </a>
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="landing.html" class="nav-link px-2 link-dark">Landing page</a></li>
                <li><a href="http://localhost/Opale/pages/Espacecondidat.php" class="nav-link px-2 link-dark">Espace sondidat</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
              </ul>
        
              <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='http://localhost/Opale/pages/RHlogin.php'" style="background-color:#3B6064; color:white;">Login</button>
              </div>
            </header>
          </div>
        <div class="formclass">
        <form method="post" action="sendedCv.php" enctype="multipart/form-data">
            <div class="name">
            <div class="nameflex">
                <input type="text" name="Fname" id="Fname" placeholder="le nom">
                <input type="text" name="Sname" id="Sname" placeholder="Le prenom">
            </div>
            </div>
            <div clas=sposition>
                <label for="position">La position rechercher</label> <br>
                <input type="text" id="position" name="position" placeholder="La position">
            </div>
            <div class="applicationdate">
                <label for="">La date d'application</label> <br>
                <input type="text" name="applicationdate" id="applicationdate">
            </div>
            <div class="email">
                <label for="email">Email</label> <br>
                <input type="email" id="email" name="email" placeholder="email">
            </div>
            <div class="tele">
                <label for="tele">Num de telephone</label> <br>
                <input type="text" id="tele" name="tele" placeholder="Num tele">
            </div>
            <div class="adresse">
                <label for="adresee">Adresse</label> <br>
                <input type="text" id="adresse" name="adresse" placeholder="Adresse">
            </div>
            <div class="datenaiss">
                <label for="datenaiss"> Date de naissance </label> <br>
                <input type="text" name="datenaiss" id="datenaiss">
            </div>
            <div class="cv">
                <label for="cv">CV du condidateur</label> <br>
                <input type="file" id="cv" name="cv">
            </div>
            <div>
            <input type="submit" id="submit" name="submit" value="submit">
            </div>
        </form>
         </div>
        <div class="footer">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="./landing.html" class="nav-link px-2 text-muted">Landing page</a></li>
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