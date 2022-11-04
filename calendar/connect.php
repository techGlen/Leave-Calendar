<?php
					        
     $severName="localhost:3306";
     $useName="techtlom_track";
     $password="Lfee2.Df1UFo";
     $db="techtlom_track";



/*connection
    $mysqli=new mysqli($severName,$useName,$password,$db) or die(mysqli_error($mysqli));*/
    
    $connect = new PDO('mysql:host=localhost;dbname=techtlom_track','Lfee2.Df1UFo', 'techtlom_track');

    $flName=filter_input(INPUT_POST, 'flName');
    $leavReason=filter_input(INPUT_POST, 'studQuery');
    $sDate=filter_input(INPUT_POST, 'sDate');
    $eDate=filter_input(INPUT_POST, 'eDate');
    $leaveType=filter_input(INPUT_POST, 'leaveType');


$userLogin=filter_input(INPUT_POST,'userLogin');

if(isset($_POST['instbtn'])){
       
  $query = "INSERT INTO events (nameSurname, reason, start_event,end_event,	leaveType) VALUES ($flName, $leavReason,$sDate,$eDate,$leaveType)";
  $statement = $connect->prepare($query);
  $statement->execute(
  array(
   $flName => $_POST['flName'],
   $leavReason => $_POST['studQuery'],
   $sDate=> $_POST['sDate'],
   $eDate => $_POST['eDate'],
   $leaveType=> $_POST['leaveType']
   
  )
 );

}

 header("Location:https://tech-tlomi.co.za/Lion/trace.php");
?>