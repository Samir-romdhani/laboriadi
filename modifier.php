<?php
    require_once("User/user_id.php");

     $type = isset($_GET['type']) ? $_GET['type'] : "";
     //$type = isset($_GET['category']) ? $_GET['category'] : "";

//$ch="ergergergergerger<br/>";
//echo"$type" ;
/*if(isset($_POST['category'])) $ch=$_POST['category'] ; 
else{echo"category error !!!<br/>" ;} */
   //$category="";
   //echo "$ch";
if($_POST){
$ch = isset($_POST['category']) ? $_POST['category'] : "Publications";
   if ($ch) {
      echo htmlentities($_POST['category'], ENT_QUOTES, "UTF-8");
      $ok=$member->create2($userRow['user_id'],$ch) ;
        if($ok)
          {
           $member->redirect("projets.php");
           }
           else
            { echo "problem in function create2";}
     }
     else {
     echo "task option is required";
     //exit; 
      }
  }

//$member->create2($userRow['user_id']) ;

/*if($_POST){
  $ok=$member->create2($userRow['user_id'],$ch) ;
  if($ok)
    {
      $member->redirect("projets.php");
    }
  else
  {
    $member->redirect("modifier.php?type=choisir");*/
    
    //$member->redirect("projets.php");
   //echo "<a data-original-title='Ajouter' data-content='autre {$Type}' data-placement='top' data-trigger='hover' class='btn btn-info popovers' class='btn btn-primary' href='http://localhost/labo-user_2/index92.php?type={$Type}'><i class='icon_pencil'></i></a>";
  //}

//}
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
            <?php
            echo "<a href='acceuil.php?ident={$userRow['user_id']}'> <span class='arrow_left_alt pull-left' style='font-size:24px'></span></a><br/>";
            echo "<h3 class='pull-left' style='color:black'>"; print($userRow['user_name']) ; echo "</h3>"; 
            ?>
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-1"></div>  
           <div class="col-lg-9">
                <form action='modifier.php?type=choisir' class="form-horizontal" method='post' accept-charset="utf-8">
                                          <!-- Title -->
                      <div class="form-group">
                          <label class="control-label col-lg-2">Titre</label>
                          <div class="col-lg-10"> 
                          <input type="text" class="form-control" name="titre">
                          </div>
                      </div>   
                                          <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Contenu</label>
                        <div class="col-lg-10">
                        <textarea class="form-control" name="Contenu" cols="30" rows="10" ></textarea>
                        </div>
                      </div>       
                                          <!-- Cateogry -->
                    <?php 
                        echo "<div class='form-group'>";
                        echo "<label class='control-label col-lg-2'>catégorie</label>";
                        echo "<div class='col-lg-10'> ";                              
                        

                        if($type!="choisir")
                        {
                        //echo "<option value=''>- Choisir une catégorie -</option>";
                        echo "<select name='category' class='form-control' size='1'>";
                        echo "<option"; if($type=="Publications") {echo " selected ";}else echo "";  echo "value='Publications'>Publications</option>";
                        echo "<option"; if($type=="Projets") {echo " selected ";}else echo "";       echo "value='Projets'>Projets</option>";
                        echo "<option"; if($type=="Enseignements") {echo " selected ";}else echo ""; echo "value='Enseignements'>Enseignements</option>";
                        echo "<option"; if($type=="Recherche") {echo " selected ";}else echo "";     echo "value='Recherche'>Recherche</option>";
                        echo "<option"; if($type=="Encadrements") {echo " selected ";}else echo "";  echo "value='Encadrements'>Encadrements</option>";
                        echo "<option"; if($type=="Contact") {echo " selected ";}else echo "";       echo "value='Contact'>Contact</option>";
                        }
                        else
                        if($type=="choisir")
                        {
                        echo "<select name='category' class='form-control'>";
                        echo "<option value=''>- Choisir une catégorie -</option>";
                        echo "<option value='Publications'>Publications</option>";
                        echo "<option value='Projets'>Projets</option>";
                        echo "<option value='Enseignements'>Enseignements</option>";
                        echo "<option value='Recherche'>Recherche</option>";
                        echo "<option value='Encadrements'>Encadrements</option>";
                        echo "<option value='Contact'>Contact</option>";
                        }
                        echo "</select>";  
                        echo "</div>";
                      echo "</div>";
                    ?>       
                           <div class="col-lg-offset-2 col-lg-9">
                             <input type='submit' value='Publier' class='btn btn-primary' />
                             <!-- <input type='submit' value='Enregistrer' class='btn btn-danger' /> -->
                          <!--  <button type="submit" class="btn btn-danger">Save Draft</button> -->
                             <!-- <button type="reset"  class="btn btn-default">Reset</button> -->
                           </div>
                </form>

            </div>
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