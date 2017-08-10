<?php
    require_once("User/user_id.php");
    $user = new USER();

if(isset($_POST['btn_resister']))
{
  $uname = strip_tags($_POST['n']);
  $umail = strip_tags($_POST['e']);
  $upass = strip_tags($_POST['m']);
  $choix = strip_tags($_POST['sample-radio']);

  if($uname=="")  {
    $error[] = "provide username !";  
  }
  else if($umail=="") { 
    $error[] = "provide email id !";  
  }
  else if(!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
      $error[] = 'Please enter a valid email address !';
  }
  else if($upass=="") {
    $error[] = "provide password !";
  }
  else if(strlen($upass) < 6){
    $error[] = "Password must be atleast 6 characters"; 
  }
  else
  {
    try
    {
      $stmt = $user->runQuery("SELECT user_name, user_email FROM _Membres WHERE user_name=:uname OR user_email=:umail");
      $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
        
      if($row['user_name']==$uname) {
        $error[] = "sorry username already taken !";
      }
      else if($row['user_email']==$umail) {
        $error[] = "sorry email id already taken !";
      }
      else
      { 
        if($user->register($uname,$umail,$upass)){ 
         if($choix==1){
          $stmt2 = $user->runQuery("UPDATE _Membres SET id_adm='1' WHERE user_email='$umail'");
          $stmt2->execute();
            } 
          $user->redirect('create.php?joined');
        }
      }
    }
    catch(PDOException $e)
    {
      echo $e->getMessage();
    }
  } 
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
                      <a class="" href="evenements.php">
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
                          <li><a class="" href="productions_scientifiques.php"><h5>Productions Scientifiques</h5></a></li>
                      </ul>
                  </li>
                  <li>                    
                      <a class="" href="productions_scientifiques.php">
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
                          <li><a class="" href="login.php"><span>Login Page</span></a></li>
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
                    <h3 class="page-header"><i class="fa fa fa-bars"></i>Membres</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="evenements.php">Acceuil</a></li>
                        <li><i class=""></i>Ajout d'un nouveau membre</li>
                    </ol>
            </div>
          </div>
          <div class="row">
<form action='create.php' method='post' border='0' accept-charset="utf-8">
    <table class='table table-hover table-responsive table-bordered'>
   <?php
           if(isset($error))
            {
              foreach($error as $error)
              {
                 ?>
                           <div class="alert alert-danger">
                              <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                           </div>
                           <?php
              }
            }
            else if(isset($_GET['joined']))
            {
               ?>
                       <div class="alert alert-info">
                            <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered</div>
                       <?php
            }
      ?>
        <tr>
            <td>Nom</td>
            <td><input type='text' name='n' value="" class='form-control' /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type='text' name='e' value="" class='form-control' /></td>
        </tr>
        <tr>
            <td>Mot de passe</td>
            <td><input type='password' name='m' value="" class='form-control' /></td>
        </tr>
        <tr>
          <td>Administration :</td>
          <td><input name="sample-radio" id="radio-01" value="1" type="radio"  /> Oui<br/>
              <input name="sample-radio" id="radio-02" value="2" type="radio" checked/> No
          </td>
        </tr>
<!--         <div class="radios">
        <label class="label_radio" for="radio-01">
        <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> This is option A...
        </label>
        <label class="label_radio" for="radio-02">
        <input name="sample-radio" id="radio-02" value="1" type="radio" />this is option B...
        </label>
        </div>
 --><!--         <tr>
            <td>Office</td>
            <td><input type='text' name='o' value="" class='form-control' /></td>
        </tr>
        <tr>
            <td>Position</td>
            <td><input type='text' name='p' value="" class='form-control' /></td>
        </tr>
 -->        <tr>
            <td></td>
            <td>
                <input type='submit' value='Enregistrer' class='btn btn-primary' name="btn_resister" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href="membres.php">Retour</a>
            </td>
        </tr>
    </table>
</form>

<?php
//if($_POST){
 // $user->create() ;
 //}

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