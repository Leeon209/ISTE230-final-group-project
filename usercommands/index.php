<?php
	$page='usercommands';
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

    include($path.'assets/inc/footer.php');
    mysqli_close($mysqli);

?>