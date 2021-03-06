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
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
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
                  <li class="">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Acceuil</span>
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
                  <li>                    
                      <a class="" href="membres.php">
                          <i class="icon_group"></i>
                          <span>Membres</span>
                      </a>
                    </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_search_alt"></i>
                          <span>Recherche</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                     <ul class="sub">
                          <li><a class="" href="axes_de_recherche.php">Axes de Recherche</a></li>
                          <li><a class="" href="index5.php"><h5>Productions Scientifiques</h5></a></li>
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
                  <li>
                      <a class="" href="projets.php">
                          <i class="icon_building"></i>
                          <span>Projets</span>
                      </a>
                  </li>
                  
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
<?php
$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR: Record ID not found.');
$tab=$member->getInfo($user_id);
?>
         <div class="row">
           <div class="col-lg-12">
                    <a href="membres.php"> <span class="arrow_left_alt pull-left" style="font-size:24px"></span></a><br/>
                    <h3 class="page-header"><i class="fa fa fa-bars"></i>Membres</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Acceuil</a></li>
                        <?php echo "<li><i class=''></i>$tab[user_name]</li>";  ?>
                        <li><i class=""></i>Paramètres</li>
                    </ol>
            </div>
          </div>
          <div class="row"> 

  

<form action='update.php?user_id=<?php echo htmlspecialchars($user_id); ?>' method='post' border='0'>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Nom</td>
            <td><input type='text' name='n' value="<?php echo "$tab[user_name]" ;  ?>" class='form-control' /></td>
        </tr>

<!--         <tr>
            <td>Date d'inscription</td>
            <td><input type='text' name='d' value="<?php// echo "$tab[joining_date]";  ?>" class='form-control' /></td>
        </tr>
 -->        
        <tr>
            <td>Email</td>
            <td><input type='text' name='e' value="<?php echo "$tab[user_email]";  ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type='text' name='o' value="<?php echo "$tab[Office]";  ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Position</td>
            <td><input type='text' name='p' value="<?php echo "$tab[Position]";  ?>" class='form-control' /></td>
        </tr>
    <?php if($administration)
         {
          echo "<tr>";
          echo "<td>Administration :</td>";
          echo "<td><input name='sample-radio' id='radio-01' value='1' type='radio'"; if($tab['id_adm']==1) echo "checked"; echo "/> Oui<br/>";  
              echo "<input name='sample-radio' id='radio-02' value='0' type='radio'" ; if($tab['id_adm']==0) echo "checked"; echo "/> No"; 
          echo "</td>";
        echo "</tr>";
       }
    ?>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Enregistrer' class='btn btn-primary' />
            </td> 
        </tr>
        <tr>
            <td></td>
            <!-- <td><a href="membres.php">Retour</a></td> -->
            
        </tr>
    </table>
</form>

<?php
$user_id=isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR: Record ID not found.');
if($_POST){
  $member->update($user_id) ;
}
?>

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