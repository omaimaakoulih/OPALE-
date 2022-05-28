<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <title>Dashboard</title>
    <style>
        .contenu .header{
            height:90px;
        }
        .sidebare .links div svg {
            width: 100%;
            height: 40px;
        }
    </style>
</head>
<body>
<?php
    include('../connectdatabase.php');
    $matricule = $_GET['matricule'];
    ?>
    <div class="topcontainer">
        <div class="sidebare" style="height:630px; top:-30px;">
            <div class="logo">
                <img src="../../assets/logo/Opal (1).png" alt="OPAL">
            </div>
            <div class="links">
                <div class="selected">
                    <a href="#" title="Dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                    </svg></a>
                </div>
                <div>
                <?php
                    echo '<a href="./employepage.php?matricule='.$matricule.'" title="Profile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg></a>';
                      ?>
                </div>
                <div>
                <?php
                    echo '<a href="./Annancespage.php?matricule='.$matricule.'" title="les annances"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-11zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25.222 25.222 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56V3.224zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009a68.14 68.14 0 0 1 .496.008 64 64 0 0 1 1.51.048zm1.39 1.081c.285.021.569.047.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a65.81 65.81 0 0 1 1.692.064c.327.017.65.037.966.06z"/>
                      </svg></a>';
                      ?>
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
            <div class="afterheader">
                <div class="slider">
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                
                        <div class="container">
                          <div class="carousel-caption text-start">
                            <h1>Idea</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                
                        <div class="container">
                          <div class="carousel-caption">
                            <h1>Target</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                           
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                
                        <div class="container">
                          <div class="carousel-caption text-end">
                            <h1>Achieve Goals</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  </div>
                  <div class="div">
                  <div class="hello">
                      <div class="text">
                          <h3>Hello, <strong>
                            <?php
                            $sql = "SELECT * from Opale.employers;";

                            $result = mysqli_query($conn,$sql);
                            $num = mysqli_num_rows($result);
    
                            while($num>=1){
                                $row=$result->fetch_assoc();
                            if($row['emplidentifiant']==$matricule){
                            $nom=$row['nom'];
                            echo $nom;
                            }
                            $num = $num-1;
                            }
                            ?>
                            </strong></h3>
                          <p>Have a nice day at work</p>
                      </div>
                      <div class="image">
                          <img src="../../assets/images/Work time-amico (1).svg" alt="">
                      </div>
                  </div>
                  </div>
                  <div class="divcalend">
                  <div class="calendarday" style="margin:30px; width:80%;">
                    <div class="today" style="width:300px; height:300px;">
                        <div class="today-piece  top  day" style="background-color: #AABF7E;"></div>
                        <div class="today-piece  middle  month"></div>
                        <div class="today-piece  middle  date"></div>
                        <div class="today-piece  bottom  year" style="background-color: #AABF7E;"></div>
                        </div>
                        <div class="calendar">
                            <div class="calendar-header">
                                <span class="month-picker" id="month-picker">February</span>
                                <div class="year-picker">
                                    <span class="year-change" id="prev-year">
                                        <pre><</pre>
                                    </span>
                                    <span id="year">2021</span>
                                    <span class="year-change" id="next-year">
                                        <pre>></pre>
                                    </span>
                                </div>
                            </div>
                            <div class="calendar-body">
                                <div class="calendar-week-day">
                                    <div>Sun</div>
                                    <div>Mon</div>
                                    <div>Tue</div>
                                    <div>Wed</div>
                                    <div>Thu</div>
                                    <div>Fri</div>
                                    <div>Sat</div>
                                </div>
                                <div class="calendar-days"></div>
                            </div>
                            <div class="calendar-footer">
                                <div class="toggle">
                                    <div class="dark-mode-switch">
                                        <div class="dark-mode-switch-ident"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="month-list"></div>
                        </div>
                  </div>
               </div>
            </div>
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                  <li class="nav-item"><a href="./logoutempl.php" class="nav-link px-2 text-muted">Logout</a></li>
                </ul>
                <p class="text-center text-muted">&copy; 2022 OPALE</p>
              </footer>
            </div>
            </div>
        </div>
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/popper.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/main.js"></script>
  <script src="../../assets/js/app.js"></script>
        </body>
        </html>


        <!-- body background color: #f8f9fd-->