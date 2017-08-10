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
            <a href="evenements.php" class="logo">Laboratoire <span class="lite">Riadi</span></a>
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
                                <a href="#"><i class="icon_profile"></i> Mon Profil</a>
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
                  <a class="" href="evenements.php">
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
                  <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profil2.php">Profil</a></li>
                          <!--<li><a class="" href="http://localhost/labo-user_2/login.php"><span>Login Page</span></a></li>-->
                      </ul>
                  </li>
                  <li class="sub-menu ">
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
                    <h3 class="page-header"><i class="icon_profile"></i>PROFIL</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="evenements.php">Acceuil</a></li>
                        <li><i class="icon_documents_alt"></i>Pages</li>
                        <li><i class="icon_profile"></i>Profil</li>
                    </ol>
                </div>
      </div>


            <!--  ////////////////////////  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <?php echo "<h4>"; print($userRow['user_name']); echo"</h4>"; ?>             
                              <div class="follow-ava">
                                  <img src="img/adminp.jpg" alt="">
                              </div>
                              <?php echo "<h6>";print($userRow['Position']);echo"</h6>"; ?>
                            </div>
                            <div class="col-lg-6 col-sm-6 follow-info">
                                <p>Bienvenue</p>
                                
                                <?php echo "<p>@";print($userRow['user_name']); echo"</p>"; ?>
                                <?php echo "<p><i class='fa fa-twitter'>";print($userRow['user_name']);echo"</i></p>"; ?>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>heure</span>
                                    <span><i class="icon_calendar"></i>date</span>
                                    <?php echo "<span><i class='icon_pin_alt'></i>";print($userRow['Office']); echo"</span>"; ?>
                                </h6>
                            </div>

<!--                             <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
                                              Contact
                                          </li>
                                           
                                      </ul>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-file-code-o" style="font-size:28px"></i><br>
                                              Projets
                                          </li>
                                           
                                      </ul>
                            </div>
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-globe fa-2x"></i><br>
                                              Autres Activités
                                          </li>
                                           
                                      </ul>
                            </div>
 -->                            
                          </div>
                    </div>
               </div>
          <!--   <div class="col-lg-6"></div> -->
            </div>
            <!--  ////////////////////////  -->
               <div class="row">
                                    <div class="col-lg-12">
                                        <section class="panel">
                                            <header class="panel-heading tab-bg-info">
                                                              <ul class="nav nav-tabs">
                                                                  <li class="active">
                                                                      <a data-toggle="tab" href="#recent-activity">
                                                                          <i class="icon-home"></i>
                                                                          Activités
                                                                      </a>
                                                                  </li>
                                                                  <li class="">
                                                                      <a data-toggle="tab" href="#profile">
                                                                          <i class="icon-user"></i>
                                                                          Profil
                                                                      </a>
                                                                  </li>
                                                                  <li class="">
                                                                      <a data-toggle="tab" href="#edit-profile">
                                                                          <i class="icon-envelope"></i>
                                                                          Edit Profil
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                            </header>
              <div class="panel-body">
                 <div class="tab-content">
                   <div id="recent-activity" class="tab-pane active ">
                      <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-8 task-progress pull-left">
                                  <!-- <h1>...</h1> -->                                  
                              </div>
                              <div class="col-lg-4">
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
            <?php  //$stmt=$member->runQuery("SELECT id , Publications , Projets , Enseignements , Titre , date_creation FROM _blog WHERE id_inscrit='$user_id' ORDER BY date_creation DESC");
                   $stmt=$member->runQuery("SELECT id , Type , Contenu , Titre , date_creation , date_modification FROM _blog WHERE id_inscrit='$user_id' ORDER BY date_creation DESC");
            //$stmt->bindParam(1, $id_inscrit);
            $stmt->execute();
            $num = $stmt->rowCount();


            if($num>0){

              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row) ;
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
                            if($Contenu!=" "&&$Contenu!="")
                              {
                                //echo $pieces2[2]
                                echo "<tr>";
                                  //echo "<td>Aujourd'hui</td>";
                                if($y==0)
                                {
                                  
                                 if($d==0)
                                  {
                                  echo "<td>Aujourd'hui</td>";}
                                  else
                                  if($d==1) {echo "<td>Hier</td>";}
                                  else if($d>=7&&$d<14) {echo "<td>la semaine dernière : ".$pieces2[2]."-".$pieces2[1]."</td>";}
                                  else{echo "<td>" ;echo $pieces2[2]."-".$pieces2[1] ; echo "</td>";}
                                }
                                  echo "<td>";
                                    echo "{$Titre} <br/><br/>";  
                                    //echo "{$Contenu}";  
                                  echo "</td>";
                                  echo "<td>";
                                     if($Type=="Publications"){
                                      echo "<a href='update2.php?id={$id}&index=profil'><span class='badge bg-important'>Publication</span></a>";} 
                                     if($Type=="Projets"){
                                      echo "<a href='update2.php?id={$id}&index=profil'><span class='badge bg-success'>Projet</span></a>";}
                                     if($Type=="Enseignements"){
                                      echo "<a href='update2.php?id={$id}&index=profil'><span class='badge bg-info'>Enseignement</span></a>";}
                                     if($Type=="Recherche"){
                                      echo "<a href='update2.php?id={$id}&index=profil'><span class='badge bg-primary'>Recherche</span></a>";}
                                     if($Type=="Encadrements"){
                                      echo "<a href='update2.php?id={$id}&index=profil'><span class='badge bg-primary'>Encadrements</span></a>";}
                                     if($Type=="Contact"){
                                      echo "<a href='update2.php?id={$id}&index=profil'><span class='badge bg-info'>Contact</span></a>";}
                                  echo "</td>";
                                  echo "<td>";
                                if ($date_modification!=0) {
                                          $seconde = explode(" ", $date_modification);
                                          $seconde2 = explode("-", $seconde[0]) ;
                                          $seconde3 = explode(":", $seconde[1]) ;

                                          $nbre=$member->nbre_jour($seconde2[2],$seconde2[1],$seconde2[0]);
                                          $node = explode("-", $nbre) ;
                                          $y=$node[0]; // annee
                                          $m=$node[1]; // mois
                                          $d=$node[2]; // jours
                                if($y==0)
                                { 
                                  if($d==0)
                                  {echo "Modifié aujourd'hui"." à ".$seconde3[0].":".$seconde3[1];}
                                  else
                                  if($d==1) {echo "Modifié hier"." à ".$seconde3[0].":".$seconde3[1];}
                                  else
                                  if($d>=7&&$d<14) {echo "Modifié la semaine dernière :".$seconde2[2]."-".$seconde2[1]." à ".$seconde3[0].":".$seconde3[1];}
                                  else{
                                      echo "Modifié le ".$seconde2[2]."-".$seconde2[1]." à ".$seconde3[0].":".$seconde3[1];
                                     }
                                }

                                }
                                                                              //echo "<span class='profile-ava'>";
                                        //echo "<img alt='' class='simple' src='img/admin.jpg'>";
                                        //echo "</span>";
                                  echo "</td>";
                              echo "</tr>";
                            }
                          }
                        }
            ?>
            </tbody>
          </table>
      </section>
                        </div>

                                                                <div id="profile" class="tab-pane ">
                                                                        <section class="panel" class="profile-activity">
                                                                          <!--<div class="bio-graph-heading">
                                                                                    <?php /*echo "Bonjour "; echo "Je suis {$Name} <br/>"; echo "Position :";echo "{$Position}"; */ ?>
                                                                                    Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                                                                    Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                                                          </div>-->
                                                                          <div class="panel-body bio-graph-info">
                                                                              <h1></h1>
                                                                              <div class="row">
                                                                                  <div class="bio-row">
                                                                                      <p><span>Nom </span>: <?php print($userRow['user_name']);  ?></p>
                                                                                  </div>
                                                                                  <div class="bio-row">
                                                                                      <p><span>Prenom </span>: <?php echo "";  ?></p>
                                                                                  </div>
                                                                                  <div class="bio-row">
                                                                                      <p><span>Travail </span>: <?php print($userRow['joining_date']);  ?></p>
                                                                                  </div>
                                                                                  <div class="bio-row">
                                                                                      <p><span>Pays </span>: <?php print($userRow['Office']);  ?></p>
                                                                                  </div>
                                                                                  <div class="bio-row">
                                                                                      <p><span>Post actuel </span>: <?php print($userRow['Position']);  ?></p>
                                                                                  </div>
                                                                                  <div class="bio-row">
                                                                                      <p><span>Email </span>: <?php print($userRow['user_email']);  ?></p>
                                                                                  </div>
                                                                                  <div class="bio-row">
                                                                                      <p><span>Age </span>:<?php echo "";  ?></p>
                                                                                  </div>
                                                                                  <div class="bio-row">
                                                                                      <p><span>Telephone </span>: (+6283) 456 789</p>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                        </section>
                                                                          <section>
                                                                              <div class="row"> 
                                                                              <h2></h2>
                                                                              </div>
                                                                          </section>
                                                                 </div>

                                                                <div id="edit-profile" class="tab-pane">
                                                                           
                                                                            <section class="panel">                                          
                                                                                  <div class="panel-body bio-graph-info">
                                                                                      <h1> Profile Info</h1>
                                                                                      <form class="form-horizontal" role="form">                                                  
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">First Name</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="f-name" placeholder=" ">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">Last Name</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="l-name" placeholder=" ">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">About Me</label>
                                                                                              <div class="col-lg-10">
                                                                                                  <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">Country</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="c-name" placeholder=" ">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">Birthday</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="b-day" placeholder=" ">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">Occupation</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="occupation" placeholder=" ">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">Email</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="email" placeholder=" ">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">Mobile</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="mobile" placeholder=" ">
                                                                                              </div>
                                                                                          </div>
                                                                                          <div class="form-group">
                                                                                              <label class="col-lg-2 control-label">Website URL</label>
                                                                                              <div class="col-lg-6">
                                                                                                  <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                                                                                              </div>
                                                                                          </div>

                                                                                          <div class="form-group">
                                                                                              <div class="col-lg-offset-2 col-lg-10">
                                                                                                  <button type="submit" class="btn btn-primary">Save</button>
                                                                                                  <button type="button" class="btn btn-danger">Cancel</button>
                                                                                              </div>
                                                                                          </div>
                                                                                      </form>
                                                                                  </div>
                                                                              </section>
                                                                              
                                                                          </div>
                                                </div>
                                                </div>
                                                    
                                        </section>
                                    </div>
                                 <!--    <div class="col-lg-6"></div> -->
                </div>
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