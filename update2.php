<?php
    require_once("User/user_id.php");


$id2=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

if($_POST){
  $member->update2($id2) ;
  //$member->redirect("acceuil.php?ident={$userRow['user_id']}");
  $member->redirect("profil2.php");
  }
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
     <!-- Tab -->
    <link rel="stylesheet" href="css/css2/demo.css" />
    <link rel="stylesheet" href="css/css2/tabs.css" />
    <link rel="stylesheet" href="css/css2/tabstyles.css" />

     <!-- Tab end  -->
    <style type="text/css">
      #Pub1 , #Proj1 , #Ens1 {
          display: none;
           }
     
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
                          <li><a class="" href="productions_scientfiques.php"><h5>Productions Scientifiques</h5></a></li>
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
                          <!--<li><a class="" href="login.php"><span>Login Page</span></a></li>-->
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
            <div class="profile-widget">
              <!--   <div class="info-box" style="background: url('img/img2/1.jpg') center;"> -->
<!--                   <div class="follow-ava">
                    <img class="img-circle" src="img/adminp.jpg" alt="User Avatar">
                  </div>
 -->                  <?php 
                        $index = isset($_GET['index']) ? $_GET['index'] : "";
                       if($index=='acceuil')
                        {
                          echo "<a href='acceuil.php?ident={$userRow['user_id']}'> <span class='arrow_left_alt pull-left' style='font-size:24px'></span></a><br/>";
                        }
                        else if($index=='profil')
                        {
                          echo "<a href='profil2.php'> <span class='arrow_left_alt pull-left' style='font-size:24px'></span></a><br/>";
                        }
                        echo "<h3 class='pull-left' style='color:black'>";print($userRow['user_name']) ; echo "</h3>";
                        ?>
                      <!-- <h6 class="">Software Engineer</h6> -->
                </div>
              </div>
        </div>
        <?php
          $id2=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
        ?> 

        <?php
            $stmt1=$member->runQuery("SELECT id,  Type , Contenu , Titre , date_creation FROM _blog WHERE id_inscrit = '$user_id' AND id='$id2'");
            $stmt1->execute();
            $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
            $Type=$row1['Type'] ;

            $stmt=$member->runQuery("SELECT id,  Type , Contenu , Titre , date_creation FROM _blog WHERE id_inscrit = '$user_id' AND Type='$Type' ORDER BY id DESC");
            $stmt->execute();
            $num = $stmt->rowCount();
        
           echo "<a data-original-title='Ajouter' data-content='autre {$Type}' data-placement='top' data-trigger='hover' class='btn btn-info popovers' class='btn btn-primary' href='modifier.php?type={$Type}'><i class='icon_pencil'></i></a>";
        ?>
        <section>
          <div class="row">
           <div class="col-lg-12">
<!--                 <div class="tabs tabs-style-line">
                  <nav>
                    <ul>
                      <li><a href="#section-line-1"><span>Publications</span></a></li>
                      <li><a href="#section-line-2"><span>Projets</span></a></li>
                      <li><a href="#section-line-3"><span>Enseignements</span></a></li>
                      <li><a href="#section-line-4"><span>Recherche d'intérêts</span></a></li>
                      <li><a href="#section-line-5"><span>Encadrements</span></a></li>
                      <li><a href="#section-line-6"><span>Contact</span></a></li>
                    </ul>
                  </nav>
                  <div class="content-wrap">
 -->  



        <?php

                                  echo "<div class='panel-body'>";    
                              echo "<div class='tab-content'>"; 
                                  echo "<div id='recent-activity' class='tab-pane active'>"; 
                                      echo "<div class='profile-activity'>";  


             if($num>0){
              echo "<div class='col-lg-8' >";
                                    
                                    $id=$row1['id'] ; 
                                    $Type=$row1['Type'];
                                    $Contenu=$row1['Contenu'];
                                    $Titre=$row1['Titre'];
                                      if($Contenu!=""&&$Contenu!=" ")
                                        {
                                        
                                        echo "<div class='act-time'>";                                        
                                        echo "<div class='activity-body act-in'>";      
                                        echo "<span class='arrow'></span>";          
                                        echo "<div class='text'>";          
                                        //echo "<h3 class='attribution'><a href='#'>";print($userRow['user_name']);echo"</a>  {$date_creation}</h3>";   
                                        
                                        ?><form action='update2.php?id=<?php echo htmlspecialchars($id2) ; ?> 'method='post'>
                                        <textarea class='form-control' name='titre' cols="30" rows="1"><?php echo htmlspecialchars($Titre, ENT_QUOTES); ?></textarea>
                                        <textarea class='form-control' name='Contenu' cols="30" rows="13"><?php echo htmlspecialchars($Contenu, ENT_QUOTES); ?></textarea>
                                        <br/><input type='submit' value='Enregistrer' class='btn btn-primary' />
                                        
                                        </form>
                                        <?php
                                        //echo "<a  href='index91.php?ident={$userRow['user_id']}''>Retour</a>";
                                        
                                        //else
                                        //{
                                          //echo "<div class='col-lg-2' >";
                                          //echo "<h3 style='color : #1BC0C6'>{$Titre}</h3>";
                                         // echo "<h4 style='color : #222223'>{$Publications}</h4>";
                                        //}
                                        echo "</div>";          
                                        echo "</div>";      
                                        echo "</div>";
                                      }
                                    echo "</div>";
                                    echo "<div class='col-lg-4' >";
                                      if($num>1)
                                      {echo "<h2 style='color : gray'>Autre {$Type} </h2><br/>";}
                                    echo "<ol>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row) ;
                                      if($Contenu!=""&&$Contenu!=" "&&$id != $id2)
                                        { 
                                          echo "<li>";
                                          echo "<a href='update2.php?id={$id}&index={$index}'><h3 style='color : #1BC0C6'>{$Titre}</h3></a>";
                                          echo "</li>";
                                        }
                                    }
                                    echo "</ol>";
                                    echo "</div>";
            }

                                    echo "</div>";  
                                  echo "</div>";
                              echo "</div>";
                          echo "</div>";
      ?>



                    </section>
<!--                     <section id="section-line-2">
                    </section>
                    <section id="section-line-3">
                      </section>
                    <section id="section-line-4">
                    </section>
                    <section id="section-line-5">
                    </section>
                    <section id="section-line-6">
                    </section>
 -->                  <!-- </div> --><!-- /content -->
            </div>
           </div>
        </div>
        </section>
<!--               <section>
                <div class="col-lg-12">
                    <div id="Pub1">
            <a class="list-group-item active" href="#">
            <h4 class="list-group-item-heading">List group item heading</h4>
            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
                      <h3>Publications</h3>
                      <h6>
                      <?php
                       $member->getInfo2($user_id);
                      ?>

                      </h6>

                    </div>
                    <div id="Proj1">
                      <h3>Projets</h3>
                    </div>
                    <div id="Ens1">
                      <h3>Enseignements</h3>
                    </div>
                </div>
               </section> -->
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
   <!-- Tab  -->
    <script src="js/cbpFWTabs.js"></script>
    <script>
      (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
          new CBPFWTabs( el );
        });

      })();
    </script>
   <!-- Tab End  -->


 </body>
</html>