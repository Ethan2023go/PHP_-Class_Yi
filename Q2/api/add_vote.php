<?php include_once "../db.php";

$opt=$Que->find($_POST['opt']);
$opt['count']=$opt['count']+1;


$subject=$Que->find($opt['subject_id']);
// $opts=$Que->all(['subject_id'=>$_GET['id']]); 這條拿到主題
$subject['count']=$subject['count'];

$Que->save($opt);
$Que->save($subject);

header("location:../result.php?id={subject['id']}");
