<?php
// include database connection
include 'user/user_id.php';
 
try {
     
    // get record ID
    // isset() is a PHP function used to verify if a value is there or not
    $id=isset($_GET['user_id']) ? $_GET['user_id'] : die('ERROR:ID not found.');
 
    // delete query
    $query0 = "DELETE FROM _blog WHERE id_inscrit = ?";
    $stmt0 = $member->runQuery($query0);
    $stmt0->bindParam(1, $id);

    $query = "DELETE FROM _Membres WHERE user_id = ?";
    $stmt = $member->runQuery($query);
    $stmt->bindParam(1, $id);

    if($stmt0->execute()) 
    {
        if($stmt->execute()){
            if($id==$_SESSION['user_session'])
            {
                $user->redirect("User/logout.php?logout=true");
            }
            else header('Location: membres.php?action=deleted');
       }
        else{
        die('Unable to delete.');
        }
   }
}
 
// show error

catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>