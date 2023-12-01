<?php
include_once "db.php";
if(isset($_POST['id'])){
    $row=$Title->find($_POST['id']);
    
    if(!empty($_FILES['img']['tmp_name'])){
        move_uploaded_file($_FILES['img']['tmp_name'],'./img/'.$_FILES['img']['name']);
        $row['img']=$_FILES['img']['name'];
        $Title->save($row);
    }
    // move_uploaded_file 要特別注意如果遇到檔名會直接覆蓋過去
}

header("location:index.php");
// echo "id=>".$_POST['id'];
// echo "<br>";
// echo $_FILES['img']['name'];


?>