<?php include_once "../db.php";

if(isset($_GET['id'])){
    $Que->del($_GET['id']);
    $Que->del($_GET['subject_id']);
}

header("locaction:../admin.php");

?>