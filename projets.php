<?php
    require_once("User/user_id.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Labo Riadi</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  </head>
  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Laboratoire <span class="lite">Riadi</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form method="GET" action="recherche.php" class="navbar-form">
                            <input class="form-control" name="search" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/admin.jpg">
                            </span>
                            <span class="username"><?php print($userRow['user_name']);  ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profil2.php"><i class="icon_profile"></i> Mon Profil</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> Mes Messages</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Contact</a>
                            </li>
                            <li>
                                <a href="logout.php?logout=true"><i class="icon_key_alt"></i> Deconnecter</a>
                            </li>
                            <li>
                                <a href="#"><i class=""></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">

                  <li>
                  <?php echo "<a class='' href='acceuil.php?ident={$userRow['user_id']}'>";  ?>
                  <i class="icon_house_alt"></i>
                  <span>Acceuil</span>
                  </a>
                  </li>

                  <li>
                  <a class="" href="projets.php">
                  <i class="icon_building"></i>
                  <span>Projets</span>
                  </a>
                  </li>

                  <li>
                  <a class="" href="index.php">
                  <i class="icon_calendar"></i>
                  <span>Evénements</span>
                  </a>
                  </li>             

                  <li>                    
                      <a class="" href="membres.php">
                          <i class="icon_group"></i>
                          <span>Membres</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class=" icon_menu-square_alt2"></i>
                          <span>Présentation</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="a_propos_de_riadi.php">A Propos de Riadi</a></li>                          
                          <li><a class="" href="historique.php">Historique</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_search_alt"></i>
                          <span>Recherche</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                     <ul class="sub">
                          <li><a class="" href="axes_de_recherche.php">Axes de Recherche</a></li>
                          <li><a class="" href="productions_scientifiques.php"><h5>Productions Scientifiques</h5></a></li>
                      </ul>
                  </li>
                  <li>                    
                      <a class="" href="cooperations_et_partenariats.php">
                          <i class="icon_piechart"></i>
                          <span>Coopérations et</span>
                          <span> Partenariats</span>
                      </a>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_globe-2"></i>
                          <span>Conférences</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                        <ul class="sub">                          
                            <li><a class="" href="http://www.core.edu.au">CORE/ERA</a></li>
                                 </ul>
                          </li>
                  </li> 

<!--                   <li>
                      <a class="" href="projets.php">
                          <i class="icon_building"></i>
                          <span>Projets</span>
                      </a>
                  </li>
 -->                  
<!--                   <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profil.php">Profil</a></li>
                          <li><a class="" href="login.php"><span>Login Page</span></a></li>
                      </ul>
                  </li>
 -->                  <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_link"></i>
                          <span>Liens</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="http://www.ensi.rnu.tn">Ensi</a></li>
                          <li><a class="" href="http://www.uma.rnu.tn/"><span>Université</span></a></li>
                       </ul>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                            <h3 class="page-header"><i class="fa fa fa-bars"></i>Laboratoire Riadi</h3>
                        </div>
              </div>
                      <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                                <?php
                                /*
                                $t="Publications" ;
                                $stmt=$member->runQuery("SELECT * FROM _blog WHERE Type='Publications'
                                                                                 OR Type='Projets'
                                                                                 OR Type='Enseignements'
                                                                                 OR Type='recherche'
                                                                                 OR Type='Encadrements'
                                                                                 OR Type='Contact'
                                                                                 AND Contenu!=''
                                                                                 AND Contenu!=' '");
                                $stmt->execute();
                                $num = $stmt->rowCount();
                               echo "<div class='col-lg-8 task-progress pull-left'>";
                               echo "<h3>( {$num} ) </h3>";
                               echo "<span class=''>Publication ,</span>";
                               echo "<span class=''>Projet ,</span>";
                               echo "<span class=''>Enseignement ,</span>";
                               echo "<span class=''>Recherche ,</span>";
                               echo "<span class=''>Encadrements ,</span>";
                               echo "<span class=''>Contact</span>";
                               */
                               ?> 
                                                           
                              </div>
                              <div class="col-lg-4">
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                        
            <?php // $stmt=$member->runQuery("SELECT id , id_inscrit , Publications , Projets , Enseignements , Titre , date_creation FROM _blog ORDER BY date_creation DESC");
                   $stmt=$member->runQuery("SELECT id , id_inscrit , Type , Contenu , Titre , date_creation FROM _blog  ORDER BY date_creation DESC");
            $stmt->execute();
            $num = $stmt->rowCount();
            if($num>0){
                               /* echo "<tr>";
                                echo "<th>1</th>" ;
                                echo "<th>2</th>" ;
                                echo "<th>3</th>" ;
                                echo "<th>4</th>" ;
                                echo "<th>5</th>" ;
                                echo "<th>6</th>" ;
                                echo "<th>7</th>" ;
                                echo "<th>8</th>" ;
                                echo "<th>9</th>" ;
                                echo "<th>10</th>" ;
                                echo "<th>11</th>" ;
                                echo "<th>12</th>" ;
                                echo "<th>13</th>" ;
                                echo "</tr>";*/
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row) ;
                            if($Contenu!=" "&&$Contenu!="")
                              {
                                $pieces = explode(" ", $date_creation);
                                $pieces2 = explode("-", $pieces[0]) ;
                                $year=$pieces2[0];
                                $mois=$pieces2[1];
                                $day=$pieces2[2];

                                $nbre=$member->nbre_jour($pieces2[2],$pieces2[1],$pieces2[0]);
                                $node = explode("-", $nbre) ;
                                $y=$node[0]; // annee
                                $m=$node[1]; // mois
                                $d=$node[2]; // jours


                                echo "<tr>";
                                  echo "<td>";
                                if($y==0)
                                {
                                  //echo "$d";
                                 if($d==0)
                                  {echo "Aujourd'hui</td>";}
                                  else
                                  if($d==1) {echo "Hier</td>";}
                                  else if($d>=7&&$d<14) {echo "la semaine dernière</td>";}
                                  else{echo $pieces2[2]."-".$pieces2[1] ; echo "</td>";}
                                } 
                                  echo "<td colspan=''>";
                        echo "<div class='panel-group m-bot20' id='accordion'>";
                              echo "<div class='panel panel-default'>";
                                  echo "<div class='panel-heading'>";
                                      echo "<h4 class='panel-title'>";
                                       echo "<a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#{$id}'>";
                                             echo "{$Titre}"; 
                                            echo "</a>";
                                      echo "</h4>";
                                  echo "</div>";
                                  echo "<div id='{$id}' class='panel-collapse collapse'>";
                                      echo "<div class='panel-body'>";
                                            echo "{$Contenu}";
                                      echo "</div>";
                                  echo "</div>";
                          echo "</div>";
                        echo "</div>";
                            
                                  echo "</td>";
                                  echo "<td>";
                                     if($Type=="Publications"){
                                      echo "<span class='badge bg-important'>Publication</span>";} 
                                     if($Type=="Projets"){
                                      echo "<span class='badge bg-success'>Projet</span>";}
                                     if($Type=="Enseignements"){
                                      echo "<span class='badge bg-info'>Enseignement</span>";}
                                     if($Type=="Recherche"){
                                      echo "<span class='badge bg-primary'>Recherche</span>";}
                                     if($Type=="Encadrements"){
                                      echo "<span class='badge bg-primary'>Encadrements</span>";}
                                     if($Type=="Contact"){
                                      echo "<span class='badge bg-info'>Contact</span>";}
                                  echo "</td>";
                                  echo "<td>";
                                    echo "<span class='profile-ava'>";
                                    $T=$member->getInfo($id_inscrit);
                                    echo "$T[user_name]";
                                   // echo "$name";
                                        echo "<img alt='' class='simple' src='img/admin.jpg'>";
                                    echo "</span>";
                                  echo "</td>";
                              echo "</tr>";
                            }
                          }
                        }
            ?>
<!--                               <tr>
                                  <td>Yesterday</td>
                                  <td>
                                      Project Design Task
                                  </td>
                                  <td>
                                      <span class="badge bg-success">Task</span>
                                  </td>
                                  <td>
                                      <div id="work-progress2"></div>
                                  </td>
                              </tr>
                              <tr>
                                  <td>24-10-14</td>
                                  <td>
                                      Project Release Date
                                  </td>
                                  <td>
                                      <span class="badge bg-info">Milestone</span>
                                  </td>
                                  <td>
                                      <div id="work-progress4"></div>
                                  </td>
                              </tr>                              
 -->                              
                          </table>
                      </section>

        </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


 </body>
</html>