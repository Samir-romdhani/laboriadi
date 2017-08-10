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
    <script type='text/javascript'>
    function delete_user( user_id ){
         
        var answer = confirm('vous êtes sûr?');
        if (answer){
            // if user clicked ok, 
            // pass the id to delete.php and execute the delete query
            window.location = 'delete_membre.php?user_id=' + user_id;
        } 
    }
    </script>

    <style>
    .m-r-1em{ margin-right:2em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    </style>

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
<!--                   <li class="sub-menu ">
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
                    <h3 class="page-header"><i class="fa fa fa-bars"></i>Membres</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="evenements.php">Acceuil</a></li>
                        <li><i class=""></i>Membres</li>
                    </ol>
            </div>
          </div>
          <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Nom</th>
                                 <th><i class="icon_id"></i>ID</th>
                                 <th><i class="icon_mail_alt"></i> Email</th>
                                 <th><i class="icon_pin_alt"></i> Ville</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <tr>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th><?php
                                    if($administration) {
                                          echo "<a data-original-title='Ajouter un nouveau membre' data-content='' data-placement='right' data-trigger='hover' class='btn btn-primary popovers' class='btn btn-primary btn-sm' href='create.php'><i class='icon_plus_alt2'></i></a>";}
                                    $action = isset($_GET['action']) ? $_GET['action'] : "";
                                    if($action=='deleted'){
                                        echo "<div class='alert alert-success'>deleted.</div>";
                                     }
                                    ?>
                                  </th>
                              </tr>
<?php
$idd=$userRow['user_id'];
$stmt4 = $member->runQuery("SELECT user_id , user_name , joining_date , user_email , Office FROM _Membres WHERE user_id!='$idd' ORDER BY user_id ASC ");
$stmt4->execute();
$num4 = $stmt4->rowCount();
if($num4>0){
  echo "<tr>";

                              echo "<td><a href='acceuil.php?ident={$user_id}'>";print($userRow['user_name']); echo "</a></td>";   
                              echo "<td>";print($userRow['user_id']);echo "</td>";  
                              echo "<td>"; print($userRow['user_email']); echo "</td>";   
                              echo "<td>"; print($userRow['Office']);echo "</td>";
                              echo "<td>";   
                              echo "<div class='btn-group'>"; 
                              echo "<a data-original-title='Details' data-content='' data-placement='left' data-trigger='hover' class='btn btn-info m-r-1em popovers' class='btn btn-info' href='read_one.php?user_id={$user_id}'><i class='icon_check_alt2'></i></a>";
                              echo "<a data-original-title='Modifier' data-content='informations personnelles: ' data-placement='top' data-trigger='hover' class='btn btn-success m-r-1em popovers' class='btn btn-success' href='update.php?user_id={$user_id}'><i class='icon_plus_alt2'></i></a>";
                              echo "<a data-original-title='Supprimer' data-content='' data-placement='right' data-trigger='hover' class='btn btn-danger popovers' class='btn btn-danger' href='#' onclick='delete_user({$user_id});'><i class='icon_close_alt2'></i></a>";
                              echo "</div>";    
                              echo "</td>";   
  echo "</tr>"; 
                              

        while ($row = $stmt4->fetch(PDO::FETCH_ASSOC)){
            extract($row);

                              echo "<tr>"; 
                              echo "<td><a href='acceuil.php?ident={$user_id}'>{$user_name}</a></td>";   
                              echo "<td>{$user_id}</td>";  
                              echo "<td>{$user_email}</td>";   
                              echo "<td>{$Office}</td>";
                              //echo "<td><img src='img/Spain.png' style='height:18px; margin-top:-2px;''></td>";   
                              echo "<td>";   
                              echo "<div class='btn-group'>"; 
                              echo "<a data-original-title='Details' data-content='{$user_name}' data-placement='left' data-trigger='hover' class='btn btn-info m-r-1em popovers' class='btn btn-info' href='read_one.php?user_id={$user_id}'><i class='icon_check_alt2'></i></a>";
                              if($administration||$user_id==$userRow['user_id'])   
                              {
                              echo "<a data-original-title='Modifier' data-content='informations personnelles: {$user_name}' data-placement='top' data-trigger='hover' class='btn btn-success m-r-1em popovers' class='btn btn-success' href='update.php?user_id={$user_id}'><i class='icon_plus_alt2'></i></a>";
                              echo "<a data-original-title='Supprimer' data-content='{$user_name}' data-placement='right' data-trigger='hover' class='btn btn-danger popovers' class='btn btn-danger' href='#' onclick='delete_user({$user_id});'><i class='icon_close_alt2'></i></a>";
                              }
                              echo "</div>";    
                              echo "</td>";    
                              echo "</tr>";
                            }

  
}
?>
<!--                               //
                              <tr>
                                 <td>Sung Carlson</td>
                                 <td>2011-01-10</td>
                                 <td>ione.gisela@high.org</td>
                                 <td>Robert Lee</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>                             
 -->                           </tbody>
                        </table>
                      </section>
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