<h1>Meetings</h1>

<?php

 include("functions.php");

 $id = $_GET['Message_Id'];

 $query = "UPDATE `message` SET `Status` = 'read' WHERE `Message_Id` = $id;";
performQuery($query);
 

 $query = "SELECT * from message WHERE Message_Id ='$id';";
 if(count(fetchAll($query)>0)){
 	foreach (fetchAll($query) as $i) {
 		if($i['Type']=='meeting'){
 			echo "You have a meeting. <br/>".$i['Message_Date'];
 		}
 		else{
 			echo "You have a funtions. <br/>". $i['Message'];
 		}
 	}
 }
?>
<br/>
<a href="employee.php">Back</a>