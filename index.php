<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./java.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7Isco$score1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css?v=<?php echo time(); ?>">

    <title>Qatar Word Cup Simulator</title>
</head>

<body>
<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="./img/logo.png  " alt="FIFA WORD CUP QATAR 2022 LOGO" width="250" style="margin: 2%;"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
          </button>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
              <a href="#!" class="k btn btn-outline-light main-btn">
                <span class="fw-bolder">Start your journey</span>
                <ion-icon name="compass-outline"></ion-icon>
              </a>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
  <div class="background">
       <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-transparent border border-0">
              <div class="card-body text-light m-5">
                <h1 class="card-title">Qatar Word Cup Simulator</h1>
                <p class="card-text">This is a simulator for the FIFA World Cup Qatar 2022. You can simulate the matches and see the results.</p>
                <a href="simulator.php" class=" btn btn-outline-light main-btn">
                  <span class="fw-bolder">Simulate Now</span>
                  <ion-icon name="log-out-outline"></ion-icon>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- the simulation table  -->

  <div class="container mt-5">
        <!-- first row -->
        <form method="POST" action="index.php">
            <div class="table-responsive{-sm|-md|-lg|-xl|-xxl}">
                <table class="table text-center align-middle table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th class="w-25      ">23 NOV 11:00 H</th>
                            <th class="w-25  ">Final</th>
                            <th class="w-25      ">Match</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td><img class="img-fluid w-25" src="./img/mr.png"> Morocco </td>
                            <td><input class="w-25 rounded border" type="number" min="0" value="<?php echo isset($_POST['goal1']) ? $_POST['goal1'] : '0'; ?>" name="morocco-1">
                            <input class="w-25 rounded border" type="number" min="0" value="<?php echo isset($_POST['goal2']) ? $_POST['goal2'] : '0'; ?>" name="crotia-1"> </td>
                            <td class="bg-light">Croitia<img class="img-fluid w-25" src="./img/cr.png"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table text-center align-middle table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th class="w-25    ">23 NOV 20:00 H</th>
                            <th class="w-25 ">Final</th>
                            <th class="w-25    ">Match</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="bg-light"><img class="img-fluid w-25" src="./img/blg.png"> Belgium </td>
                            <td><input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal3']) ? $_POST['goal3'] : '0'; ?>" name="belgium-game1">
                            <input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal4']) ? $_POST['goal4'] : '0'; ?>" name="canda-game1"></td>
                            <td class="bg-light">Canada<img class="img-fluid w-25" src="./img/cnd.png"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table text-center align-middle table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th class="w-25    ">27 NOV 14:00 H</th>
                            <th class="w-25 ">Final</th>
                            <th class="w-25    ">Match</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="bg-light"><img class="img-fluid w-25" src="./img/blg.png"> Belgium </td>
                            <td><input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal5']) ? $_POST['goal5'] : '0'; ?>"name="belgium-game2">
                            <input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal6']) ? $_POST['goal6'] : '0'; ?>" name="morocco-game2"></td>
                            <td class="bg-light">Morocco<img class="img-fluid w-25" src="./img/mr.png" ></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table text-center align-middle table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th class="w-25    ">27 NOV 17:00 H</th>
                            <th class="w-25 ">Final</th>
                            <th class="w-25    ">Match</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="bg-light"><img class="img-fluid w-25"  src="./img/cr.png"> croatia </td>
                            <td><input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal7']) ? $_POST['goal7'] : '0'; ?>" name="croatia-game2">
                            <input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal8']) ? $_POST['goal8'] : '0'; ?>" name="canada-game2"></td>
                            <td class="bg-light">Canada<img class="img-fluid w-25" src="./img/cnd.png"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table text-center align-middle table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th class="w-25    ">01 DEC 16:00 H</th>
                            <th class="w-25 ">Final</th>
                            <th class="w-25    ">Match</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="bg-light"><img class="img-fluid w-25" src="./img/cr.png"> Croitia </td>
                            <td><input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal9']) ? $_POST['goal9'] : '0'; ?>" name="croitia-game3">
                            <input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal10']) ? $_POST['goal10'] : '0'; ?>"></td>
                            <td class="bg-light">Belgium<img class="img-fluid w-25" src="./img/blg.png"></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table text-center align-middle table-bordered table-hover ">
                    <thead>
                        <tr>
                            <th class="w-25    ">01 DEC 16:00 H</th>
                            <th class="w-25">Final</th>
                            <th class="w-25    ">Match</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td class="bg-light"><img class="img-fluid w-25" src="./img/cnd.png"> Canada </td>
                            <td><input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal11']) ? $_POST['goal11'] : '0'; ?>" name="canda-game3">
                            <input class="w-25  rounded border" type="number" min="0" value="<?php echo isset($_POST['goal12']) ? $_POST['goal12'] : '0'; ?>" name="morocco-game3"></td>
                            <td class="bg-light">Morocco<img class="img-fluid w-25" src="./img/mr.png"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex flex-wrap align-center justify-content-center ">
                    <button class="btn p-2 btn-outline-light rounded " type="submit" style="background-color: #c2165e;" class="btn btn- primary">submit</button>
                </div>
            </div>
        </form>

        <?php
    $Match = 0;
    $marocPoint = 0;
    $croatiaPoint = 0;
    $belguimPoint = 0;
    $canadaPoint = 0;


   //Variables for the group stage//


    $marocWin = 0;
    $croatiaWin = 0;
    $belguimWin = 0;
    $canadaWin = 0;

    $morocco_emp = 0;
    $croatia_emp = 0;
    $belgium_emp = 0;
    $canada_emp = 0;

    $morocco_lost = 0;
    $croatia_lost = 0;
    $belgium_lost = 0;
    $canada_lost = 0;

    $morocco_GF = 0;
    $croatia_GF = 0;
    $belgium_GF = 0;
    $canada_GF = 0;


   //input variables for the group stage//    
    $score1 = 0;
    $score2 = 0;
    $score3 = 0;
    $score4 = 0;
    $score5 = 0;
    $score6 = 0;
    $score7 = 0;
    $score8 = 0;
    $score9 = 0;
    $score10 = 0;
    $score11 = 0;
    $score12 = 0;

    
    if (isset($_POST['goal1'])  && isset($_POST['goal2'])) {
      $score1 = $_POST['goal1'];
      $score2 = $_POST['goal2'];
      if ($score1 < $score2) {
          $croatiaPoint = +3;
          $croatiaWin = $croatiaWin + 1;
          $morocco_lost = $morocco_lost  + 1;
      } else if ($score1 == $score2) {
          $marocPoint = +1;
          $croatiaPoint = +1;
          $morocco_emp =  $morocco_emp + 1;
          $croatia_emp = $croatia_emp  + 1;
      } else {
          $marocPoint = +3;
          $marocWin = $marocWin + 1;
          $croatia_lost = $croatia_lost  + 1;
      }

      // echo $marocPoint . "-" . $croatiaPoint;
      $par = 3;
  }
  if (isset($_POST['goal3'])  && isset($_POST['goal4'])) {
      $score3 = $_POST['goal3'];
      $score4 = $_POST['goal4'];
      if ($score3 < $score4) {
          $canadaPoint = +3;
          $canadaWin = $canadaWin + 1;
          $belgium_lost = $belgium_lost  + 1;
      } else if ($score3 == $score4) {
          $belguimPoint = +1;
          $canadaPoint = +1;
          $belgium_emp =  $belgium_emp + 1;
          $canada_emp = $canada_emp  + 1;
      } else {
          $belguimPoint = +3;
          $belguimWin = $belguimWin + 1;
          $canada_lost = $canada_lost  + 1;
      }

      // echo "<br>" . $belguim . "-" . $canada;
  }

  if (isset($_POST['goal5'])  && isset($_POST['goal6'])) {
      // echo "<br>" . $belguim;
      $score6 = $_POST['goal6'];
      $score5 = $_POST['goal5'];
      if ($score6 > $score5) {
          $marocPoint = $marocPoint + 3;
          $marocWin = $marocWin + 1;
          $belgium_lost = $belgium_lost  + 1;
      } else if ($score6 == $score5) {
          $belguimPoint = $belguimPoint + 1;
          $marocPoint = $marocPoint + 1;
          $belgium_emp =  $belgium_emp + 1;
          $morocco_emp = $morocco_emp  + 1;
      } else {
          $belguimPoint = $belguimPoint + 3;
          $belguimWin = $belguimWin + 1;
          $morocco_lost = $morocco_lost  + 1;
      }

      // echo "<br>" . $belguim . "-" . $marocPoint;
  }
  if (isset($_POST['goal7'])  && isset($_POST['goal8'])) {
      $score7 = $_POST['goal7'];
      $score8 = $_POST['goal8'];
      if ($score7 < $score8) {
          $canadaPoint = $canadaPoint + 3;
          $canadaWin = $canadaWin + 1;
          $croatia_lost = $croatia_lost  + 1;
      } else if ($score7 == $score8) {
          $canadaPoint = $canadaPoint + 1;
          $croatiaPoint = $croatiaPoint + 1;
          $canada_emp =  $canada_emp + 1;
          $croatia_emp = $croatia_emp  + 1;
      } else {
          $croatiaPoint = $croatiaPoint + 3;
          $croatiaWin = $croatiaWin + 1;
          $canada_lost = $canada_lost  + 1;
      }

      // echo "<br>" . $croatiaPoint . "-" . $canada;
  }
  if (isset($_POST['goal9'])  && isset($_POST['goal10'])) {
      $score9 = $_POST['goal9'];
      $score10 = $_POST['goal10'];
      if ($score9 < $score10) {
          $belguimPoint = $belguimPoint + 3;
          $belguimWin = $belguimWin + 1;
          $croatia_lost = $croatia_lost  + 1;
      } else if ($score9 == $score10) {
          $belguimPoint = $belguimPoint + 1;
          $croatiaPoint = $croatiaPoint + 1;
          $belgium_emp =  $belgium_emp + 1;
          $croatia_emp = $croatia_emp  + 1;
      } else {
          $croatiaPoint = $croatiaPoint + 3;
          $croatiaWin = $croatiaWin + 1;
          $belgium_lost = $belgium_lost  + 1;
      }

      // echo "<br>" . $croatiaPoint . "-" . $belguim;
  }
  if (isset($_POST['goal11'])  && isset($_POST['goal12'])) {
      $score11 = $_POST['goal11'];
      $score12 = $_POST['goal12'];
      if ($score11 < $score12) {
          $marocPoint = $marocPoint + 3;
          $marocWin = $marocWin + 1;
          $canada_lost = $canada_lost  + 1;
      } else if ($score11 == $score12) {
          $marocPoint = $marocPoint + 1;
          $canadaPoint = $canadaPoint + 1;
          $morocco_emp =  $morocco_emp + 1;
          $canada_emp = $canada_emp  + 1;
      } else {
          $canadaPoint = $canadaPoint + 3;
          $canadaWin = $canadaWin + 1;
          $morocco_lost = $morocco_lost  + 1;
      }

      // echo "<br>" . $canada . "-" . $marocPoint;
  }

  // GF Calculation
  $morocco_GF = $score1 + $score6 + $score12;
  $croatia_GF = $score2 + $score7 + $score9;
  $belgium_GF = $score3 + $score5 + $score10;
  $canada_GF = $score4 + $score8 + $score11;
  // GC Calculation
  $morocco_GC = $score2 + $score5 + $score11;
  $croatia_GC = $score1 + $score8 + $score10;
  $belgium_GC = $score4 + $score6 + $score9;
  $canada_GC = $score3 + $score7 + $score1;
  // Goal Difference
  $morocco_goal_dif =  $morocco_GF + $morocco_GC;
  $croatia_goal_dif =  $croatia_GF + $croatia_GC;
  $belgium_goal_dif =  $belgium_GF + $belgium_GC;
  $canada_goal_dif  =  $canada_GF  + $canada_GC;

  echo "
  <div  class='table-responsive{-sm|-md|-lg|-xl|-xxl} mt-4'> 
  <table style=' border-collapse:separate;border-spacing:0 10px; ' class='table text-center align-middle table-bordered ' >
  <thead style='border: #c2165e solid 1px; background-color: #0e0549;' class='text-light' > 
    <tr > 
      <th class='w-25'>#</th> 
      <th class='w-50'>Selection</th>
      <th class='w-25'>PTS</th>
      <th class='w-25'>PAR</th>
      <th class='w-25'>GAN</th>
      <th class='w-25'>EMP</th>
      <th class='w-25'>PER</th>
      <th class='w-25'>G.F</th>
      <th class='w-25'>G.C</th> 
      <th class='w-25'>+/-</th>
    </tr>
  </thead>";


  $placement = array(
      array("Morocco", $marocPoint, $Match, $marocWin, $morocco_emp, $morocco_lost, $morocco_GF, $morocco_GC, $morocco_goal_dif),
      array("croatia", $croatiaPoint, $Match, $croatiaWin, $croatia_emp, $croatia_lost, $croatia_GF, $croatia_GC, $croatia_goal_dif),
      array("belgium", $belguimPoint, $Match, $belguimWin, $belgium_emp, $belgium_lost, $belgium_GF, $belgium_GC, $belgium_goal_dif),
      array("canada", $canadaPoint, $Match, $canadaWin, $canada_emp, $canada_lost, $canada_GF, $canada_GC, $canada_goal_dif)
  );
  //  Array sorting ///////////////
  usort($placement, function ($a, $b) {
      if ($a[1] != $b[1]) {
          return $b[1] <=> $a[1];
      } else if ($a[8] != $b[8]) {
          return $b[8] <=> $a[8];
      } else if ($a[6] != $b[6]) {
          return $b[6] <=> $a[6];
      }
      return 0;
  });

  // Table body  
  echo " <tbody style='border: #c2165e solid 1px;' class='text-light'>";
  // Table tr
  for ($row = 0; $row < 4; $row++) {
      echo " <tr style='background-color: #870036;'><td>" . $row + 1 . "</td>";
      // Table td
      for ($col = 0; $col < 9; $col++) {
          echo  "<td class=''>" .  $placement[$row][$col] . "</td>";
      }
      echo "</tr> ";
  }
  echo " </table></div>";
  ?>


  <footer class="site-footer mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="footer-heading mb-4">About Us</h2>
          <p>This is a simulator for the FIFA World Cup Qatar 2022. You can simulate the matches and see the results.</p>
        </div>
        <div class="col-md-3 ml-auto">
          <h2 class="footer-heading mb-4">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><a href=" ">Simulator</a></li>
            <li><a href="https://www.fifa.com/worldcup/">FIFA World Cup</a></li>
          </ul>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>
              All rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  <main>
  </main>
</body>
</html>