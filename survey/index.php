<?php

$page = 'survey';
$path = '../';

require $path.'assets/inc/header.php';
require_once $path.'assets/inc/nav.php';
require $path.'../pinclude/dbConnect.inc';

$sql = "SELECT content FROM modularSite where page='".$page."'";
$result = $mysqli->query($sql);

if($result->num_rows > 0){
	//output the data for each row
	while ($row = $result->FETCH_ASSOC()) {
		echo $row['content'];
	}
}else{
	echo '0 results, did something wrong!';
}
$sql = "SELECT * FROM contact";
if ($mysqli) {
	if(!empty($_POST['name']) && !empty($_POST['improvement']) && !empty($_POST['favorite'])){

		$stmt=$mysqli->prepare("INSERT INTO contact (name, comment) values (?,?,?)");
		$stmt->bind_param("ss",$_POST['name'],$_POST['improvement'],$_POST['favorite']);
		$stmt->execute();
		$stmt->close();
	}
	  //get contents of table and send back...
	//   $result->fetch_assoc()
	//   $res = mysqli_query($mysqli, $sql);
	$res=$mysqli->query($sql);
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){ // $rowHolder['name'] $rowHolder['comment']
			$records[] = $rowHolder;                               // $records[ ]['name']['comment']
		}
//  var_dump($records); //Used to debug your while loop. Display the database table comments
	  }
	}// end of if $mysqli


?>
<?php
	$path='../';
	require $path.'assets/inc/surveyform.php';
	
?>


<?php
include($path.'assets/inc/footer.php');
?>
