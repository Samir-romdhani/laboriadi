<?php
// include database connection
include 'user/user_id.php';
 
try {
     
    // get record ID
    // isset() is a PHP function used to verify if a value is there or not
    $id1=isset($_GET['id']) ? $_GET['id'] : die('ERROR:ID not found.');
 
    // delete query
    $query = "DELETE FROM _blog WHERE id = ?";
    $stmt = $member->runQuery($query);
    $stmt->bindParam(1, $id1);
     
    if($stmt->execute()){
        // redirect to read records page and 
        // tell the user record was deleted
        //header('Location: http://localhost/labo-user_2/index91.php?ident={$userRow[user_id]}?action=deleted');
        $member->redirect("acceuil.php?ident={$userRow['user_id']}");
    }else{
        die('Unable to delete.');
    }
}
 
// show error

catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
}
?>