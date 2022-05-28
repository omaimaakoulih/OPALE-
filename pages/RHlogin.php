<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./RHlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>RH login</title>
    <style>
        header .links a:hover{
            color:white;
            background-color: #3B6064;
            border:0px black groove;
            text-align: center;
            padding: 5px;
            border-radius: 2rem;
        }
        .container .image img{
            width:400px;
            height:400px;
            position: relative;
            top:40px;
        }
        .container{
            flex-wrap:wrap;
            justify-content:center;
        }
        .container .loging{
            justify-content:center;
            align-items: center;
        }
        .container .loging form input{
            border:0.5px;
        }
        .container .loging form{
            height:300px;
        }
        .container .loging form h1{
            position:relative;
            bottom:0px;
            color:
        }

        .container .image{
            width:400px;
            height:400px;
        }
        header .links{
            width:52%;
        }
        #submit{
        position:relative;
        left:0px;
        width:180px;
}
body{
    background-color:#F8F9FD;
}
    </style>
</head>
<body>
    <div class="topcontainer">
    <div class="hcontainer" style="position: relative; bottom: 20px; margin-bottom:50px;">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap" src="../assets/logo/Opal (2).png" style="width:100px; height:100px; position:relative; bottom:5px;"><use xlink:href="../assets/logo/Opal (1).png"/></svg>
              </a>
        
              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="landing.html" class="nav-link px-2 link-dark">Landing page</a></li>
                <li><a href="http://localhost/Opale/pages/Espacecondidat.php" class="nav-link px-2 link-dark">Espace sondidat</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
              </ul>
              <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='http://localhost/Opale/pages/loginpages.html'" style="background-color:#3B6064; color:white;">Login</button>
              </div>
            </header>
          </div>
        <div class="container">
            <div class="loging">
                <form method="post" action="RHloginverifier.php">
               <div class="h1h2">
                <h1>OPAL</h1>
                <h2>RH Login</h2>
                  </div>
                    <div>
                        <label for="id">Votre ID : </label>
                        <input type="text" name="id" id="id">
                    </div>
                    <div>
                        <label for="password">Password : </label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="submit">
                        <input type="submit" name="submit" id="submit" value="Login">
                    </div>
                </form>
    
            </div>
            <div class="image">
                <img src="../assets/logo/Mobile login-rafiki.svg" alt="">
            </div>
        </div>
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="./landing.html" class="nav-link px-2 text-muted">Landing page</a></li>
              <li class="nav-item"><a href="Espacecondidat.php" class="nav-link px-2 text-muted">Espace Condidat</a></li>
              <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 OPALE</p>
          </footer>

    
</body>
</html>