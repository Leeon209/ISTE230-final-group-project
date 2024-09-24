<?php
// $path = './';
$page = 'support';
$path='../';
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

$sql = "SELECT * FROM support";


if ($mysqli) {
	if(!empty($_POST['name']) && !empty($_POST['comment'])){

		$stmt=$mysqli->prepare("INSERT INTO support (name, comment) values (?,?)");
		$stmt->bind_param("ss",$_POST['name'],$_POST['comment']);
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
	  }
	//   echo "It worked";
	}// end of if $mysqli
?>

<?php
	$path='../';
	// require $path.'assets/inc/formtop.php';
        foreach($records as $this_row){
			echo '<li style="list-style: none;margin-left: 5%;margin-right: 11%;">'.$this_row['name'] .": \t" .$this_row['comment'].'</li>';
		} // end of foreach loop

	require $path.'assets/inc/formbottom.php';
	
?>

<!-- GET Date from operating System -->    
<?php
include($path.'assets/inc/footer.php');
?>